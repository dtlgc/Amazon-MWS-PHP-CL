<?php

/**
 * Created by PhpStorm.
 * User: Yuri
 * Date: 10/16/2015
 * Time: 12:38 PM
 */
class MarketplaceWebServiceOrders_ClientTest extends PHPUnit_Framework_TestCase
{
	function testGetOrder()
	{
		$dotenv = new Dotenv();
		$root = dirname(dirname(__FILE__));
		$dotenv->load($root);
		$dotenv->required(['AWS_ACCESS_KEY_ID', 'AWS_SECRET_ACCESS_KEY', 'APPLICATION_NAME', 'APPLICATION_VERSION']);

		$serviceUrl = "https://mws.amazonservices.com/Orders/2013-09-01";

		$config = array (
			'ServiceURL' => $serviceUrl,
			'ProxyHost' => null,
			'ProxyPort' => -1,
			'ProxyUsername' => null,
			'ProxyPassword' => null,
			'MaxErrorRetry' => 3,
		);

		$service = new \Amazon\MWS\Orders\Orders_Client(
			getenv("AWS_ACCESS_KEY_ID"),
			getenv("AWS_SECRET_ACCESS_KEY"),
			getenv("APPLICATION_NAME"),
			getenv("APPLICATION_VERSION"),
			$config);

		/************************************************************************
		 * Uncomment to try out Mock Service that simulates MarketplaceWebServiceOrders
		 * responses without calling MarketplaceWebServiceOrders service.
		 *
		 * Responses are loaded from local XML files. You can tweak XML files to
		 * experiment with various outputs during development
		 *
		 * XML files available under MarketplaceWebServiceOrders/Mock tree
		 *
		 ***********************************************************************/
		// $service = new MarketplaceWebServiceOrders_Mock();

		/************************************************************************
		 * Setup request parameters and uncomment invoke to try out
		 * sample for Get Order Action
		 ***********************************************************************/
		// @TODO: set request. Action can be passed as Orders_Model_GetOrder
		$request = new \Amazon\MWS\Orders\Model\Orders_Model_GetOrderRequest([
			'AmazonOrderId'=>'114-9172390-8828251',
			'SellerId'=>getenv("SELLER_ID"),
		]);
//		$request->setSellerId(getenv("MERCHANT_ID"));
//		$request->setAmazonOrderId('114-9172390-8828251');
		// object or array of parameters

		/**
		 * Get Get Order Action Sample
		 * Gets competitive pricing and related information for a product identified by
		 * the MarketplaceId and ASIN.
		 *
		 * @param MarketplaceWebServiceOrders_Interface $service instance of MarketplaceWebServiceOrders_Interface
		 * @param mixed $request Orders_Model_GetOrder or array of parameters
		 */

		try {
			$response = $service->GetOrder($request);

			echo ("Service Response\n");
			echo ("=============================================================================\n");

			$dom = new \DOMDocument();
			$dom->loadXML($response->toXML());
			$dom->preserveWhiteSpace = false;
			$dom->formatOutput = true;
			echo $dom->saveXML();
			echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");

		} catch (MarketplaceWebServiceOrders_Exception $ex) {
			echo("Caught Exception: " . $ex->getMessage() . "\n");
			echo("Response Status Code: " . $ex->getStatusCode() . "\n");
			echo("Error Code: " . $ex->getErrorCode() . "\n");
			echo("Error Type: " . $ex->getErrorType() . "\n");
			echo("Request ID: " . $ex->getRequestId() . "\n");
			echo("XML: " . $ex->getXML() . "\n");
			echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
		}
	}


}
