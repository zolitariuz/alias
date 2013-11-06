<?php
    $strPath = "../../";
    require_once $strPath.'classes/class.fedex.php';
    require_once $strPath.'classes/class.fedex.rate.php';
    require_once $strPath.'fedex.settings.php';
    require_once $strPath.'classes/class.fedex.package.php';

    $objRate = new fedexRates();
    $objRate->requestType("rate");
    
    $objRate->wsdl_root_path = $strPath."wsdl-test/";

    $client = new SoapClient($objRate->wsdl_root_path.$objRate->wsdl_path, array('trace' => 1));

    $aryRecipient = array(
            'Contact' => array(
                    'PersonName' => 'Recipient Name',
                    'CompanyName' => 'Company Name',
                    'PhoneNumber' => '9012637906'
            ),
            'Address' => array(
                    'StreetLines' => array('Address Line 1'),
                    'City' => 'Richmond',
                    'StateOrProvinceCode' => 'BC',
                    'PostalCode' => 'V7C4V4',
                    'CountryCode' => 'CA',
                    'Residential' => false)
    );
    
    $packages = array();
    $aryPackage = array();
    
    $total_packages = 2;
    
    $packages[0] = new Package("FEDEX Package # 1", $total_packages, 1);
    $packages[0]->setPackageWeight("2.00");     //Package Actual Weight
    $packages[0]->setPackageDimensions("17.88", "12.38", "3.00");       //Package (Length x Width x Height)
    $aryPackage[0] = $packages[0]->getObjectArray();
    
    $packages[1] = new Package("FEDEX Package # 2", $total_packages, 1);
    $packages[1]->setPackageWeight("2.00");     //Package Actual Weight
    $packages[1]->setPackageDimensions("17.88", "12.38", "3.00");       //Package (Length x Width x Height)
    $aryPackage[1] = $packages[1]->getObjectArray();
    
    
    /*
    EUROPE_FIRST_INTERNATIONAL_PRIORITY, FEDEX_1_DAY_FREIGHT, FEDEX_2_DAY, FEDEX_2_DAY_AM, FEDEX_2_DAY_FREIGHT
    FEDEX_3_DAY_FREIGHT, FEDEX_EXPRESS_SAVER, FEDEX_FIRST_FREIGHT, FEDEX_FREIGHT_ECONOMY, FEDEX_FREIGHT_PRIORITY
    FEDEX_GROUND, FIRST_OVERNIGHT, GROUND_HOME_DELIVERY, INTERNATIONAL_ECONOMY, INTERNATIONAL_ECONOMY_FREIGHT
    INTERNATIONAL_FIRST, INTERNATIONAL_PRIORITY, INTERNATIONAL_PRIORITY_FREIGHT, PRIORITY_OVERNIGHT, SMART_POST, STANDARD_OVERNIGHT
    */
    $aryOrder = array(
                    'TotalPackages' => $total_packages,
                    'PackageType' => 'YOUR_PACKAGING',        #FEDEX_10KG_BOX, FEDEX_25KG_BOX, FEDEX_BOX, FEDEX_ENVELOPE, FEDEX_PAK, FEDEX_TUBE, YOUR_PACKAGING
                    'ServiceType' => 'INTERNATIONAL_PRIORITY',
                    'TermsOfSaleType' => "DDU",         #    DDU/DDP
                    'DropoffType' => 'REGULAR_PICKUP'         # BUSINESS_SERVICE_CENTER, DROP_BOX, REGULAR_PICKUP, REQUEST_COURIER, STATION
    );

    
    $request = $objRate->rateRequest($aryRecipient, $aryOrder, $aryPackage);
    
    try 
    {
        if($objRate->setEndpoint('changeEndpoint'))
        {
            $newLocation = $client->__setLocation(setEndpoint('endpoint'));
        }

        $response = $client->getRates($request);

        if ($response -> HighestSeverity != 'FAILURE' && $response -> HighestSeverity != 'ERROR')
        {
            $success = $objRate->showResponseMessage($response);
            echo $success;
            
            $rateReply = $response -> RateReplyDetails;
            echo '<table border="1">';
            echo '<tr><td>Service Type</td><td>Amount</td><td>Delivery Date</td></tr><tr>';
            $serviceType = '<td>'.$rateReply -> ServiceType . '</td>';
            $amount = '<td>$' . number_format($rateReply->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Amount,2,".",",") . '</td>';
            if(array_key_exists('DeliveryTimestamp',$rateReply))
            {
                $deliveryDate= '<td>' . $rateReply->DeliveryTimestamp . '</td>';
            }
            else if(array_key_exists('TransitTime',$rateReply))
            {
                $deliveryDate= '<td>' . $rateReply->TransitTime . '</td>';
            }
            else 
            {
                $deliveryDate='<td>&nbsp;</td>';
            }
            echo $serviceType . $amount. $deliveryDate;
            echo '</tr>';
            echo '</table>';
        }
        else
        {
            $error = $objRate->showResponseMessage($response);
            echo $error;
        }

    } 
    catch (SoapFault $exception) 
    {
        echo $objRate->requestError($exception, $client);
    }
    
?>