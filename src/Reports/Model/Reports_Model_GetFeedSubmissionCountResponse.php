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
 * \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetFeedSubmissionCountResult: \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountResult</li>
 * <li>ResponseMetadata: \Amazon\MWS\Reports\Model\Reports_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Reports_Model_GetFeedSubmissionCountResponse extends Reports_Model
{


    /**
     * Construct new \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetFeedSubmissionCountResult: \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountResult</li>
     * <li>ResponseMetadata: \Amazon\MWS\Reports\Model\Reports_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'GetFeedSubmissionCountResult' => array('FieldValue' => null, 'FieldType' => '\Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => '\Amazon\MWS\Reports\Model\Reports_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Reports_Model_GetFeedSubmissionCountResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetFeedSubmissionCountResponse');
        if ($response->length == 1) {
            return new Reports_Model_GetFeedSubmissionCountResponse(($response->item(0)));
        } else {
            throw new \Exception ("Unable to construct \Amazon\MWS\Reports\Model\Reports_Model_GetFeedSubmissionCountResponse from provided XML.
                                  Make sure that GetFeedSubmissionCountResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetFeedSubmissionCountResult.
     * 
     * @return GetFeedSubmissionCountResult GetFeedSubmissionCountResult
     */
    public function getGetFeedSubmissionCountResult() 
    {
        return $this->fields['GetFeedSubmissionCountResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetFeedSubmissionCountResult.
     * 
     * @param GetFeedSubmissionCountResult GetFeedSubmissionCountResult
     * @return void
     */
    public function setGetFeedSubmissionCountResult($value) 
    {
        $this->fields['GetFeedSubmissionCountResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetFeedSubmissionCountResult  and returns this instance
     * 
     * @param GetFeedSubmissionCountResult $value GetFeedSubmissionCountResult
     * @return Reports_Model_GetFeedSubmissionCountResponse instance
     */
    public function withGetFeedSubmissionCountResult($value)
    {
        $this->setGetFeedSubmissionCountResult($value);
        return $this;
    }


    /**
     * Checks if GetFeedSubmissionCountResult  is set
     * 
     * @return bool true if GetFeedSubmissionCountResult property is set
     */
    public function isSetGetFeedSubmissionCountResult()
    {
        return !is_null($this->fields['GetFeedSubmissionCountResult']['FieldValue']);

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
     * @return Reports_Model_GetFeedSubmissionCountResponse instance
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
        $xml .= "<GetFeedSubmissionCountResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetFeedSubmissionCountResponse>";
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
