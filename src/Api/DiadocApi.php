<?php

namespace Antlena\SDK\Diadoc\Api;

use Antlena\SDK\Diadoc\Api\Traits\AuthTrait;
use Antlena\SDK\Diadoc\Api\Traits\OrganizationTrait;
use Antlena\SDK\Diadoc\Api\Traits\UniversalTransferDocumentTrait;
use Antlena\SDK\Diadoc\Api\Traits\MessageTrait;
use Antlena\SDK\Diadoc\Api\Traits\DraftTrait;
use Antlena\SDK\Diadoc\Api\Traits\SignerTrait;
use Antlena\SDK\Diadoc\Api\Traits\InvoicingTrait;
use Antlena\SDK\Diadoc\Api\Traits\DocflowTrait;

/**
 * DiadocApi
 *
 * @package  Antlena\SDK\Diadoc\Api
 */
class DiadocApi extends AbstractBaseApi
{
    
    use AuthTrait;
    use OrganizationTrait;
    use UniversalTransferDocumentTrait;
    use MessageTrait;
    use DraftTrait;
    use SignerTrait;
    use InvoicingTrait;
    use DocflowTrait;
    
}