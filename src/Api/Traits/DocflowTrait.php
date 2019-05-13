<?php

namespace Antlena\SDK\Diadoc\Api\Traits;

use Antlena\SDK\Diadoc\Api\DocflowApi;
use Antlena\SDK\Diadoc\Proto\Docflow\GetDocflowBatchRequest;
use Antlena\SDK\Diadoc\Proto\Docflow\GetDocflowBatchResponse;

/**
 * Trait DocflowTrait
 *
 * @package Antlena\SDK\Diadoc\Api\Traits
 */
trait DocflowTrait
{
    
    /**
     *
     * @var DocflowApi
     */
    protected $docflowApi;
    
    /**
     * 
     * @return DocflowApi
     */
    public function getDocflowApi() : DocflowApi
    {
        if (!$this->docflowApi) {
            $this->docflowApi = new DocflowApi($this->client, $this->auth);
        }

        return $this->docflowApi;
    }    

    /**
     * Get docflows
     * 
     * @param string $boxId
     * @param GetDocflowBatchRequest $batchRequest
     * @return GetDocflowBatchResponse
     */
    public function getDocflows(
        string $boxId, 
        GetDocflowBatchRequest $batchRequest
    ) : GetDocflowBatchResponse
    {
        return $this->getDocflowApi()->getDocflows($boxId, $batchRequest);
    }    

}