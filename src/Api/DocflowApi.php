<?php

namespace Antlena\SDK\Diadoc\Api;

use GuzzleHttp\Psr7\Request;
use Antlena\SDK\Diadoc\Exception\ApiException;
use Antlena\SDK\Diadoc\Proto\Docflow\GetDocflowBatchRequest;
use Antlena\SDK\Diadoc\Proto\Docflow\GetDocflowBatchResponse;

/**
 * DocflowApi
 *
 * @package  Antlena\SDK\Diadoc\Api
 */
class DocflowApi extends DiadocHttpApi
{
    
    const RESOURCE_GET_DOCFLOWS = '/V2/GetDocflows';
    
    /**
     * Get docflows resource
     * 
     * @return string
     */
    public function getDocflowsResource() : string
    {
        return $this->getHost() . static::RESOURCE_GET_DOCFLOWS;
    }  

    /**
     * Get docflows request
     * 
     * @param string $boxId
     * @param GetDocflowBatchRequest $batchRequest
     * @return Request
     */
    protected function getDocflowsRequest(
        string $boxId, 
        GetDocflowBatchRequest $batchRequest
    ) : Request 
    {
        $query = \GuzzleHttp\Psr7\build_query(['boxId' => $boxId]);
        
        return new Request(
            'POST',
            $this->getDocflowsResource() . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders(),
            $batchRequest->toStream()->getContents()
        );         
    } 
    
    /**
     * Get docflows
     * 
     * @param string $boxId
     * @param GetDocflowBatchRequest $batchRequest
     * @return GetDocflowBatchResponse
     * @throws ApiException
     */
    public function getDocflows(
        string $boxId, 
        GetDocflowBatchRequest $batchRequest
    ) : GetDocflowBatchResponse
    {
        $request = $this->getDocflowsRequest($boxId, $batchRequest);
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return GetDocflowBatchResponse::fromStream($content);
    }    
    
}