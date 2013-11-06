<?php
    $strPath = "../../";
    require_once $strPath.'fedex.settings.php';
    require_once $strPath.'classes/class.fedex.php';
    require_once $strPath.'classes/class.fedex.pickup.php';
    
    $error_msg = "";
    $str_selected_orders = "";
    
    $pickup_id = "";

    $aryPickup['PickupName'] = "TEST Pick up";
    $aryPickup['PackageCount'] = 4;
    $aryPickup['TotalWeight'] = 14;
    $aryPickup['CourierRemarks'] = "Test Courier Remarks";
    $aryPickup['CarrierCode'] = "FDXE";     #FDXE/FDXG
    $aryPickup['BuildingPartCode'] = "BUILD123456TEST";
    $aryPickup['PackageLocation'] = "Front";        #Front/None/Side/Rare
    $aryPickup['BuildingPartDescription'] = "TestBuildingDescription";
    $aryPickup['CompanyCloseTime'] = "23:37:46";
    $aryPickup['CompanyCloseTime'] = "20:00:00";
    $aryPickup['ReadyTimestamp'] = "2012-11-06 23:37:46";


    $objPickup = new fedexPickup();
    $objPickup->requestType("pickup");
    $objPickup->wsdl_root_path = $strPath."wsdl-test/";
    $client = new SoapClient($objPickup->wsdl_root_path.$objPickup->wsdl_path, array('trace' => 1));

    $request = $objPickup->pickupRequest($aryPickup);

    try 
    {
        if ($objPickup->setEndpoint('changeEndpoint')) 
        {
            $newLocation = $client->__setLocation(setEndpoint('endpoint'));
        }

        $response = $client->createPickup($request);

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