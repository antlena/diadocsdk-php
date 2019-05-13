<?php

namespace Antlena\SDK\Diadoc\Api\Traits;

use Antlena\SDK\Diadoc\Api\UniversalTransferDocumentApi;
use Antlena\SDK\Diadoc\Proto\Invoicing\UniversalTransferDocumentSellerTitleInfo;

/**
 * Trait UniversalTransferDocumentTrait
 *
 * @package Antlena\SDK\Diadoc\Api\Traits
 */
trait UniversalTransferDocumentTrait
{
    
    /**
     *
     * @var UniversalTransferDocumentApi
     */
    protected $utdApi;
    
    /**
     * 
     * @return UniversalTransferDocumentApi
     */
    public function getUTDApi() : UniversalTransferDocumentApi
    {
        if (!$this->utdApi) {
            $this->utdApi = new UniversalTransferDocumentApi($this->client, $this->auth);
        }

        return $this->utdApi;
    }    

    /**
     * Generate Universal Transfer Document XML for seller
     * 
     * @param UniversalTransferDocumentSellerTitleInfo $info
     * @param bool $disableValidation
     * @return string
     */
    public function generateUniversalTransferDocumentXmlForSeller(
        UniversalTransferDocumentSellerTitleInfo $info,
        bool $disableValidation = false              
    ) : string
    {
        return $this->getUTDApi()->generateUniversalTransferDocumentXmlForSeller(
            $info, 
            $disableValidation
        );
    }    

}