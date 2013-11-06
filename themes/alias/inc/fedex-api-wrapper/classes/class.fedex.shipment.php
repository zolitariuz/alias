<?php
/**
 * Mubashir Ali
 * saad_ali6@yahoo.com
 */
class fedexShipment extends fedexAPI {

    public $ship_label;

    public function __construct()
    {
        parent::__construct();
    }

    public function requestShipment($aryRecipient, $aryOrder, $aryPackage, $aryCustomClearance, $is_first_package = array())
    {
        $request['WebAuthenticationDetail'] = $this->getAuthenticationDetail();
        $request['ClientDetail'] = $this->getClientDetail();

        $request['TransactionDetail'] = array('CustomerTransactionId' => '*** Express International Shipping Request v10 using PHP ***');
        $request['Version'] = $this->getServiceVersion();

        $request['RequestedShipment'] = array
        (
            'ShipTimestamp'           => date('c'),
            'DropoffType'             => $aryOrder['DropoffType'],
            'ServiceType'             => $aryOrder['ServiceType'],
            'PackagingType'           => $aryOrder['PackageType'],
            'Shipper'                 => $this->addShipper(),
            'Recipient'               => $aryRecipient,
            'ShippingChargesPayment'  => $this->addShippingChargesPayment(),
            'CustomsClearanceDetail'  => $aryCustomClearance,
            'LabelSpecification'      => $this->addLabelSpecification(),
            'CustomerSpecifiedDetail' => array(
                'MaskedData' => 'SHIPPER_ACCOUNT_NUMBER'
            ),
            'RateRequestTypes'          => array('ACCOUNT'), // valid values ACCOUNT and LIST
            //'MasterTrackingID'        => '794798508381',   //MasterTrackingID will return (794798508392)           [For All Other Secondary Packages]
            'PackageCount'              => $aryOrder['TotalPackages'],
            'RequestedPackageLineItems' => $aryPackage,
            'CustomerReferences'        => array(
                '0' => array(
                    'CustomerReferenceType' => 'CUSTOMER_REFERENCE',
                    'Value'                 => 'TC007_07_PT1_ST01_PK01_SNDUS_RCPCA_POS'
                )
            )
        );

        $request['International']['TermsOfSaleType'] = $aryOrder['TermsOfSaleType'];

        if(count($is_first_package)>0)
        {
            $request['MasterTrackingID'] = $is_first_package['master_tracking_id'];
            $request['FormId'] = $is_first_package['form_id'];
        }

        return $request;
    }

    public function addLabelSpecification()
    {
        $labelSpecification = array(
            'LabelFormatType' => 'COMMON2D', // valid values COMMON2D, LABEL_DATA_ONLY
            'ImageType'       => 'PDF', // valid values DPL, EPL2, PDF, ZPLII and PNG
            'LabelStockType'  => 'PAPER_7X4.75'
        );
        return $labelSpecification;
    }

    public function addCustomClearanceDetail($aryPackageItems, $package_amount)
    {
        $aryCommodities = array();

        $nLoop = count($aryPackageItems);
        for($cnt=0;$cnt<$nLoop;$cnt++)
        {
            $aryCommodities[$cnt]['NumberOfPieces']       = $aryPackageItems[$cnt]['item_qty'];
            $aryCommodities[$cnt]['Description']          = $aryPackageItems[$cnt]['item_name'];
            $aryCommodities[$cnt]['CountryOfManufacture'] = 'US';
            $aryCommodities[$cnt]['Weight']               = array('Units'=>'LB','Value'=>$aryPackageItems[$cnt]['item_weight']);
            $aryCommodities[$cnt]['Quantity']             = $aryPackageItems[$cnt]['item_qty'];
            $aryCommodities[$cnt]['QuantityUnits']        = 'EA';
            $aryCommodities[$cnt]['UnitPrice']            = array('Currency'=>'USD', 'Amount'=>$aryPackageItems[$cnt]['item_price']);
            $aryCommodities[$cnt]['CustomsValue']         = array('Currency'=>'USD', 'Amount'=>$aryPackageItems[$cnt]['item_price']);
        }

        $customerClearanceDetail = array(
            'DutiesPayment' => array(
                'PaymentType' => 'SENDER', // valid values RECIPIENT, SENDER and THIRD_PARTY
                'Payor'       => array(
                    'AccountNumber' => $this->duty_account,
                    'CountryCode'   => 'CA'
                )
            ),
            'DocumentContent' => 'NON_DOCUMENTS',
            'CustomsValue'    => array(
                'Currency' => 'USD',
                'Amount'   => $package_amount
            ),
            'Commodities' => $aryCommodities,
            /*'CommercialInvoice' => array(
                'Comments'=>'Test Commercial Invoice',
                'FreightCharge'=>'100.00',
                'SpecialInstructions'=>'Test Spercial Instructions',
                'DeclarationStatement'=>'Test Desclaration Statement'
            ),*/
            'ExportDetail' => array(
                'B13AFilingOption' => 'NOT_REQUIRED'
            )
        );
        return $customerClearanceDetail;
    }

}

?>