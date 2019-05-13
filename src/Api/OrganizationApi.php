<?php

namespace Antlena\SDK\Diadoc\Api;

use GuzzleHttp\Psr7\Request;
use Antlena\SDK\Diadoc\Proto\Organization;
use Antlena\SDK\Diadoc\Proto\OrganizationList;
use Antlena\SDK\Diadoc\Proto\OrganizationUserPermissions;
use Antlena\SDK\Diadoc\Proto\User;
use Antlena\SDK\Diadoc\Proto\Box;
use Antlena\SDK\Diadoc\Exception\ApiException;

/**
 * OrganizationApi
 *
 * @package  Antlena\SDK\Diadoc\Api
 */
class OrganizationApi extends DiadocHttpApi
{
    
    const RESOURCE_GET_MY_ORGANIZATION = '/GetMyOrganizations';
    
    const RESOURCE_GET_MY_PERMISSIONS = '/GetMyPermissions';
    
    const RESOURCE_GET_MY_USER = '/GetMyUser';
    
    const RESOURCE_GET_ORGANIZATION = '/GetOrganization';
    
    const RESOURCE_GET_BOX = '/GetBox';
    
    /**
     * Get my organizations resource
     * 
     * @return string
     */
    public function getMyOrganizationsResource() : string
    {
        return $this->getHost() . static::RESOURCE_GET_MY_ORGANIZATION;
    }
    
    /**
     * Get my permissions resource
     * 
     * @return string
     */
    public function getMyPermissionsResource() : string
    {
        return $this->getHost() . static::RESOURCE_GET_MY_PERMISSIONS;
    }

    /**
     * Get my user resource
     * 
     * @return string
     */
    public function getMyUserResource() : string
    {
        return $this->getHost() . static::RESOURCE_GET_MY_USER;
    } 
    
    /**
     * Get organization resource
     * 
     * @return string
     */
    public function getOrganizationResource() : string
    {
        return $this->getHost() . static::RESOURCE_GET_ORGANIZATION;
    } 

    /**
     * Get box resource
     * 
     * @return string
     */
    public function getBoxResource() : string
    {
        return $this->getHost() . static::RESOURCE_GET_BOX;
    }    

    /**
     * Get my organizations request
     * 
     * @return Request
     */
    protected function getMyOrganizationsRequest() : Request 
    {
        return new Request(
            'GET',
            $this->getMyOrganizationsResource(),
            $this->buildRequestHeaders()
        );         
    } 
    
    /**
     * Get my permissions request
     * 
     * @param string $orgId
     * @return Request
     */

    protected function getMyPermissionsRequest(string $orgId) : Request 
    {
        $query = \GuzzleHttp\Psr7\build_query(['orgId' => $orgId]);
        
        return new Request(
            'GET',
            $this->getMyPermissionsResource() . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders()
        );         
    } 
    
    /**
     * Get my user request
     * 
     * @return Request
     */
    protected function getMyUserRequest() : Request 
    {
        return new Request(
            'GET',
            $this->getMyUserResource(),
            $this->buildRequestHeaders()
        );         
    }
    
    /**
     * Get organization by id request
     * 
     * @param string $orgId
     * @return Request
     */
    protected function getOrganizationByIdRequest(string $orgId) : Request 
    {
        $query = \GuzzleHttp\Psr7\build_query(['orgId' => $orgId]);
        
        return new Request(
            'GET',
            $this->getOrganizationResource() . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders()
        );         
    } 
    
    /**
     * Get organization by box id request
     * 
     * @param string $boxId
     * @return Request
     */
    protected function getOrganizationByBoxIdRequest(string $boxId) : Request 
    {
        $query = \GuzzleHttp\Psr7\build_query(['boxId' => $boxId]);
        
        return new Request(
            'GET',
            $this->getOrganizationResource() . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders()
        );         
    } 
    
    /**
     * Get box request
     * 
     * @param string $boxId
     * @return Request
     */
    protected function getBoxRequest(string $boxId) : Request 
    {
        $query = \GuzzleHttp\Psr7\build_query(['boxId' => $boxId]);
        
        return new Request(
            'GET',
            $this->getBoxResource() . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders()
        );         
    }     

    /**
     * Get my organizations
     * 
     * @return OrganizationList
     * @throws ApiException
     */
    public function getMyOrganizations() : OrganizationList
    {
        $request = $this->getMyOrganizationsRequest();
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return OrganizationList::fromStream($content);
    }
    
    /**
     * Get my permissions
     * 
     * @param string $orgId
     * @return OrganizationUserPermissions
     * @throws ApiException
     */
    public function getMyPermissions(string $orgId) : OrganizationUserPermissions
    {
        $request = $this->getMyPermissionsRequest($orgId);
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return OrganizationUserPermissions::fromStream($content);    
    }
    
    /**
     * Get my user
     * 
     * @return User
     * @throws ApiException
     */
    public function getMyUser() : User 
    {
        $request = $this->getMyUserRequest();
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return User::fromStream($content);         
    }
    
    /**
     * Get organization by id
     * 
     * @param string $orgId
     * @return Organization
     * @throws ApiException
     */
    public function getOrganizationById(string $orgId) : Organization
    {
        $request = $this->getOrganizationByIdRequest($orgId);
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return Organization::fromStream($content);        
    }
    
    /**
     * Get organization by box id
     * 
     * @param string $boxId
     * @return Organization
     * @throws ApiException
     */
    public function getOrganizationByBoxId(string $boxId) : Organization
    {
        $request = $this->getOrganizationByBoxIdRequest($boxId);
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return Organization::fromStream($content);      
    }

    /**
     * Get box
     * 
     * @param string $boxId
     * @return Box
     * @throws ApiException
     */
    public function getBox(string $boxId) : Box
    {
        $request = $this->getBoxRequest($boxId);
        $response = $this->send($request);
        $content = $response->getBody()->getContents();
            
        return Box::fromStream($content);       
    }    
    
}