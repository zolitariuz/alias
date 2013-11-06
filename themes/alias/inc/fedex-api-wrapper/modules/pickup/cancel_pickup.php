<?php
    $strPath = "../../";
    require_once $strPath.'fedex.settings.php';
    require_once $strPath.'classes/class.fedex.php';
    require_once $strPath.'classes/class.fedex.pickup.php';
    
    $error_msg = "";
    $str_selected_orders = "";
    
    $pickup_id = "";
    
    $aryPickup['CarrierCode'] = 'FDXE'; // valid values FDXE-Express, FDXG-Ground, etc
    $aryPickup['PickupConfirmationNumber'] = 9;
    $aryPickup['ScheduledDate'] = date("Y-m-d", mktime(8, 0, 0, date("m")  , date("d")+1, date("Y")));
    $aryPickup['Location'] = 'VNYA'; // Replace 'XXX' with your Pickip Loaction Code/ID
    $aryPickup['CourierRemarks'] = "Do not pickup.  This is a test";

    $objPickup = new fedexPickup();
    $objPickup->requestType("pickup");
    $objPickup->wsdl_root_path = $strPath."wsdl-test/";
    $client = new SoapClient($objPickup->wsdl_root_path.$objPickup->wsdl_path, array('trace' => 1));

    $request = $objPickup->cancelPickupRequest($aryPickup);

    try 
    {
        if ($objPickup->setEndpoint('changeEndpoint')) 
        {
            $newLocation = $client->__setLocation(setEndpoint('endpoint'));
        }

        $response = $client->cancelPickup($request);

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