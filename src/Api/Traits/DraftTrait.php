<?php

namespace Antlena\SDK\Diadoc\Api\Traits;

use Antlena\SDK\Diadoc\Api\DraftApi;
use Antlena\SDK\Diadoc\Proto\Events\Message;
use Antlena\SDK\Diadoc\Proto\Events\DraftToSend;

/**
 * Trait DraftTrait
 *
 * @package Antlena\SDK\Diadoc\Api\Traits
 */
trait DraftTrait
{
    
    /**
     *
     * @var DraftApi
     */
    protected $draftApi;
    
    /**
     * 
     * @return DraftApi
     */
    public function getDraftApi() : DraftApi
    {
        if (!$this->draftApi) {
            $this->draftApi = new DraftApi($this->client, $this->auth);
        }

        return $this->draftApi;
    }    

    /**
     * Send draft
     * 
     * @param DraftToSend draft
     * @param string $operationId
     * @return Message
     */
    public function sendDraft(
        DraftToSend $draft, 
        string $operationId = null
    ) : Message
    {
        return $this->getDraftApi()->sendDraft($draft, $operationId);
    }   

}