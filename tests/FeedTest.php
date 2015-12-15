<?php

/**
 * Created by PhpStorm.
 * User: Yuri
 * Date: 11/05/2015
 * Time: 3:39 PM
 */
class FeedTests extends PHPUnit_Framework_TestCase
{

    function testDownloadReport(){

        $root = dirname(dirname(__FILE__));
        $dotenv = new \Dotenv\Dotenv($root);
        $dotenv->load();

        $AWS_ACCESS_KEY_ID = getenv("AWS_ACCESS_KEY_ID");
        $AWS_SECRET_ACCESS_KEY = getenv("AWS_SECRET_ACCESS_KEY");
        $config = ['ServiceURL'=>getenv('MWS_SERVICE_URL')];
        $APPLICATION_NAME = getenv("APPLICATION_NAME");
        $APPLICATION_VERSION = getenv("APPLICATION_VERSION");

        $reportsClient = new \Amazon\MWS\Reports\Reports_Client(
            $AWS_ACCESS_KEY_ID,
            $AWS_SECRET_ACCESS_KEY,
            $config,
            $APPLICATION_NAME,
            $APPLICATION_VERSION
        );

        $fromdatetime = new \DateTime( '-6 hour' ,new \DateTimeZone('UTC'));
        $fromdate = $fromdatetime->format('Y-m-d\TH:i:s\Z');

        $reportListRequest = new Amazon\MWS\Reports\Model\Reports_Model_GetReportListRequest();
        $reportListRequest->setMerchant(getenv('AMAZON_MERCHANT_ID'));
        $reportListRequest->setMarketplace(getenv('AMAZON_MARKETPLACE_ID'));
        $reportListRequest->setAvailableFromDate($fromdate);
        $typeList = new \Amazon\MWS\Reports\Model\Reports_Model_TypeList();
        $typeList->setType(
//            '_GET_ORDERS_DATA_'
            '_GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_'
        );


        $reportListRequest->setReportTypeList($typeList);

        $reports = $reportsClient->getReportList($reportListRequest)->getGetReportListResult()->getReportInfoList();
        foreach( $reports as $i=> $rep){
            $repid =  $rep->getReportId();
            echo "$i: ReportId: $repid";
        }
    }

}