<?php
namespace Amazon\MWS\Reports\Model;
use Amazon\MWS\Reports\Reports_Model;
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
 *  @see MarketplaceWebService_Model
 */
//require_once ('MarketplaceWebService/Model.php');

    

/**
 * \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>CancelFeedSubmissionsResult: \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsResult</li>
 * <li>ResponseMetadata: \Amazon\MWS\Reports\Model\Reports_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Reports_Model_CancelFeedSubmissionsResponse extends Reports_Model
{


    /**
     * Construct new \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CancelFeedSubmissionsResult: \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsResult</li>
     * <li>ResponseMetadata: \Amazon\MWS\Reports\Model\Reports_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'CancelFeedSubmissionsResult' => array('FieldValue' => null, 'FieldType' => '\Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => '\Amazon\MWS\Reports\Model\Reports_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Reports_Model_CancelFeedSubmissionsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:CancelFeedSubmissionsResponse');
        if ($response->length == 1) {
            return new Reports_Model_CancelFeedSubmissionsResponse(($response->item(0)));
        } else {
            throw new \Exception ("Unable to construct \Amazon\MWS\Reports\Model\Reports_Model_CancelFeedSubmissionsResponse from provided XML.
                                  Make sure that CancelFeedSubmissionsResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the CancelFeedSubmissionsResult.
     * 
     * @return CancelFeedSubmissionsResult CancelFeedSubmissionsResult
     */
    public function getCancelFeedSubmissionsResult() 
    {
        return $this->fields['CancelFeedSubmissionsResult']['FieldValue'];
    }

    /**
     * Sets the value of the CancelFeedSubmissionsResult.
     * 
     * @param CancelFeedSubmissionsResult CancelFeedSubmissionsResult
     * @return void
     */
    public function setCancelFeedSubmissionsResult($value) 
    {
        $this->fields['CancelFeedSubmissionsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the CancelFeedSubmissionsResult  and returns this instance
     * 
     * @param CancelFeedSubmissionsResult $value CancelFeedSubmissionsResult
     * @return Reports_Model_CancelFeedSubmissionsResponse instance
     */
    public function withCancelFeedSubmissionsResult($value)
    {
        $this->setCancelFeedSubmissionsResult($value);
        return $this;
    }


    /**
     * Checks if CancelFeedSubmissionsResult  is set
     * 
     * @return bool true if CancelFeedSubmissionsResult property is set
     */
    public function isSetCancelFeedSubmissionsResult()
    {
        return !is_null($this->fields['CancelFeedSubmissionsResult']['FieldValue']);

    }

    /**
     * Gets the value of the ResponseMetadata.
     * 
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata() 
    {
        return $this->fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     * 
     * @param ResponseMetadata ResponseMetadata
     * @return void
     */
    public function setResponseMetadata($value) 
    {
        $this->fields['ResponseMetadata']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ResponseMetadata  and returns this instance
     * 
     * @param ResponseMetadata $value ResponseMetadata
     * @return Reports_Model_CancelFeedSubmissionsResponse instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }


    /**
     * Checks if ResponseMetadata  is set
     * 
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->fields['ResponseMetadata']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<CancelFeedSubmissionsResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CancelFeedSubmissionsResponse>";
        return $xml;
    }

    private $_responseHeaderMetadata = null;

    public function getResponseHeaderMetadata() {
      return $this->_responseHeaderMetadata;
    }

    public function setResponseHeaderMetadata($responseHeaderMetadata) {
      return $this->_responseHeaderMetadata = $responseHeaderMetadata;
    }
}
