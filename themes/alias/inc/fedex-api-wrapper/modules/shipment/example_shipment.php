<?php
$strPath = "../../";
require_once $strPath.'fedex.settings.php';
require_once $strPath.'classes/class.fedex.php';
require_once $strPath.'classes/class.fedex.shipment.php';        //to create shipment labels
require_once $strPath.'classes/class.fedex.package.php';
$order_id = "123456";
$objShip = new fedexShipment();
$objShip->requestType("shipment");
$objShip->wsdl_root_path = $strPath."wsdl-test/";

$aryOrder = array(
                'TotalPackages' => 1,
                'PackageType' => 'YOUR_PACKAGING',        //FEDEX_10KG_BOX, FEDEX_25KG_BOX, FEDEX_BOX, FEDEX_ENVELOPE, FEDEX_PAK, FEDEX_TUBE, YOUR_PACKAGING
                'ServiceType' => 'INTERNATIONAL_PRIORITY',
                'TermsOfSaleType' => "DDU",         #    DDU/DDP
                'DropoffType' => 'REGULAR_PICKUP'         // BUSINESS_SERVICE_CENTER, DROP_BOX, REGULAR_PICKUP, REQUEST_COURIER, STATION
);

$client = new SoapClient($objShip->wsdl_root_path . $objShip->wsdl_path, array('trace' => 1)); // Refer to http://us3.php.net/manual/en/ref.soap.php for more information

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
                'PostalCode' => '07C424',
                'CountryCode' => 'CA',
                'Residential' => false)
);

$realTotalPackages = 3;
$est_amount = 1100.00;

$tracking_id = "";
$form_id = "";

for($main_loop = 0;$main_loop<$realTotalPackages;$main_loop++)
{
        $packages = array();
        $aryPackage = array();

        $package_amount = round($est_amount/$realTotalPackages,2);
        $item_amount = $package_amount/4;

        $package_weight = 50.0;

        $packages[0] = new Package("FEDEX Package # $main_loop for order ".$order_id, 1, 1);
        $packages[0]->setPackageWeight($package_weight);
        $packages[0]->setPackageDimensions(8, 7, 3);
        $aryPackage[0] = $packages[0]->getObjectArray();

        $item_weight = $package_weight/4;


        $aryPackageItems = array();
        for($cnt=0;$cnt<4;$cnt++)
        {
            $aryPackageItems[$cnt]['item_qty'] = $cnt+10+1;
            $aryPackageItems[$cnt]['item_price'] = $item_amount;
            $aryPackageItems[$cnt]['item_name'] = "Item Name - ".($cnt+1)." of Package ".($main_loop+1);
            $aryPackageItems[$cnt]['item_weight'] = $item_weight;
        }

        $aryCustomClearance = $objShip->addCustomClearanceDetail($aryPackageItems, $package_amount);

        if($main_loop>0)
        {
            $is_first_package['master_tracking_id'] = $tracking_id;
            $is_first_package['form_id'] = $form_id;
            $request = $objShip->requestShipment($aryRecipient, $aryOrder, $aryPackage, $aryCustomClearance, $is_first_package);
        }
        else
            $request = $objShip->requestShipment($aryRecipient, $aryOrder, $aryPackage, $aryCustomClearance);

        echo "<br /><br /><hr /><br /><br />";

        try
        {
            if ($objShip->setEndpoint('changeEndpoint'))
            {
                $newLocation = $client->__setLocation(setEndpoint('endpoint'));
            }

            $response = $client->processShipment($request); // FedEx web service invocation

            if ($response->HighestSeverity != 'FAILURE' && $response->HighestSeverity != 'ERROR')
            {
                $success = $objShip->showResponseMessage($response);
                echo $success;

//                echo "<pre>";
//                print_r($response);
//                echo "</pre>";

                    // Create PNG or PDF label
                    // Set LabelSpecification.ImageType to 'PDF' for generating a PDF label

                    $file_name = 'fedex-package_no_'.($main_loop+1).'.pdf';
                    $fp = fopen($file_name, 'wb');
                    fwrite($fp, ($response->CompletedShipmentDetail->CompletedPackageDetails->Label->Parts->Image));
                    fclose($fp);

                    echo 'Label <a href="' . $file_name . '">' . $file_name . '</a> was generated.';

                    /*
                     * Store Master Tracking Number for First Package only
                     */
                    if($main_loop == 0)
                    {
                        $tracking_id = $response->CompletedShipmentDetail->CompletedPackageDetails->TrackingIds->TrackingNumber;
                        $form_id = $response->CompletedShipmentDetail->CompletedPackageDetails->TrackingIds->FormId;
                    }
            }
            else
            {
//                echo "<pre>";
//                print_r($response);
//                echo "</pre>";
                $error = $objRate->showResponseMessage($response);
                echo $error;
            }
        }
        catch (SoapFault $exception)
        {
            echo $objShip->requestError($exception, $client);
        }
}


?>