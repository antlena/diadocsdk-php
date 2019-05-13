<?php

namespace Antlena\SDK\Diadoc\Api\Traits;

use Antlena\SDK\Diadoc\Api\InvoicingApi;
use Antlena\SDK\Diadoc\Proto\Invoicing\AcceptanceCertificateSellerTitleInfo;

/**
 * Trait InvoicingTrait
 *
 * @package Antlena\SDK\Diadoc\Api\Traits
 */
trait InvoicingTrait
{
    
    /**
     *
     * @var InvoicingApi
     */
    protected $invoicingApi;
    
    /**
     * 
     * @return InvoicingApi
     */
    public function getInvoicingApi() : InvoicingApi
    {
        if (!$this->invoicingApi) {
            $this->invoicingApi = new InvoicingApi($this->client, $this->auth);
        }

        return $this->invoicingApi;
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
        return $this->getInvoicingApi()->generateAcceptanceCertificateXmlForSeller(
            $info,
            $disableValidation
        );        
    }    

}