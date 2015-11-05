<?php

/**
 * Created by PhpStorm.
 * User: Yuri
 * Date: 11/05/2015
 * Time: 3:39 PM
 */
class FeedTests extends PHPUnit_Framework_TestCase
{

    function DownloadTest(){

        $AWS_ACCESS_KEY_ID = getenv("AWS_ACCESS_KEY_ID");
        $AWS_SECRET_ACCESS_KEY = getenv("AWS_SECRET_ACCESS_KEY");
        $config = ['ServiceURL'=>getenv('MWS_SERVICE_URL')];
        $APPLICATION_NAME = getenv("APPLICATION_NAME");
        $APPLICATION_VERSION = getenv("APPLICATION_VERSION");

        $reportsClient = new Amazon\MWS\Reports\Reports_Client(
            $AWS_ACCESS_KEY_ID,
            $AWS_SECRET_ACCESS_KEY,
            $config,
            $APPLICATION_NAME,
            $APPLICATION_VERSION
        );

        $reportListRequest = new Amazon\MWS\Reports\Model\Reports_Model_GetReportListRequest();
        $reportListRequest->setMerchant(getenv('AMAZON_MERCHANT_ID'));
        $reportListRequest->setMarketplace(getenv('AMAZON_MARKETPLACE_ID'));
        $reportListRequest->setAvailableFromDate(new DateTime( '-6 hour' ,new DateTimeZone('UTC')));
        $typeList = new \Amazon\MWS\Reports\Model\Reports_Model_TypeList([
            '_GET_MERCHANT_LISTINGS_DATA_',
            '_GET_MERCHANT_LISTINGS_DATA_LITE_',
            '_GET_MERCHANT_LISTINGS_DATA_LITER_',
        ]);

        $reportListRequest->setReportTypeList($typeList);

        $reportsClient->getReportList($reportListRequest);

    }

}