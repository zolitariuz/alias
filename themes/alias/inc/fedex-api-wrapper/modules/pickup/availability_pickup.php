<?php
    $strPath = "../../";
    require_once $strPath.'fedex.settings.php';
    require_once $strPath.'classes/class.fedex.php';
    require_once $strPath.'classes/class.fedex.pickup.php';
    
    $error_msg = "";
    $str_selected_orders = "";
    
    $pickup_id = "";
    

    $aryPickup['PickupAddress'] = array('StreetLines' => array('10 Fed Ex Pkwy'),
                                              'City' => 'Memphis',
                                              'StateOrProvinceCode' => 'TN',
                                              'PostalCode' => '38115',
                                              'CountryCode' => 'US');
    $aryPickup['PickupRequestType'] = array('SAME_DAY', 'FUTURE_DAY');
    $aryPickup['DispatchDate'] = date("Y-m-d", mktime(8, 0, 0, date("m")  , date("d")+1, date("Y")));
    $aryPickup['PackageReadyTime'] = '12:00:00-05:00';
    $aryPickup['CustomerCloseTime'] = '20:00:00-05:00';
    $aryPickup['Carriers'] = array('FDXE','FDXG');
    $aryPickup['ShipmentAttributes'] = array('Dimensions'=>array('Length'=>'50','Width'=>'45','Height'=>'50','Units'=>'CM'), 'Weight'=>array('Units'=>'KG','Value'=>'3.1'));

    $objPickup = new fedexPickup();
    $objPickup->requestType("pickup");
    $objPickup->wsdl_root_path = $strPath."wsdl-test/";
    $client = new SoapClient($objPickup->wsdl_root_path.$objPickup->wsdl_path, array('trace' => 1));

    $request = $objPickup->pickupAvailabilityRequest($aryPickup);

    try 
    {
        if ($objPickup->setEndpoint('changeEndpoint')) 
        {
            $newLocation = $client->__setLocation(setEndpoint('endpoint'));
        }

        $response = $client->getPickupAvailability($request);

        if ($response->HighestSeverity != 'FAILURE' && $response->HighestSeverity != 'ERROR') 
        {   
            //success

            echo "<pre>";
            print_r($response);
            echo "</pre>";
        } 
        else 
        {
            echo $objPickup->showResponseMessage($response);
            echo "<pre>";
            print_r($response);
            echo "</pre>";
        }
    } 
    catch (SoapFault $exception) 
    {
        echo $objPickup->requestError($exception, $client);
        echo "<pre>";
        print_r($response);
        echo "</pre>";
    }
?>