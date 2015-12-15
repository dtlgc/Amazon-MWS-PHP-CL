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
 * \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetReportRequestCountResult: \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountResult</li>
 * <li>ResponseMetadata: \Amazon\MWS\Reports\Model\Reports_Model_ResponseMetadata</li>
 *
 * </ul>
 */
class Reports_Model_GetReportRequestCountResponse extends Reports_Model
{
    /**
     * Construct new \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetReportRequestCountResult: \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountResult</li>
     * <li>ResponseMetadata: \Amazon\MWS\Reports\Model\Reports_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'GetReportRequestCountResult' => array('FieldValue' => null, 'FieldType' => '\Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => '\Amazon\MWS\Reports\Model\Reports_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return MaReports_Model_GetReportRequestCountResponse     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportRequestCountResponse');
        if ($response->length == 1) {
            return new Reports_Model_GetReportRequestCountResponse(($response->item(0)));
        } else {
            throw new \Exception ("Unable to construct \Amazon\MWS\Reports\Model\Reports_Model_GetReportRequestCountResponse from provided XML.
                                  Make sure that GetReportRequestCountResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetReportRequestCountResult.
     * 
     * @return GetReportRequestCountResult GetReportRequestCountResult
     */
    public function getGetReportRequestCountResult() 
    {
        return $this->fields['GetReportRequestCountResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetReportRequestCountResult.
     * 
     * @param GetReportRequestCountResult GetReportRequestCountResult
     * @return void
     */
    public function setGetReportRequestCountResult($value) 
    {
        $this->fields['GetReportRequestCountResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetReportRequestCountResult  and returns this instance
     * 
     * @param GetReportRequestCountResult $value GetReportRequestCountResult
     * @return MaReports_Model_GetReportRequestCountResponsenstance
     */
    public function withGetReportRequestCountResult($value)
    {
        $this->setGetReportRequestCountResult($value);
        return $this;
    }


    /**
     * Checks if GetReportRequestCountResult  is set
     * 
     * @return bool true if GetReportRequestCountResult property is set
     */
    public function isSetGetReportRequestCountResult()
    {
        return !is_null($this->fields['GetReportRequestCountResult']['FieldValue']);

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
     * @return MaReports_Model_GetReportRequestCountResponsenstance
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
        $xml .= "<GetReportRequestCountResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetReportRequestCountResponse>";
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
