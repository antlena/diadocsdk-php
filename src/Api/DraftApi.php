<?php

namespace Antlena\SDK\Diadoc\Api;

use GuzzleHttp\Psr7\Request;
use Antlena\SDK\Diadoc\Exception\ApiException;
use Antlena\SDK\Diadoc\Proto\Events\Message;
use Antlena\SDK\Diadoc\Proto\Events\DraftToSend;

/**
 * DraftApi
 *
 * @package  Antlena\SDK\Diadoc\Api
 */
class DraftApi extends DiadocHttpApi
{
    
    const RESOURCE_SEND_DRAFT = '/SendDraft';
    
    /**
     * Send draft resource
     * 
     * @return string
     */
    public function getDraftResource() : string
    {
        return $this->getHost() . static::RESOURCE_SEND_DRAFT;
    }  

    /**
     * Send draft request
     * 
     * @param DraftToSend $draft
     * @param string $operationId
     * @return Request
     */
    protected function sendDraftRequest(
        DraftToSend $draft, 
        string $operationId = null
    ) : Request 
    {
        $params = [];
        
        if ($operationId) {
            $params['operationId'] = $operationId;
        }
        
        $query = \GuzzleHttp\Psr7\build_query($params);
        
        return new Request(
            'POST',
            $this->getDraftResource() . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders(),
            $draft->toStream()->getContents()
        );         
    } 
    
    /**
     * Send draft
     * 
     * @param DraftToSend draft
     * @param string $operationId
     * @return Message
     * @throws ApiException
     */
    public function sendDraft(
        DraftToSend $draft, 
        string $operationId = null
    ) : Message
    {
        $request = $this->sendDraftRequest($draft, $operationId);
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return Message::fromStream($content);
    }    
    
}