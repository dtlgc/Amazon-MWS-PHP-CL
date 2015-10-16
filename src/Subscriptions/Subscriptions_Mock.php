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

/**
 *  @see MWSSubscriptionsService_Interface
 */
//require_once (dirname(__FILE__) . '/Interface.php');

class Subscriptions_Mock implements Subscriptions_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * Create Subscription
     * Create a new subscription.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_CreateSubscription request or MWSSubscriptions_Model_CreateSubscription object itself
     * @see MWSSubscriptions_Model_CreateSubscription
     * @return MWSSubscriptions_Model_CreateSubscriptionResponse
     *
     * @throws Subscriptions_Exception
     */
    public function createSubscription($request)
    {
        //require_once (dirname(__FILE__) . '/Model/CreateSubscriptionResponse.php');
        return MWSSubscriptions_Model_CreateSubscriptionResponse::fromXML($this->_invoke('CreateSubscription'));
    }

    /**
     * Delete Subscription
     * Delete a subscription.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_DeleteSubscription request or MWSSubscriptions_Model_DeleteSubscription object itself
     * @see MWSSubscriptions_Model_DeleteSubscription
     * @return MWSSubscriptions_Model_DeleteSubscriptionResponse
     *
     * @throws Subscriptions_Exception
     */
    public function deleteSubscription($request)
    {
        //require_once (dirname(__FILE__) . '/Model/DeleteSubscriptionResponse.php');
        return MWSSubscriptions_Model_DeleteSubscriptionResponse::fromXML($this->_invoke('DeleteSubscription'));
    }

    /**
     * Deregister Destination
     * Delete a destination.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_DeregisterDestination request or MWSSubscriptions_Model_DeregisterDestination object itself
     * @see MWSSubscriptions_Model_DeregisterDestination
     * @return MWSSubscriptions_Model_DeregisterDestinationResponse
     *
     * @throws Subscriptions_Exception
     */
    public function deregisterDestination($request)
    {
        //require_once (dirname(__FILE__) . '/Model/DeregisterDestinationResponse.php');
        return MWSSubscriptions_Model_DeregisterDestinationResponse::fromXML($this->_invoke('DeregisterDestination'));
    }

    /**
     * Get Subscription
     * Retrieve subscription information.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_GetSubscription request or MWSSubscriptions_Model_GetSubscription object itself
     * @see MWSSubscriptions_Model_GetSubscription
     * @return MWSSubscriptions_Model_GetSubscriptionResponse
     *
     * @throws Subscriptions_Exception
     */
    public function getSubscription($request)
    {
        //require_once (dirname(__FILE__) . '/Model/GetSubscriptionResponse.php');
        return MWSSubscriptions_Model_GetSubscriptionResponse::fromXML($this->_invoke('GetSubscription'));
    }

    /**
     * List Registered Destinations
     * List all the destinations for the specified seller created by the developer.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_ListRegisteredDestinations request or MWSSubscriptions_Model_ListRegisteredDestinations object itself
     * @see MWSSubscriptions_Model_ListRegisteredDestinations
     * @return MWSSubscriptions_Model_ListRegisteredDestinationsResponse
     *
     * @throws Subscriptions_Exception
     */
    public function listRegisteredDestinations($request)
    {
        //require_once (dirname(__FILE__) . '/Model/ListRegisteredDestinationsResponse.php');
        return MWSSubscriptions_Model_ListRegisteredDestinationsResponse::fromXML($this->_invoke('ListRegisteredDestinations'));
    }

    /**
     * List Subscriptions
     * List all the subscriptions for the specified seller created by the current developer.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_ListSubscriptions request or MWSSubscriptions_Model_ListSubscriptions object itself
     * @see MWSSubscriptions_Model_ListSubscriptions
     * @return MWSSubscriptions_Model_ListSubscriptionsResponse
     *
     * @throws Subscriptions_Exception
     */
    public function listSubscriptions($request)
    {
        //require_once (dirname(__FILE__) . '/Model/ListSubscriptionsResponse.php');
        return MWSSubscriptions_Model_ListSubscriptionsResponse::fromXML($this->_invoke('ListSubscriptions'));
    }

    /**
     * Register Destination
     * Create a new destination.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_RegisterDestination request or MWSSubscriptions_Model_RegisterDestination object itself
     * @see MWSSubscriptions_Model_RegisterDestination
     * @return MWSSubscriptions_Model_RegisterDestinationResponse
     *
     * @throws Subscriptions_Exception
     */
    public function registerDestination($request)
    {
        //require_once (dirname(__FILE__) . '/Model/RegisterDestinationResponse.php');
        return MWSSubscriptions_Model_RegisterDestinationResponse::fromXML($this->_invoke('RegisterDestination'));
    }

    /**
     * Send Test Notification To Destination
     * Send a test Notification to the specified destination.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_SendTestNotificationToDestination request or MWSSubscriptions_Model_SendTestNotificationToDestination object itself
     * @see MWSSubscriptions_Model_SendTestNotificationToDestination
     * @return MWSSubscriptions_Model_SendTestNotificationToDestinationResponse
     *
     * @throws Subscriptions_Exception
     */
    public function sendTestNotificationToDestination($request)
    {
        //require_once (dirname(__FILE__) . '/Model/SendTestNotificationToDestinationResponse.php');
        return MWSSubscriptions_Model_SendTestNotificationToDestinationResponse::fromXML($this->_invoke('SendTestNotificationToDestination'));
    }

    /**
     * Update Subscription
     * Update a subscription.
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_UpdateSubscription request or MWSSubscriptions_Model_UpdateSubscription object itself
     * @see MWSSubscriptions_Model_UpdateSubscription
     * @return MWSSubscriptions_Model_UpdateSubscriptionResponse
     *
     * @throws Subscriptions_Exception
     */
    public function updateSubscription($request)
    {
        //require_once (dirname(__FILE__) . '/Model/UpdateSubscriptionResponse.php');
        return MWSSubscriptions_Model_UpdateSubscriptionResponse::fromXML($this->_invoke('UpdateSubscription'));
    }

    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MWSSubscriptions_Model_GetServiceStatus request or MWSSubscriptions_Model_GetServiceStatus object itself
     * @see MWSSubscriptions_Model_GetServiceStatus
     * @return MWSSubscriptions_Model_GetServiceStatusResponse
     *
     * @throws Subscriptions_Exception
     */
    public function getServiceStatus($request)
    {
        //require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return MWSSubscriptions_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
