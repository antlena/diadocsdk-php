<?php

namespace Antlena\SDK\Diadoc\Api;

use GuzzleHttp\Psr7\Request;
use Antlena\SDK\Diadoc\Exception\ApiException;
use Antlena\SDK\Diadoc\Proto\Invoicing\Signers\ExtendedSigner;
use Antlena\SDK\Diadoc\Proto\Invoicing\Signers\ExtendedSignerDetailsToPost;

/**
 * SignerApi
 *
 * @package  Antlena\SDK\Diadoc\Api
 */
class SignerApi extends DiadocHttpApi
{
    
    const RESOURCE_EXTENDED_SIGNER_DETAILS = '/V2/ExtendedSignerDetails';
    
    /**
     * Get extended signer details resource
     * 
     * @return string
     */
    public function getExtendedSignerDetailsResource() : string
    {
        return $this->getHost() . static::RESOURCE_EXTENDED_SIGNER_DETAILS;
    }  

    /**
     * Get extended signer details request
     * 
     * @param string $boxId
     * @param string $thumbprint
     * @param string $documentTitleType
     * @return Request
     */
    protected function getExtendedSignerDetailsRequest(
        string $boxId, 
        string $thumbprint,
        string $documentTitleType
    ) : Request 
    {
        $query = \GuzzleHttp\Psr7\build_query([
            'boxId' => $boxId,
            'thumbprint' => $thumbprint,
            'documentTitleType' => $documentTitleType
        ]);
        
        return new Request(
            'GET',
            $this->getExtendedSignerDetailsResource() . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders()
        );         
    } 
    
    /**
     * Post extended signer details request
     * 
     * @param string $boxId
     * @param string $thumbprint
     * @param string $documentTitleType
     * @param ExtendedSignerDetailsToPost $signerDetails
     * @return Request
     */
    protected function postExtendedSignerDetailsRequest(
        string $boxId, 
        string $thumbprint,
        string $documentTitleType,
        ExtendedSignerDetailsToPost $signerDetails
    ) : Request 
    {
        $query = \GuzzleHttp\Psr7\build_query([
            'boxId' => $boxId,
            'thumbprint' => $thumbprint,
            'documentTitleType' => $documentTitleType
        ]);
        
        return new Request(
            'POST',
            $this->getExtendedSignerDetailsResource() . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders(),
            $signerDetails->toStream()->getContents()
        );         
    }    
    
    /**
     * Get extended signer details
     * 
     * @param string $boxId
     * @param string $thumbprint
     * @param string $documentTitleType
     * @return ExtendedSigner
     * @throws ApiException
     */
    public function getExtendedSignerDetails(
        string $boxId, 
        string $thumbprint,
        string $documentTitleType
    ) : ExtendedSigner
    {
        $request = $this->getExtendedSignerDetailsRequest(
            $boxId, 
            $thumbprint,
            $documentTitleType
        );
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return ExtendedSigner::fromStream($content);
    }

    /**
     * Post extended signer details
     * 
     * @param string $boxId
     * @param string $thumbprint
     * @param string $documentTitleType
     * @param ExtendedSignerDetailsToPost $signerDetails
     * @return ExtendedSigner
     * @throws ApiException
     */
    public function postExtendedSignerDetails(
        string $boxId, 
        string $thumbprint,
        string $documentTitleType,
        ExtendedSignerDetailsToPost $signerDetails
    ) : ExtendedSigner
    {
        $request = $this->postExtendedSignerDetailsRequest(
            $boxId, 
            $thumbprint,
            $documentTitleType,
            $signerDetails
        );
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return ExtendedSigner::fromStream($content);
    }    
    
}