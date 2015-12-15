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
 * The Amazon Marketplace Web Service contain APIs for inventory and order management.
 * 
 */

interface  Reports_Interface
{
    

            
    /**
     * Get Report 
     * The GetReport operation returns the contents of a report. Reports can potentially be
     * very large (>100MB) which is why we only return one report at a time, and in a
     * streaming fashion.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReport.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportResponse
     *
     * @throws Reports_Exception
     */
    public function getReport($request);


            
    /**
     * Get Report Schedule Count 
     * returns the number of report schedules
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleCount.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleCountRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleCountRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleCountRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleCountResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleCountResponse
     *
     * @throws Reports_Exception
     */
    public function getReportScheduleCount($request);


            
    /**
     * Get Report Request List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestListByNextToken.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenResponse
     *
     * @throws Reports_Exception
     */
    public function getReportRequestListByNextToken($request);


            
    /**
     * Update Report Acknowledgements 
     * The UpdateReportAcknowledgements operation updates the acknowledged status of one or more reports.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}UpdateReportAcknowledgements.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_UpdateReportAcknowledgementsRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_UpdateReportAcknowledgementsRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_UpdateReportAcknowledgementsRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_UpdateReportAcknowledgementsResponse \Amazon\MWS\Reports\Model\Reports_Model_UpdateReportAcknowledgementsResponse
     *
     * @throws Reports_Exception
     */
    public function updateReportAcknowledgements($request);


            
    /**
     * Submit Feed 
     * Uploads a file for processing together with the necessary
     * metadata to process the file, such as which type of feed it is.
     * PurgeAndReplace if true means that your existing e.g. inventory is
     * wiped out and replace with the contents of this feed - use with
     * caution (the default is false).
     *   
     * @see http://docs.amazonwebservices.com/${docPath}SubmitFeed.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_SubmitFeedRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_SubmitFeedRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_SubmitFeedRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_SubmitFeedResponse \Amazon\MWS\Reports\Model\Reports_Model_SubmitFeedResponse
     *
     * @throws Reports_Exception
     */
    public function submitFeed($request);


            
    /**
     * Get Report Count 
     * returns a count of reports matching your criteria;
     * by default, the number of reports generated in the last 90 days,
     * regardless of acknowledgement status
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportCount.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportCountRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetReportCountRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportCountRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportCountResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportCountResponse
     *
     * @throws Reports_Exception
     */
    public function getReportCount($request);


            
    /**
     * Get Feed Submission List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionListByNextToken.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListByNextTokenRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListByNextTokenRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListByNextTokenRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListByNextTokenResponse \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListByNextTokenResponse
     *
     * @throws Reports_Exception
     */
    public function getFeedSubmissionListByNextToken($request);


            
    /**
     * Cancel Feed Submissions 
     * cancels feed submissions - by default all of the submissions of the
     * last 30 days that have not started processing
     *   
     * @see http://docs.amazonwebservices.com/${docPath}CancelFeedSubmissions.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsResponse \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsResponse
     *
     * @throws Reports_Exception
     */
    public function cancelFeedSubmissions($request);


            
    /**
     * Request Report 
     * requests the generation of a report
     *   
     * @see http://docs.amazonwebservices.com/${docPath}RequestReport.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_RequestReportRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_RequestReportRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_RequestReportRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_RequestReportResponse \Amazon\MWS\Reports\Model\Reports_Model_RequestReportResponse
     *
     * @throws Reports_Exception
     */
    public function requestReport($request);


            
    /**
     * Get Feed Submission Count 
     * returns the number of feeds matching all of the specified criteria
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionCount.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountResponse \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountResponse
     *
     * @throws Reports_Exception
     */
    public function getFeedSubmissionCount($request);


            
    /**
     * Cancel Report Requests 
     * cancels report requests that have not yet started processing,
     * by default all those within the last 90 days
     *   
     * @see http://docs.amazonwebservices.com/${docPath}CancelReportRequests.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_CancelReportRequestsRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_CancelReportRequestsRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_CancelReportRequestsRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_CancelReportRequestsResponse \Amazon\MWS\Reports\Model\Reports_Model_CancelReportRequestsResponse
     *
     * @throws Reports_Exception
     */
    public function cancelReportRequests($request);


            
    /**
     * Get Report List 
     * returns a list of reports; by default the most recent ten reports,
     * regardless of their acknowledgement status
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportList.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportListRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetReportListRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportListRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportListResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportListResponse
     *
     * @throws Reports_Exception
     */
    public function getReportList($request);


            
    /**
     * Get Feed Submission Result 
     * retrieves the feed processing report
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionResult.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionResultRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionResultRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionResultRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionResultResponse \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionResultResponse
     *
     * @throws Reports_Exception
     */
    public function getFeedSubmissionResult($request);


            
    /**
     * Get Feed Submission List 
     * returns a list of feed submission identifiers and their associated metadata
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionList.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListResponse \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionListResponse
     *
     * @throws Reports_Exception
     */
    public function getFeedSubmissionList($request);


            
    /**
     * Get Report Request List 
     * returns a list of report requests ids and their associated metadata
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestList.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListResponse
     *
     * @throws Reports_Exception
     */
    public function getReportRequestList($request);


            
    /**
     * Get Report Schedule List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleListByNextToken.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListByNextTokenRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListByNextTokenRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListByNextTokenRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListByNextTokenResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListByNextTokenResponse
     *
     * @throws Reports_Exception
     */
    public function getReportScheduleListByNextToken($request);


            
    /**
     * Get Report List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportListByNextToken.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportListByNextTokenRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetReportListByNextTokenRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportListByNextTokenRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportListByNextTokenResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportListByNextTokenResponse
     *
     * @throws Reports_Exception
     */
    public function getReportListByNextToken($request);


            
    /**
     * Manage Report Schedule 
     * Creates, updates, or deletes a report schedule
     * for a given report type, such as order reports in particular.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}ManageReportSchedule.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_ManageReportScheduleRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_ManageReportScheduleRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_ManageReportScheduleRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_ManageReportScheduleResponse \Amazon\MWS\Reports\Model\Reports_Model_ManageReportScheduleResponse
     *
     * @throws Reports_Exception
     */
    public function manageReportSchedule($request);


            
    /**
     * Get Report Request Count 
     * returns a count of report requests; by default all the report
     * requests in the last 90 days
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestCount.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountResponse
     *
     * @throws Reports_Exception
     */
    public function getReportRequestCount($request);


            
    /**
     * Get Report Schedule List 
     * returns the list of report schedules
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleList.html      
     * @param mixed $request array of parameters for \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListRequest request
     * or \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListRequest object itself
     * @see \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListRequest
     * @return \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListResponse \Amazon\MWS\Reports\Model\Reports_Model_GetReportScheduleListResponse
     *
     * @throws Reports_Exception
     */
    public function getReportScheduleList($request);

}