<?php
    $strPath = "../../";
    require_once $strPath.'fedex.settings.php';
    require_once $strPath.'classes/class.fedex.php';
    require_once $strPath.'classes/class.fedex.track.php';
    
    $objTrack = new fedexTrack();
    $objTrack->requestType("track");
    $objTrack->wsdl_root_path = $strPath."wsdl-test/";
    $client = new SoapClient($objTrack->wsdl_root_path.$objTrack->wsdl_path, array('trace' => 1));
    $request = $objTrack->trackRequest("514405945676");

    try 
    {
        if($objTrack->setEndpoint('changeEndpoint'))
        {
            $newLocation = $client->__setLocation(setEndpoint('endpoint'));
        }

        $response = $client->track($request);

        if ($response->HighestSeverity != 'FAILURE' && $response->HighestSeverity != 'ERROR') 
        {
            //success
            
            echo $response->TrackDetails->StatusDescription;
            
            echo "<pre>";
            print_r($response);
            echo "</pre>";
        } 
        else 
        {
            echo $objTrack->showResponseMessage($response);
            
            echo "<pre>";
            print_r($response);
            echo "</pre>";
        }

    } 
    catch (SoapFault $exception) 
    {
        echo $objTrack->requestError($exception, $client);

        echo "<pre>";
        print_r($response);
        echo "</pre>";
    }
?>