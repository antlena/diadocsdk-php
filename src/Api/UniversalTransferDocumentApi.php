<?php

namespace Antlena\SDK\Diadoc\Api;

use GuzzleHttp\Psr7\Request;
use Antlena\SDK\Diadoc\Exception\ApiException;
use Antlena\SDK\Diadoc\Proto\Invoicing\UniversalTransferDocumentSellerTitleInfo;

/**
 * UniversalTransferDocumentApi
 *
 * @package  Antlena\SDK\Diadoc\Api
 */
class UniversalTransferDocumentApi extends DiadocHttpApi
{
    
    const RESOURCE_GENERATE_UTD_XML_FOR_SELLER = '/GenerateUniversalTransferDocumentXmlForSeller';  

    /**
     * Generate Universal Transfer Document XML for seller resource
     * 
     * @return string
     */
    public function getUniversalTransferDocumentXmlForSellerResource() : string
    {
        return $this->getHost() . static::RESOURCE_GENERATE_UTD_XML_FOR_SELLER;
    }
    
    /**
     * Generate Universal Transfer Document XML for seller request
     * 
     * @param UniversalTransferDocumentSellerTitleInfo $info
     * @param bool $disableValidation
     * @return Request
     */
    protected function generateUniversalTransferDocumentXmlForSellerRequest(
        UniversalTransferDocumentSellerTitleInfo $info,
        bool $disableValidation = false
    ) : Request 
    {
        $params = [];
        
        if ($disableValidation) {
            $params['disableValidation'] = '';
        }
        
        $query = \GuzzleHttp\Psr7\build_query($params);
        
        return new Request(
            'POST',
            $this->getUniversalTransferDocumentXmlForSellerResource() 
                . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders(),
            $info->toStream()->getContents()
        );         
    }     
    
    /**
     * Generate Universal Transfer Document XML for seller
     * 
     * @param UniversalTransferDocumentSellerTitleInfo $info
     * @param bool $disableValidation
     * @return string
     * @throws ApiException
     */
    public function generateUniversalTransferDocumentXmlForSeller(
        UniversalTransferDocumentSellerTitleInfo $info,
        bool $disableValidation = false    
    ) : string
    {
        $request = $this->generateUniversalTransferDocumentXmlForSellerRequest(
            $info, 
            $disableValidation
        );
        $response = $this->send($request);

        return $response->getBody()->getContents();       
    }    
    
}