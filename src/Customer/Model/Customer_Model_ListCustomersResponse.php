<?php
namespace Amazon\MWS\Customer\Model;
use Amazon\MWS\Customer\Customer_Model;
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
 * @package  MWS Customer Service
 * @version  2014-03-01
 * Library Version: 2015-03-12
 * Generated: Wed Mar 11 20:28:49 GMT 2015
 */

/**
 *  @see MWSCustomerService_Model
 */

//require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSCustomerService_Model_ListCustomersResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListCustomersResult: MWSCustomerService_Model_ListCustomersResult</li>
 * <li>ResponseMetadata: MWSCustomerService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSCustomerService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class Customer_Model_ListCustomersResponse extends Customer_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ListCustomersResult' => array('FieldValue' => null, 'FieldType' => 'MWSCustomerService_Model_ListCustomersResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSCustomerService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSCustomerService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ListCustomersResult property.
     *
     * @return Customer_Model_ListCustomersResult ListCustomersResult.
     */
    public function getListCustomersResult()
    {
        return $this->_fields['ListCustomersResult']['FieldValue'];
    }

    /**
     * Set the value of the ListCustomersResult property.
     *
     * @param MWSCustomerService_Model_ListCustomersResult Customer_Model_ListCustomersResult
     * @return this instance
     */
    public function setListCustomersResult($value)
    {
        $this->_fields['ListCustomersResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListCustomersResult is set.
     *
     * @return true if ListCustomersResult is set.
     */
    public function isSetListCustomersResult()
    {
                return !is_null($this->_fields['ListCustomersResult']['FieldValue']);
            }

    /**
     * Set the value of ListCustomersResult, return this.
     *
     * @param listCustomersResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListCustomersResult($value)
    {
        $this->setListCustomersResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return Customer_Model_ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MWSCustomerService_Model_ResponseMetadata Customer_Model_ResponseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
                return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return Customer_Model_ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MWSCustomerService_Model_ResponseHeaderMetadata Customer_Model_ResponseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
                return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }
    /**
     * Construct MWSCustomerService_Model_ListCustomersResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return Customer_Model_ListCustomersResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListCustomersResponse']");
        if ($response->length == 1) {
            return new Customer_Model_ListCustomersResponse(($response->item(0)));
        } else {
            throw new \Exception ("Unable to construct MWSCustomerService_Model_ListCustomersResponse from provided XML.
                                  Make sure that ListCustomersResponse is a root element");
        }
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<ListCustomersResponse xmlns=\"http://mws.amazonservices.com/schema/CustomerInformation/2014-03-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListCustomersResponse>";
        return $xml;
    }

}
