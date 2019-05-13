<?php

namespace Antlena\SDK\Diadoc\Api\Traits;

use Antlena\SDK\Diadoc\Api\MessageApi;
use Antlena\SDK\Diadoc\Proto\Events\Message;
use Antlena\SDK\Diadoc\Proto\Events\MessageToPost;

/**
 * Trait MessageTrait
 *
 * @package Antlena\SDK\Diadoc\Api\Traits
 */
trait MessageTrait
{
    
    /**
     *
     * @var MessageApi
     */
    protected $messageApi;
    
    /**
     * 
     * @return MessageApi
     */
    public function getMessageApi() : MessageApi
    {
        if (!$this->messageApi) {
            $this->messageApi = new MessageApi($this->client, $this->auth);
        }

        return $this->messageApi;
    }    

    /**
     * Post message
     * 
     * @param MessageToPost $msg
     * @param string $operationId
     * @return Message
     */
    public function postMessage(
        MessageToPost $msg, 
        string $operationId = null
    ) : Message
    {
        return $this->getMessageApi()->postMessage($msg, $operationId);
    }
    
    /**
     * Post message patch
     * 
     * @param MessagePatchToPost $msg
     * @param string $operationId
     * @return MessagePatch
     */
    public function postMessagePatch(
        MessagePatchToPost $msg, 
        string $operationId = null
    ) : MessagePatch
    {
        return $this->getMessageApi()->postMessagePatch($msg, $operationId);
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
     */
    public function getMessage(
        string $boxId, 
        string $messageId,
        string $entityId = '', 
        bool $originalSignature = false, 
        bool $injectEntityContent = false
    ) : Message
    {
        return $this->getMessageApi()->getMessage(
            $boxId,
            $messageId,
            $entityId,
            $originalSignature,
            $injectEntityContent                
        );
    }    

}