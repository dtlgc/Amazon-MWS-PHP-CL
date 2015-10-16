<?php
namespace Amazon\MWS\Orders;
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
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2015-04-30
 * Generated: Thu May 28 17:42:26 GMT 2015
 */

/**
 *  @see MarketplaceWebServiceOrders_Interface
 */
//require_once (dirname(__FILE__) . '/Interface.php');

class Orders_Mock implements Orders_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Order
     * This operation takes up to 50 order ids and returns the corresponding orders.
     *
     * @param mixed $request array of parameters for Orders_Model_GetOrder request or Orders_Model_GetOrder object itself
     * @see Orders_Model_GetOrder
     * @return Orders_Model_GetOrderResponse
     *
     * @throws Orders_Exception
     */
    public function getOrder($request)
    {
        //require_once (dirname(__FILE__) . '/Model/GetOrderResponse.php');
        return Orders_Model_GetOrderResponse::fromXML($this->_invoke('GetOrder'));
    }

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * 		takes no input.
     *
     * @param mixed $request array of parameters for Orders_Model_GetServiceStatus request or Orders_Model_GetServiceStatus object itself
     * @see Orders_Model_GetServiceStatus
     * @return Orders_Model_GetServiceStatusResponse
     *
     * @throws Orders_Exception
     */
    public function getServiceStatus($request)
    {
        //require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return Orders_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    /**
     * List Order Items
     * This operation can be used to list the items of the order indicated by the
     *         given order id (only a single Amazon order id is allowed).
     *
     * @param mixed $request array of parameters for Orders_Model_ListOrderItems request or Orders_Model_ListOrderItems object itself
     * @see Orders_Model_ListOrderItems
     * @return Orders_Model_ListOrderItemsResponse
     *
     * @throws Orders_Exception
     */
    public function listOrderItems($request)
    {
        //require_once (dirname(__FILE__) . '/Model/ListOrderItemsResponse.php');
        return Orders_Model_ListOrderItemsResponse::fromXML($this->_invoke('ListOrderItems'));
    }

    /**
     * List Order Items By Next Token
     * If ListOrderItems cannot return all the order items in one go, it will
     *         provide a nextToken. That nextToken can be used with this operation to
     *         retrive the next batch of items for that order.
     *
     * @param mixed $request array of parameters for Orders_Model_ListOrderItemsByNextToken request or Orders_Model_ListOrderItemsByNextToken object itself
     * @see Orders_Model_ListOrderItemsByNextToken
     * @return Orders_Model_ListOrderItemsByNextTokenResponse
     *
     * @throws Orders_Exception
     */
    public function listOrderItemsByNextToken($request)
    {
        //require_once (dirname(__FILE__) . '/Model/ListOrderItemsByNextTokenResponse.php');
        return Orders_Model_ListOrderItemsByNextTokenResponse::fromXML($this->_invoke('ListOrderItemsByNextToken'));
    }

    /**
     * List Orders
     * ListOrders can be used to find orders that meet the specified criteria.
     *
     * @param mixed $request array of parameters for Orders_Model_ListOrders request or Orders_Model_ListOrders object itself
     * @see Orders_Model_ListOrders
     * @return Orders_Model_ListOrdersResponse
     *
     * @throws Orders_Exception
     */
    public function listOrders($request)
    {
        //require_once (dirname(__FILE__) . '/Model/ListOrdersResponse.php');
        return Orders_Model_ListOrdersResponse::fromXML($this->_invoke('ListOrders'));
    }

    /**
     * List Orders By Next Token
     * If ListOrders returns a nextToken, thus indicating that there are more orders
     *         than returned that matched the given filter criteria, ListOrdersByNextToken
     *         can be used to retrieve those other orders using that nextToken.
     *
     * @param mixed $request array of parameters for Orders_Model_ListOrdersByNextToken request or Orders_Model_ListOrdersByNextToken object itself
     * @see Orders_Model_ListOrdersByNextToken
     * @return Orders_Model_ListOrdersByNextTokenResponse
     *
     * @throws Orders_Exception
     */
    public function listOrdersByNextToken($request)
    {
        //require_once (dirname(__FILE__) . '/Model/ListOrdersByNextTokenResponse.php');
        return Orders_Model_ListOrdersByNextTokenResponse::fromXML($this->_invoke('ListOrdersByNextToken'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
