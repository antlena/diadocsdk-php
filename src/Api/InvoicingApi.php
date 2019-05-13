<?php

namespace Antlena\SDK\Diadoc\Api;

use GuzzleHttp\Psr7\Request;
use Antlena\SDK\Diadoc\Exception\ApiException;
use Antlena\SDK\Diadoc\Proto\Invoicing\AcceptanceCertificateSellerTitleInfo;

/**
 * InvoicingApi
 *
 * @package  Antlena\SDK\Diadoc\Api
 */
class InvoicingApi extends DiadocHttpApi
{
    
    const RESOURCE_GENERATE_ACCEPTANCE_CERTIFICATE_XML_FOR_SELLER = '/GenerateAcceptanceCertificateXmlForSeller';
    
    /**
     * Generate acceptance certificate XML for seller resource
     * 
     * @return string
     */
    public function getAcceptanceCertificateXmlForSellerResource() : string
    {
        return $this->getHost() . static::RESOURCE_GENERATE_ACCEPTANCE_CERTIFICATE_XML_FOR_SELLER;
    }  
    
    /**
     * Generate acceptance certificate XML for seller request
     * 
     * @param AcceptanceCertificateSellerTitleInfo $info
     * @param bool $disableValidation
     * @return Request
     */
    protected function generateAcceptanceCertificateXmlForSellerRequest(
        AcceptanceCertificateSellerTitleInfo $info, 
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
            $this->getAcceptanceCertificateXmlForSellerResource() 
                . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders(),
            $info->toStream()->getContents()
        );         
    }    

    /**
     * Generate acceptance certificate XML for seller
     * 
     * @param AcceptanceCertificateSellerTitleInfo $info
     * @param bool $disableValidation
     * @return string
     * @throws ApiException
     */
    public function generateAcceptanceCertificateXmlForSeller(
        AcceptanceCertificateSellerTitleInfo $info, 
        bool $disableValidation = false
    ) : string
    {
        $request = $this->generateAcceptanceCertificateXmlForSellerRequest(
            $info, 
            $disableValidation
        );
        $response = $this->send($request);
        
        return $response->getBody()->getContents();
    }    
    
}