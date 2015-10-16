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

interface  Orders_Interface
{

    /**
     * Get Order
     * This operation takes up to 50 order ids and returns the corresponding orders.
     *
     * @param mixed $request array of parameters for Orders_Model_GetOrder request or Orders_Model_GetOrder object itself
     * @see Orders_Model_GetOrderRequest
     * @return Orders_Model_GetOrderResponse
     *
     * @throws Orders_Exception
     */
    public function getOrder($request);


    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * 		takes no input.
     *
     * @param mixed $request array of parameters for Orders_Model_GetServiceStatus request or Orders_Model_GetServiceStatus object itself
     * @see Orders_Model_GetServiceStatusRequest
     * @return Orders_Model_GetServiceStatusResponse
     *
     * @throws Orders_Exception
     */
    public function getServiceStatus($request);


    /**
     * List Order Items
     * This operation can be used to list the items of the order indicated by the
     *         given order id (only a single Amazon order id is allowed).
     *
     * @param mixed $request array of parameters for Orders_Model_ListOrderItems request or Orders_Model_ListOrderItems object itself
     * @see Orders_Model_ListOrderItemsRequest
     * @return Orders_Model_ListOrderItemsResponse
     *
     * @throws Orders_Exception
     */
    public function listOrderItems($request);


    /**
     * List Order Items By Next Token
     * If ListOrderItems cannot return all the order items in one go, it will
     *         provide a nextToken. That nextToken can be used with this operation to
     *         retrive the next batch of items for that order.
     *
     * @param mixed $request array of parameters for Orders_Model_ListOrderItemsByNextToken request or Orders_Model_ListOrderItemsByNextToken object itself
     * @see Orders_Model_ListOrderItemsByNextTokenRequest
     * @return Orders_Model_ListOrderItemsByNextTokenResponse
     *
     * @throws Orders_Exception
     */
    public function listOrderItemsByNextToken($request);


    /**
     * List Orders
     * ListOrders can be used to find orders that meet the specified criteria.
     *
     * @param mixed $request array of parameters for Orders_Model_ListOrders request or Orders_Model_ListOrders object itself
     * @see Orders_Model_ListOrdersRequest
     * @return Orders_Model_ListOrdersResponse
     *
     * @throws Orders_Exception
     */
    public function listOrders($request);


    /**
     * List Orders By Next Token
     * If ListOrders returns a nextToken, thus indicating that there are more orders
     *         than returned that matched the given filter criteria, ListOrdersByNextToken
     *         can be used to retrieve those other orders using that nextToken.
     *
     * @param mixed $request array of parameters for Orders_Model_ListOrdersByNextToken request or Orders_Model_ListOrdersByNextToken object itself
     * @see Orders_Model_ListOrdersByNextTokenRequest
     * @return Orders_Model_ListOrdersByNextTokenResponse
     *
     * @throws Orders_Exception
     */
    public function listOrdersByNextToken($request);

}