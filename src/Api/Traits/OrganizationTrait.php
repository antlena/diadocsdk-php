<?php

namespace Antlena\SDK\Diadoc\Api\Traits;

use Antlena\SDK\Diadoc\Api\OrganizationApi;
use Antlena\SDK\Diadoc\Proto\Organization;
use Antlena\SDK\Diadoc\Proto\OrganizationList;
use Antlena\SDK\Diadoc\Proto\OrganizationUserPermissions;
use Antlena\SDK\Diadoc\Proto\User;
use Antlena\SDK\Diadoc\Proto\Box;

/**
 * Trait OrganizationTrait
 *
 * @package Antlena\SDK\Diadoc\Api\Traits
 */
trait OrganizationTrait
{
    
    /**
     *
     * @var OrganizationApi
     */
    protected $organizationApi;
    
    /**
     * 
     * @return OrganizationApi
     */
    public function getOrganizationApi() : OrganizationApi
    {
        if (!$this->organizationApi) {
            $this->organizationApi = new OrganizationApi($this->client, $this->auth);
        }

        return $this->organizationApi;
    }    
    
    /**
     * Get my organizations
     * 
     * @return OrganizationList
     */
    public function getMyOrganizations() : OrganizationList
    {
        return $this->getOrganizationApi()->getMyOrganizations();
    } 
    
    /**
     * Get my permissions
     * 
     * @param string $orgId
     * @return OrganizationUserPermissions
     */
    public function getMyPermissions(string $orgId) : OrganizationUserPermissions
    {
        return $this->getOrganizationApi()->getMyPermissions($orgId);
    }

    /**
     * Get my user
     * 
     * @return User
     */
    public function getMyUser() : User 
    {
        return $this->getOrganizationApi()->getMyUser();         
    }

    /**
     * Get organization by id
     * 
     * @param string $orgId
     * @return Organization
     */
    public function getOrganizationById(string $orgId) : Organization
    {
        return $this->getOrganizationApi()->getOrganizationById($orgId);        
    }

    /**
     * Get organization by box id
     * 
     * @param string $boxId
     * @return Organization
     */
    public function getOrganizationByBoxId(string $boxId) : Organization
    {
        return $this->getOrganizationApi()->getOrganizationByBoxId($boxId);        
    } 
    
    /**
     * Get box
     * 
     * @param string $boxId
     * @return Box
     */
    public function getBox(string $boxId) : Box
    {
        return $this->getOrganizationApi()->getBox($boxId);        
    }     

}