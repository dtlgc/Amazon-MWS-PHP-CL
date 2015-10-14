<?php
namespace Amazon\MWS\Customer\Model;
use Amazon\MWS\Customer\MWSCustomerService_Model;
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

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSCustomerService_Model_GetServiceStatusResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetServiceStatusResult: MWSCustomerService_Model_GetServiceStatusResult</li>
 * <li>ResponseMetadata: MWSCustomerService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSCustomerService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MWSCustomerService_Model_GetServiceStatusResponse extends MWSCustomerService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GetServiceStatusResult' => array('FieldValue' => null, 'FieldType' => 'MWSCustomerService_Model_GetServiceStatusResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSCustomerService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSCustomerService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GetServiceStatusResult property.
     *
     * @return GetServiceStatusResult GetServiceStatusResult.
     */
    public function getGetServiceStatusResult()
    {
        return $this->_fields['GetServiceStatusResult']['FieldValue'];
    }

    /**
     * Set the value of the GetServiceStatusResult property.
     *
     * @param MWSCustomerService_Model_GetServiceStatusResult getServiceStatusResult
     * @return this instance
     */
    public function setGetServiceStatusResult($value)
    {
        $this->_fields['GetServiceStatusResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetServiceStatusResult is set.
     *
     * @return true if GetServiceStatusResult is set.
     */
    public function isSetGetServiceStatusResult()
    {
                return !is_null($this->_fields['GetServiceStatusResult']['FieldValue']);
            }

    /**
     * Set the value of GetServiceStatusResult, return this.
     *
     * @param getServiceStatusResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetServiceStatusResult($value)
    {
        $this->setGetServiceStatusResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MWSCustomerService_Model_ResponseMetadata responseMetadata
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
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MWSCustomerService_Model_ResponseHeaderMetadata responseHeaderMetadata
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
     * Construct MWSCustomerService_Model_GetServiceStatusResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSCustomerService_Model_GetServiceStatusResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetServiceStatusResponse']");
        if ($response->length == 1) {
            return new MWSCustomerService_Model_GetServiceStatusResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MWSCustomerService_Model_GetServiceStatusResponse from provided XML. 
                                  Make sure that GetServiceStatusResponse is a root element");
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
        $xml .= "<GetServiceStatusResponse xmlns=\"http://mws.amazonservices.com/schema/CustomerInformation/2014-03-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetServiceStatusResponse>";
        return $xml;
    }

}
