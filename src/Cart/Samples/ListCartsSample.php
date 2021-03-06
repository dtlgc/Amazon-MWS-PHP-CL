<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Cart Service
 * @version  2014-03-01
 * Library Version: 2015-03-12
 * Generated: Wed Mar 11 20:26:26 GMT 2015
 */

/**
 * List Carts Sample
 */

//require_once('.config.inc.php');

/************************************************************************
 * Instantiate Implementation of MWSCartService
 *
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants
 * are defined in the .config.inc.php located in the same
 * directory as this sample
 ***********************************************************************/
// More endpoints are listed in the MWS Developer Guide
// North America:
//$serviceUrl = "https://mws.amazonservices.com/CartInformation/2014-03-01";
// Europe
//$serviceUrl = "https://mws-eu.amazonservices.com/CartInformation/2014-03-01";
// Japan
//$serviceUrl = "https://mws.amazonservices.jp/CartInformation/2014-03-01";
// China
//$serviceUrl = "https://mws.amazonservices.com.cn/CartInformation/2014-03-01";


 $config = array (
   'ServiceURL' => $serviceUrl,
   'ProxyHost' => null,
   'ProxyPort' => -1,
   'ProxyUsername' => null,
   'ProxyPassword' => null,
   'MaxErrorRetry' => 3,
 );

 $service = new MWSCartService_Client(
        AWS_ACCESS_KEY_ID,
        AWS_SECRET_ACCESS_KEY,
        APPLICATION_NAME,
        APPLICATION_VERSION,
        $config);

/************************************************************************
 * Uncomment to try out Mock Service that simulates MWSCartService
 * responses without calling MWSCartService service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under MWSCartService/Mock tree
 *
 ***********************************************************************/
 // $service = new MWSCartService_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out
 * sample for List Carts Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Cart_Model_ListCarts
 $request = new Cart_Model_ListCartsRequest();
 $request->setSellerId(MERCHANT_ID);
 // object or array of parameters
 invokeListCarts($service, $request);

/**
  * Get List Carts Action Sample
  * Gets competitive pricing and related information for a product identified by
  * the MarketplaceId and ASIN.
  *
  * @param MWSCartService_Interface $service instance of MWSCartService_Interface
  * @param mixed $request Cart_Model_ListCarts or array of parameters
  */

  function invokeListCarts(MWSCartService_Interface $service, $request)
  {
      try {
        $response = $service->ListCarts($request);

        echo ("Service Response\n");
        echo ("=============================================================================\n");

        $dom = new \DOMDocument();
        $dom->loadXML($response->toXML());
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        echo $dom->saveXML();
        echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");

     } catch (MWSCartService_Exception $ex) {
        echo("Caught Exception: " . $ex->getMessage() . "\n");
        echo("Response Status Code: " . $ex->getStatusCode() . "\n");
        echo("Error Code: " . $ex->getErrorCode() . "\n");
        echo("Error Type: " . $ex->getErrorType() . "\n");
        echo("Request ID: " . $ex->getRequestId() . "\n");
        echo("XML: " . $ex->getXML() . "\n");
        echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
     }
 }

