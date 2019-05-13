<?php

namespace Antlena\SDK\Diadoc\Api;

use GuzzleHttp\Psr7\Request;
use Antlena\SDK\Diadoc\Exception\ApiException;
use Antlena\SDK\Diadoc\Proto\Events\Message;
use Antlena\SDK\Diadoc\Proto\Events\MessagePatch;
use Antlena\SDK\Diadoc\Proto\Events\MessageToPost;
use Antlena\SDK\Diadoc\Proto\Events\MessagePatchToPost;

/**
 * MessageApi
 *
 * @package  Antlena\SDK\Diadoc\Api
 */
class MessageApi extends DiadocHttpApi
{
    
    const RESOURCE_POST_MESSAGE = '/V3/PostMessage';
    
    const RESOURCE_POST_MESSAGE_PATCH = '/V3/PostMessagePatch';
    
    const RESOURCE_GET_MESSAGE = '/V4/GetMessage';
    
    /**
     * Post message resource
     * 
     * @return string
     */
    public function getPostMessageResource() : string
    {
        return $this->getHost() . static::RESOURCE_POST_MESSAGE;
    }

    /**
     * Post message patch resource
     * 
     * @return string
     */
    public function getPostMessagePatchResource() : string
    {
        return $this->getHost() . static::RESOURCE_POST_MESSAGE;
    }
    
    /**
     * Get message resource
     * 
     * @return string
     */
    public function getMessageResource() : string
    {
        return $this->getHost() . static::RESOURCE_GET_MESSAGE;
    }    

    /**
     * Post message request
     * 
     * @param MessageToPost $msg
     * @param string $operationId
     * @return Request
     */
    protected function postMessageRequest(
        MessageToPost $msg, 
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
            $this->getPostMessageResource() . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders(),
            $msg->toStream()->getContents()
        );         
    } 


    /**
     * Post message patch request
     * 
     * @param MessagePatchToPost $msg
     * @param string $operationId
     * @return Request
     */
    protected function postMessagePatchRequest(
        MessagePatchToPost $msg, 
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
            $this->getPostMessagePatchResource() . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders(),
            $msg->toStream()->getContents()
        );         
    }

    /**
     * Get message request
     * 
     * @param string $boxId
     * @param string $messageId
     * @param string $entityId
     * @param bool $originalSignature
     * @param bool $injectEntityContent
     * @return Request
     */
    protected function getMessageRequest(
        string $boxId, 
        string $messageId,
        string $entityId = '', 
        bool $originalSignature = false, 
        bool $injectEntityContent = false
    ) : Request 
    {
        $params = [
            'boxId' => $boxId,
            'messageId' => $messageId
        ];
        
        if ($entityId) {
            $params['entityId'] = $entityId;
        }
        
        if ($originalSignature) {
            $params['originalSignature'] = $originalSignature;
        } 
        
        if ($injectEntityContent) {
            $params['injectEntityContent'] = $injectEntityContent;
        }        
        
        $query = \GuzzleHttp\Psr7\build_query($params);
        
        return new Request(
            'GET',
            $this->getMessageResource() . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders()
        );         
    }     

    /**
     * Post message
     * 
     * @param MessageToPost $msg
     * @param string $operationId
     * @return Message
     * @throws ApiException
     */
    public function postMessage(
        MessageToPost $msg, 
        string $operationId = null
    ) : Message
    {
        $request = $this->postMessageRequest($msg, $operationId);
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return Message::fromStream($content);
    }
    
    /**
     * Post message patch
     * 
     * @param MessagePatchToPost $msg
     * @param string $operationId
     * @return MessagePatch
     * @throws ApiException
     */
    public function postMessagePatch(
        MessagePatchToPost $msg, 
        string $operationId = null
    ) : MessagePatch
    {
        $request = $this->postMessagePatchRequest($msg, $operationId);
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return MessagePatch::fromStream($content);
    }

    /**
     * Get message
     * 
     * @param string $boxId
     * @param string $messageId
     * @param string $entityId
     * @param bool $originalSignature
     * @param bool $injectEntityContent
     * @return Message
     * @throws ApiException
     */
    public function getMessage(
        string $boxId, 
        string $messageId,
        string $entityId = '', 
        bool $originalSignature = false, 
        bool $injectEntityContent = false
    ) : Message
    {
        $request = $this->getMessageRequest(
            $boxId,
            $messageId,
            $entityId,
            $originalSignature,
            $injectEntityContent
        );
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return Message::fromStream($content);
    }     
    
}