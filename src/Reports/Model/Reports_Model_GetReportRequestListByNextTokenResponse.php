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
 * \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetReportRequestListByNextTokenResult: \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenResult</li>
 * <li>ResponseMetadata: \Amazon\MWS\Reports\Model\Reports_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Reports_Model_GetReportRequestListByNextTokenResponse extends Reports_Model
{


    /**
     * Construct new \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetReportRequestListByNextTokenResult: \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenResult</li>
     * <li>ResponseMetadata: \Amazon\MWS\Reports\Model\Reports_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'GetReportRequestListByNextTokenResult' => array('FieldValue' => null, 'FieldType' => '\Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => '\Amazon\MWS\Reports\Model\Reports_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Reports_Model_GetReportRequestListByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportRequestListByNextTokenResponse');
        if ($response->length == 1) {
            return new Reports_Model_GetReportRequestListByNextTokenResponse(($response->item(0)));
        } else {
            throw new \Exception ("Unable to construct \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestListByNextTokenResponse from provided XML.
                                  Make sure that GetReportRequestListByNextTokenResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetReportRequestListByNextTokenResult.
     * 
     * @return GetReportRequestListByNextTokenResult GetReportRequestListByNextTokenResult
     */
    public function getGetReportRequestListByNextTokenResult() 
    {
        return $this->fields['GetReportRequestListByNextTokenResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetReportRequestListByNextTokenResult.
     * 
     * @param GetReportRequestListByNextTokenResult GetReportRequestListByNextTokenResult
     * @return void
     */
    public function setGetReportRequestListByNextTokenResult($value) 
    {
        $this->fields['GetReportRequestListByNextTokenResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetReportRequestListByNextTokenResult  and returns this instance
     * 
     * @param GetReportRequestListByNextTokenResult $value GetReportRequestListByNextTokenResult
     * @return Reports_Model_GetReportRequestListByNextTokenResponse instance
     */
    public function withGetReportRequestListByNextTokenResult($value)
    {
        $this->setGetReportRequestListByNextTokenResult($value);
        return $this;
    }


    /**
     * Checks if GetReportRequestListByNextTokenResult  is set
     * 
     * @return bool true if GetReportRequestListByNextTokenResult property is set
     */
    public function isSetGetReportRequestListByNextTokenResult()
    {
        return !is_null($this->fields['GetReportRequestListByNextTokenResult']['FieldValue']);

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
     * @return Reports_Model_GetReportRequestListByNextTokenResponse instance
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
        $xml .= "<GetReportRequestListByNextTokenResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetReportRequestListByNextTokenResponse>";
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
