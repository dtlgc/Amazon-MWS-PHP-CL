<?php
namespace Amazon\MWS\Reports;
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebService
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-01-01
 */
/******************************************************************************* 

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 * 
 */

/**
 *  @see MarketplaceWebService_Interface
 */
//require_once ('MarketplaceWebService/Interface.php');

/**
 * The Amazon Marketplace Web Service contain APIs for inventory and order management.
 * 
 */
class  Reports_Mock implements Reports_Interface
{
    // Public API ------------------------------------------------------------//

            
    /**
     * Get Report 
     * The GetReport operation returns the contents of a report. Reports can potentially be
     * very large (>100MB) which is why we only return one report at a time, and in a
     * streaming fashion.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReport.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReport request or \Amazon\MWS\Reports\Model\Reports_Model_GetReport object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReport
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportResponse
     *
     * @throws Reports_Exception
     */
    public function getReport($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetReportResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetReportResponse::fromXML($this->invoke('GetReport'));
    }


            
    /**
     * Get Report Schedule Count 
     * returns the number of report schedules
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleCount.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleCount request or \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleCount object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleCount
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleCountResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleCountResponse
     *
     * @throws Reports_Exception
     */
    public function getReportScheduleCount($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetReportScheduleCountResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleCountResponse::fromXML($this->invoke('GetReportScheduleCount'));
    }


            
    /**
     * Get Report Request List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestListByNextToken.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextToken request or \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextToken object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextToken
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenResponse
     *
     * @throws Reports_Exception
     */
    public function getReportRequestListByNextToken($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetReportRequestListByNextTokenResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenResponse::fromXML($this->invoke('GetReportRequestListByNextToken'));
    }


            
    /**
     * Update Report Acknowledgements 
     * The UpdateReportAcknowledgements operation updates the acknowledged status of one or more reports.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}UpdateReportAcknowledgements.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_UpdateReportAcknowledgements request or \Amazon\MWS\Reports\Model\Reports_Model_UpdateReportAcknowledgements object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_UpdateReportAcknowledgements
     * @return \Amazon\MWS\Reports\Model\Reports_Model_UpdateReportAcknowledgementsResponse \Amazon\MWS\Reports\Model\Reports_Model_UpdateReportAcknowledgementsResponse
     *
     * @throws Reports_Exception
     */
    public function updateReportAcknowledgements($request) 
    {
        //require_once ('MarketplaceWebService/Model/UpdateReportAcknowledgementsResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_UpdateReportAcknowledgementsResponse::fromXML($this->invoke('UpdateReportAcknowledgements'));
    }


            
    /**
     * Submit Feed 
     * Uploads a file for processing together with the necessary
     * metadata to process the file, such as which type of feed it is.
     * PurgeAndReplace if true means that your existing e.g. inventory is
     * wiped out and replace with the contents of this feed - use with
     * caution (the default is false).
     *   
     * @see http://docs.amazonwebservices.com/${docPath}SubmitFeed.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_SubmitFeed request or \Amazon\MWS\Reports\Model\Reports_Model_SubmitFeed object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_SubmitFeed
     * @return \Amazon\MWS\Reports\Model\Reports_Model_SubmitFeedResponse \Amazon\MWS\Reports\Model\Reports_Model_SubmitFeedResponse
     *
     * @throws Reports_Exception
     */
    public function submitFeed($request) 
    {
        //require_once ('MarketplaceWebService/Model/SubmitFeedResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_SubmitFeedResponse::fromXML($this->invoke('SubmitFeed'));
    }


            
    /**
     * Get Report Count 
     * returns a count of reports matching your criteria;
     * by default, the number of reports generated in the last 90 days,
     * regardless of acknowledgement status
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportCount.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportCount request or \Amazon\MWS\Reports\Model\Reports_Model_GetReportCount object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportCount
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportCountResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportCountResponse
     *
     * @throws Reports_Exception
     */
    public function getReportCount($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetReportCountResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetReportCountResponse::fromXML($this->invoke('GetReportCount'));
    }


            
    /**
     * Get Feed Submission List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionListByNextToken.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListByNextToken request or \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListByNextToken object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListByNextToken
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListByNextTokenResponse \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListByNextTokenResponse
     *
     * @throws Reports_Exception
     */
    public function getFeedSubmissionListByNextToken($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetFeedSubmissionListByNextTokenResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListByNextTokenResponse::fromXML($this->invoke('GetFeedSubmissionListByNextToken'));
    }


            
    /**
     * Cancel Feed Submissions 
     * cancels feed submissions - by default all of the submissions of the
     * last 30 days that have not started processing
     *   
     * @see http://docs.amazonwebservices.com/${docPath}CancelFeedSubmissions.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissions request or \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissions object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissions
     * @return \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsResponse \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsResponse
     *
     * @throws Reports_Exception
     */
    public function cancelFeedSubmissions($request) 
    {
        //require_once ('MarketplaceWebService/Model/CancelFeedSubmissionsResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsResponse::fromXML($this->invoke('CancelFeedSubmissions'));
    }


            
    /**
     * Request Report 
     * requests the generation of a report
     *   
     * @see http://docs.amazonwebservices.com/${docPath}RequestReport.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_RequestReport request or \Amazon\MWS\Reports\Model\Reports_Model_RequestReport object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_RequestReport
     * @return \Amazon\MWS\Reports\Model\Reports_Model_RequestReportResponse \Amazon\MWS\Reports\Model\Reports_Model_RequestReportResponse
     *
     * @throws Reports_Exception
     */
    public function requestReport($request) 
    {
        //require_once ('MarketplaceWebService/Model/RequestReportResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_RequestReportResponse::fromXML($this->invoke('RequestReport'));
    }


            
    /**
     * Get Feed Submission Count 
     * returns the number of feeds matching all of the specified criteria
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionCount.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCount request or \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCount object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCount
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountResponse \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountResponse
     *
     * @throws Reports_Exception
     */
    public function getFeedSubmissionCount($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetFeedSubmissionCountResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountResponse::fromXML($this->invoke('GetFeedSubmissionCount'));
    }


            
    /**
     * Cancel Report Requests 
     * cancels report requests that have not yet started processing,
     * by default all those within the last 90 days
     *   
     * @see http://docs.amazonwebservices.com/${docPath}CancelReportRequests.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_CancelReportRequests request or \Amazon\MWS\Reports\Model\Reports_Model_CancelReportRequests object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_CancelReportRequests
     * @return \Amazon\MWS\Reports\Model\Reports_Model_CancelReportRequestsResponse \Amazon\MWS\Reports\Model\Reports_Model_CancelReportRequestsResponse
     *
     * @throws Reports_Exception
     */
    public function cancelReportRequests($request) 
    {
        //require_once ('MarketplaceWebService/Model/CancelReportRequestsResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_CancelReportRequestsResponse::fromXML($this->invoke('CancelReportRequests'));
    }


            
    /**
     * Get Report List 
     * returns a list of reports; by default the most recent ten reports,
     * regardless of their acknowledgement status
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportList.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportList request or \Amazon\MWS\Reports\Model\Reports_Model_GetReportList object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportList
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportListResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportListResponse
     *
     * @throws Reports_Exception
     */
    public function getReportList($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetReportListResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetReportListResponse::fromXML($this->invoke('GetReportList'));
    }


            
    /**
     * Get Feed Submission Result 
     * retrieves the feed processing report
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionResult.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionResult request or \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionResult object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionResult
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionResultResponse \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionResultResponse
     *
     * @throws Reports_Exception
     */
    public function getFeedSubmissionResult($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetFeedSubmissionResultResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionResultResponse::fromXML($this->invoke('GetFeedSubmissionResult'));
    }


            
    /**
     * Get Feed Submission List 
     * returns a list of feed submission identifiers and their associated metadata
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionList.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionList request or \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionList object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionList
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListResponse \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListResponse
     *
     * @throws Reports_Exception
     */
    public function getFeedSubmissionList($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetFeedSubmissionListResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListResponse::fromXML($this->invoke('GetFeedSubmissionList'));
    }


            
    /**
     * Get Report Request List 
     * returns a list of report requests ids and their associated metadata
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestList.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestList request or \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestList object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestList
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListResponse
     *
     * @throws Reports_Exception
     */
    public function getReportRequestList($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetReportRequestListResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListResponse::fromXML($this->invoke('GetReportRequestList'));
    }


            
    /**
     * Get Report Schedule List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleListByNextToken.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListByNextToken request or \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListByNextToken object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListByNextToken
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListByNextTokenResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListByNextTokenResponse
     *
     * @throws Reports_Exception
     */
    public function getReportScheduleListByNextToken($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetReportScheduleListByNextTokenResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListByNextTokenResponse::fromXML($this->invoke('GetReportScheduleListByNextToken'));
    }


            
    /**
     * Get Report List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportListByNextToken.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportListByNextToken request or \Amazon\MWS\Reports\Model\Reports_Model_GetReportListByNextToken object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportListByNextToken
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportListByNextTokenResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportListByNextTokenResponse
     *
     * @throws Reports_Exception
     */
    public function getReportListByNextToken($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetReportListByNextTokenResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetReportListByNextTokenResponse::fromXML($this->invoke('GetReportListByNextToken'));
    }


            
    /**
     * Manage Report Schedule 
     * Creates, updates, or deletes a report schedule
     * for a given report type, such as order reports in particular.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}ManageReportSchedule.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_ManageReportSchedule request or \Amazon\MWS\Reports\Model\Reports_Model_ManageReportSchedule object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_ManageReportSchedule
     * @return \Amazon\MWS\Reports\Model\Reports_Model_ManageReportScheduleResponse \Amazon\MWS\Reports\Model\Reports_Model_ManageReportScheduleResponse
     *
     * @throws Reports_Exception
     */
    public function manageReportSchedule($request) 
    {
        //require_once ('MarketplaceWebService/Model/ManageReportScheduleResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_ManageReportScheduleResponse::fromXML($this->invoke('ManageReportSchedule'));
    }


            
    /**
     * Get Report Request Count 
     * returns a count of report requests; by default all the report
     * requests in the last 90 days
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestCount.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCount request or \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCount object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCount
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountResponse
     *
     * @throws Reports_Exception
     */
    public function getReportRequestCount($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetReportRequestCountResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountResponse::fromXML($this->invoke('GetReportRequestCount'));
    }


            
    /**
     * Get Report Schedule List 
     * returns the list of report schedules
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleList.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleList request or \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleList object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleList
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListResponse
     *
     * @throws Reports_Exception
     */
    public function getReportScheduleList($request) 
    {
        //require_once ('MarketplaceWebService/Model/GetReportScheduleListResponse.php');
        return \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListResponse::fromXML($this->invoke('GetReportScheduleList'));
    }

    // Private API ------------------------------------------------------------//

    private function invoke($actionName)
    {
        return $xml = file_get_contents('MarketplaceWebService/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}