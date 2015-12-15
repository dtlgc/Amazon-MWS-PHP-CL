<?php

/**
 * Created by PhpStorm.
 * User: Yuri
 * Date: 10/14/2015
 * Time: 3:39 PM
 */
class BasicTest extends PHPUnit_Framework_TestCase
{

	function test_autoloader(){
		$what = new Symfony\Component\Yaml\Exception\DumpException();
	}

	function test_init_classes(){

		$d = $c = $b = $a = 'asdasd';
		$ar =[];
		$cart = new \Amazon\MWS\Cart\Cart_Client($a,$b,$c,$d);
		$customer = new Amazon\MWS\Customer\Customer_Client($a,$b,$c,$d);
		$fbai = new Amazon\MWS\FBAInbound\FbaInbound_Client($a,$b,$c,$d);
		$fbav = new Amazon\MWS\FBAInventory\FbaInventory_Client($a,$b,$ar,$c,$d);
		$fbao = new Amazon\MWS\FBAOutbound\FbaOutbound_Client($a,$b,$ar,$c,$d);
		$feeds = new Amazon\MWS\Feeds\Feeds_Client($a,$b,$ar,$c,$d);
		$financ = new Amazon\MWS\Finances\Finances_Client($a,$b,$c,$d);
		$orders = new Amazon\MWS\Orders\Orders_Client($a,$b,$c,$d);
		$products = new Amazon\MWS\Products\Products_Client($a,$b,$c,$d);
		$recommendations = new Amazon\MWS\Recommendations\Recommendations_Client($a,$b,$c,$d);
		$reports = new Amazon\MWS\Reports\Reports_Client($a,$b,$ar,$c,$d);
		$sellers = new Amazon\MWS\Sellers\Sellers_Client($a,$b,$c,$d);
		$subs = new Amazon\MWS\Subscriptions\Subscriptions_Client($a,$b,$c,$d);
		$webstore = new Amazon\MWS\Webstore\Webstore_Client($a,$b,$c,$d);

	}

}
