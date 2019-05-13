<?php

namespace Antlena\SDK\Diadoc\Api\Traits;

use Antlena\SDK\Diadoc\Api\SignerApi;
use Antlena\SDK\Diadoc\Proto\Invoicing\Signers\ExtendedSigner;
use Antlena\SDK\Diadoc\Proto\Invoicing\Signers\ExtendedSignerDetailsToPost;

/**
 * Trait SignerTrait
 *
 * @package Antlena\SDK\Diadoc\Api\Traits
 */
trait SignerTrait
{
    
    /**
     *
     * @var SignerApi
     */
    protected $signerApi;
    
    /**
     * 
     * @return SignerApi
     */
    public function getSignerApi() : SignerApi
    {
        if (!$this->signerApi) {
            $this->signerApi = new SignerApi($this->client, $this->auth);
        }

        return $this->signerApi;
    }    

    /**
     * Get extended signer details
     * 
     * @param string $boxId
     * @param string $thumbprint
     * @param string $documentTitleType
     * @return ExtendedSigner
     */
    public function getExtendedSignerDetails(
        string $boxId, 
        string $thumbprint,
        string $documentTitleType
    ) : ExtendedSigner
    {
        return $this->getSignerApi()->getExtendedSignerDetails(
            $boxId, 
            $thumbprint,
            $documentTitleType
        );
    } 
    
    /**
     * Post extended signer details
     * 
     * @param string $boxId
     * @param string $thumbprint
     * @param string $documentTitleType
     * @param ExtendedSignerDetailsToPost $signerDetails
     * @return ExtendedSigner
     */
    public function postExtendedSignerDetails(
        string $boxId, 
        string $thumbprint,
        string $documentTitleType,
        ExtendedSignerDetailsToPost $signerDetails
    ) : ExtendedSigner
    {
        return $this->getSignerApi()->postExtendedSignerDetails(
            $boxId, 
            $thumbprint,
            $documentTitleType,
            $signerDetails
        );
    }    

}