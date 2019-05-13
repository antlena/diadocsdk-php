<?php

namespace Antlena\SDK\Diadoc\Api\Traits;

use Antlena\SDK\Diadoc\Api\AuthApi;

/**
 * Trait AuthTrait
 *
 * @package Antlena\SDK\Diadoc\Api\Traits
 */
trait AuthTrait
{
    
    /**
     *
     * @var AuthApi
     */
    protected $authApi;
    
    /**
     * 
     * @return AuthApi
     */
    public function getAuthApi() : AuthApi
    {
        if (!$this->authApi) {
            $this->authApi = new AuthApi($this->client, $this->auth);
        }

        return $this->authApi;
    }    
    
    /**
     * Authenticate by login and password
     * 
     * @param string $login Login
     * @param string $password Password
     * @return string
     */
    public function authenticate(string $login, string $password) : string
    {
        return $this->getAuthApi()->authenticate($login, $password);
    }   

}