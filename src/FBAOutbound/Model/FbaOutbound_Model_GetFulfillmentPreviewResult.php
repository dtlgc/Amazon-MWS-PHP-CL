<?php
namespace Amazon\MWS\FBAOutbound\Model;
use Amazon\MWS\FBAOutbound\FbaOutbound_Model;
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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2015-03-12
 * Generated: Thu Mar 12 13:09:33 GMT 2015
 */

/**
 *  @see MwsFbaOutboundServiceModel
 */

//require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MwsFbaOutboundServiceModel_GetFulfillmentPreviewResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>FulfillmentPreviews: MwsFbaOutboundServiceModel_FulfillmentPreviewList</li>
 *
 * </ul>
 */

 class FbaOutbound_Model_GetFulfillmentPreviewResult extends FbaOutbound_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'FulfillmentPreviews' => array('FieldValue' => null, 'FieldType' => 'MwsFbaOutboundServiceModel_FulfillmentPreviewList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the FulfillmentPreviews property.
     *
     * @return FulfillmentPreviewList FulfillmentPreviews.
     */
    public function getFulfillmentPreviews()
    {
        return $this->_fields['FulfillmentPreviews']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentPreviews property.
     *
     * @param MwsFbaOutboundServiceModel_FulfillmentPreviewList fulfillmentPreviews
     * @return this instance
     */
    public function setFulfillmentPreviews($value)
    {
        $this->_fields['FulfillmentPreviews']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentPreviews is set.
     *
     * @return true if FulfillmentPreviews is set.
     */
    public function isSetFulfillmentPreviews()
    {
                return !is_null($this->_fields['FulfillmentPreviews']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentPreviews, return this.
     *
     * @param fulfillmentPreviews
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentPreviews($value)
    {
        $this->setFulfillmentPreviews($value);
        return $this;
    }

}
