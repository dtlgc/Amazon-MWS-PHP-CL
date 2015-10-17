<?php
namespace Amazon\MWS\Subscriptions\Model;
use Amazon\MWS\Subscriptions\Subscriptions_Model;
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
 *  @see MWSSubscriptions_Model
 */

//require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSSubscriptions_Model_UpdateSubscriptionResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>UpdateSubscriptionResult: MWSSubscriptions_Model_UpdateSubscriptionResult</li>
 * <li>ResponseMetadata: MWSSubscriptions_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSSubscriptions_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class Subscriptions_Model_UpdateSubscriptionResponse extends Subscriptions_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'UpdateSubscriptionResult' => array('FieldValue' => null, 'FieldType' => 'MWSSubscriptions_Model_UpdateSubscriptionResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSSubscriptions_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSSubscriptions_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the UpdateSubscriptionResult property.
     *
     * @return UpdateSubscriptionResult UpdateSubscriptionResult.
     */
    public function getUpdateSubscriptionResult()
    {
        return $this->_fields['UpdateSubscriptionResult']['FieldValue'];
    }

    /**
     * Set the value of the UpdateSubscriptionResult property.
     *
     * @param MWSSubscriptions_Model_UpdateSubscriptionResult updateSubscriptionResult
     * @return this instance
     */
    public function setUpdateSubscriptionResult($value)
    {
        $this->_fields['UpdateSubscriptionResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if UpdateSubscriptionResult is set.
     *
     * @return true if UpdateSubscriptionResult is set.
     */
    public function isSetUpdateSubscriptionResult()
    {
                return !is_null($this->_fields['UpdateSubscriptionResult']['FieldValue']);
            }

    /**
     * Set the value of UpdateSubscriptionResult, return this.
     *
     * @param updateSubscriptionResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withUpdateSubscriptionResult($value)
    {
        $this->setUpdateSubscriptionResult($value);
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
     * @param MWSSubscriptions_Model_ResponseMetadata responseMetadata
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
     * @param MWSSubscriptions_Model_ResponseHeaderMetadata responseHeaderMetadata
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
     * Construct MWSSubscriptions_Model_UpdateSubscriptionResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return Subscriptions_Model_UpdateSubscriptionResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='UpdateSubscriptionResponse']");
        if ($response->length == 1) {
            return new Subscriptions_Model_UpdateSubscriptionResponse(($response->item(0)));
        } else {
            throw new \Exception ("Unable to construct MWSSubscriptions_Model_UpdateSubscriptionResponse from provided XML.
                                  Make sure that UpdateSubscriptionResponse is a root element");
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
        $xml .= "<UpdateSubscriptionResponse xmlns=\"http://mws.amazonservices.com/schema/Subscriptions/2013-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</UpdateSubscriptionResponse>";
        return $xml;
    }

}
