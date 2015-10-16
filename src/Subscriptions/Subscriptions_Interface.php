<?php
namespace Amazon\MWS\Subscriptions;
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
 * @package  MWS Subscriptions Service
 * @version  2013-07-01
 * Library Version: 2015-03-12
 * Generated: Wed Mar 11 20:33:15 GMT 2015
 */

interface  Subscriptions_Interface
{

    /**
     * Create Subscription
     * Create a new subscription.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_CreateSubscription request or MWSSubscriptions_Model_CreateSubscription object itself
     * @see MWSSubscriptions_Model_CreateSubscriptionInput
     * @return MWSSubscriptions_Model_CreateSubscriptionResponse
     *
     * @throws Subscriptions_Exception
     */
    public function createSubscription($request);


    /**
     * Delete Subscription
     * Delete a subscription.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_DeleteSubscription request or MWSSubscriptions_Model_DeleteSubscription object itself
     * @see MWSSubscriptions_Model_DeleteSubscriptionInput
     * @return MWSSubscriptions_Model_DeleteSubscriptionResponse
     *
     * @throws Subscriptions_Exception
     */
    public function deleteSubscription($request);


    /**
     * Deregister Destination
     * Delete a destination.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_DeregisterDestination request or MWSSubscriptions_Model_DeregisterDestination object itself
     * @see MWSSubscriptions_Model_DeregisterDestinationInput
     * @return MWSSubscriptions_Model_DeregisterDestinationResponse
     *
     * @throws Subscriptions_Exception
     */
    public function deregisterDestination($request);


    /**
     * Get Subscription
     * Retrieve subscription information.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_GetSubscription request or MWSSubscriptions_Model_GetSubscription object itself
     * @see MWSSubscriptions_Model_GetSubscriptionInput
     * @return MWSSubscriptions_Model_GetSubscriptionResponse
     *
     * @throws Subscriptions_Exception
     */
    public function getSubscription($request);


    /**
     * List Registered Destinations
     * List all the destinations for the specified seller created by the developer.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_ListRegisteredDestinations request or MWSSubscriptions_Model_ListRegisteredDestinations object itself
     * @see MWSSubscriptions_Model_ListRegisteredDestinationsInput
     * @return MWSSubscriptions_Model_ListRegisteredDestinationsResponse
     *
     * @throws Subscriptions_Exception
     */
    public function listRegisteredDestinations($request);


    /**
     * List Subscriptions
     * List all the subscriptions for the specified seller created by the current developer.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_ListSubscriptions request or MWSSubscriptions_Model_ListSubscriptions object itself
     * @see MWSSubscriptions_Model_ListSubscriptionsInput
     * @return MWSSubscriptions_Model_ListSubscriptionsResponse
     *
     * @throws Subscriptions_Exception
     */
    public function listSubscriptions($request);


    /**
     * Register Destination
     * Create a new destination.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_RegisterDestination request or MWSSubscriptions_Model_RegisterDestination object itself
     * @see MWSSubscriptions_Model_RegisterDestinationInput
     * @return MWSSubscriptions_Model_RegisterDestinationResponse
     *
     * @throws Subscriptions_Exception
     */
    public function registerDestination($request);


    /**
     * Send Test Notification To Destination
     * Send a test Notification to the specified destination.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_SendTestNotificationToDestination request or MWSSubscriptions_Model_SendTestNotificationToDestination object itself
     * @see MWSSubscriptions_Model_SendTestNotificationToDestinationInput
     * @return MWSSubscriptions_Model_SendTestNotificationToDestinationResponse
     *
     * @throws Subscriptions_Exception
     */
    public function sendTestNotificationToDestination($request);


    /**
     * Update Subscription
     * Update a subscription.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_UpdateSubscription request or MWSSubscriptions_Model_UpdateSubscription object itself
     * @see MWSSubscriptions_Model_UpdateSubscriptionInput
     * @return MWSSubscriptions_Model_UpdateSubscriptionResponse
     *
     * @throws Subscriptions_Exception
     */
    public function updateSubscription($request);


    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_GetServiceStatus request or MWSSubscriptions_Model_GetServiceStatus object itself
     * @see MWSSubscriptions_Model_GetServiceStatusRequest
     * @return MWSSubscriptions_Model_GetServiceStatusResponse
     *
     * @throws Subscriptions_Exception
     */
    public function getServiceStatus($request);

}