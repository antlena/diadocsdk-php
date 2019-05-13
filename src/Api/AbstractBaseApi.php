<?php

namespace Antlena\SDK\Diadoc\Api;

use GuzzleHttp\ClientInterface;

/**
 * AbstractBaseApi
 *
 * @package  Antlena\SDK\Diadoc\Api
 */
class AbstractBaseApi
{

    /**
     * @var ClientInterface
     */
    protected $client;
    
    /**
     * @var AuthInterface
     */
    protected $auth;    
    
    /**
     * 
     * @param ClientInterface $client
     * @param AuthInterface $auth
     */
    public function __construct(ClientInterface $client, AuthInterface $auth)
    {
        $this->client = $client;
        $this->auth = $auth;
    }
    
    /**
     * 
     * @return ClientInterface
     */
    public function getClient() : ClientInterface
    {
        return $this->client;
    }
    
    /**
     * 
     * @return AuthInterface
     */
    public function getAuth() : AuthInterface
    {
        return $this->auth;
    }
    
}