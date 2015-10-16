<?php
namespace Amazon\MWS\Recommendations;
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
 * @package  MWS Recommendations Section Service
 * @version  2013-04-01
 * Library Version: 2015-03-12
 * Generated: Wed Mar 11 20:34:47 GMT 2015
 */

interface  Recommendations_Interface
{

    /**
     * Get Last Updated Time For Recommendations
     * Retrieving last updated time for all recommendation categories for the given marketplace and seller. 
     *       If last updated time for a category is null, it indicates no active recommendations for this seller in the given marketplace for this category.
     *
     * @param mixed $request array of parameters for MWSRecommendations_Model_GetLastUpdatedTimeForRecommendations request or MWSRecommendations_Model_GetLastUpdatedTimeForRecommendations object itself
     * @see MWSRecommendations_Model_GetLastUpdatedTimeForRecommendationsRequest
     * @return MWSRecommendations_Model_GetLastUpdatedTimeForRecommendationsResponse
     *
     * @throws Recommendations_Exception
     */
    public function getLastUpdatedTimeForRecommendations($request);


    /**
     * List Recommendations
     * Retrieving first batch of recommendations.
     *
     * @param mixed $request array of parameters for MWSRecommendations_Model_ListRecommendations request or MWSRecommendations_Model_ListRecommendations object itself
     * @see MWSRecommendations_Model_ListRecommendationsRequest
     * @return MWSRecommendations_Model_ListRecommendationsResponse
     *
     * @throws Recommendations_Exception
     */
    public function listRecommendations($request);


    /**
     * List Recommendations By Next Token
     * Retrieving recommendation by next token.
     *
     * @param mixed $request array of parameters for MWSRecommendations_Model_ListRecommendationsByNextToken request or MWSRecommendations_Model_ListRecommendationsByNextToken object itself
     * @see MWSRecommendations_Model_ListRecommendationsByNextTokenRequest
     * @return MWSRecommendations_Model_ListRecommendationsByNextTokenResponse
     *
     * @throws Recommendations_Exception
     */
    public function listRecommendationsByNextToken($request);


    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MWSRecommendations_Model_GetServiceStatus request or MWSRecommendations_Model_GetServiceStatus object itself
     * @see MWSRecommendations_Model_GetServiceStatusRequest
     * @return MWSRecommendations_Model_GetServiceStatusResponse
     *
     * @throws Recommendations_Exception
     */
    public function getServiceStatus($request);

}