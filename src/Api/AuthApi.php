<?php

namespace Antlena\SDK\Diadoc\Api;

use Antlena\SDK\Diadoc\Exception\ApiException;
use GuzzleHttp\Psr7\Request;

/**
 * AuthApi
 *
 * @package  Antlena\SDK\Diadoc\Api
 */
class AuthApi extends DiadocHttpApi
{
    
    const RESOURCE_AUTHENTICATE = '/Authenticate';
    
    const RESOURCE_AUTHENTICATE_V2 = '/V2/Authenticate';      
    
    /**
     * Authenticate resource
     * 
     * @return string
     */
    public function getAuthenticateResource() : string
    {
        return $this->getHost() . static::RESOURCE_AUTHENTICATE;
    }

    /**
     * Authenticate request
     * 
     * @param string $login Login
     * @param string $password Password
     * @return Request
     */
    protected function authenticateRequest(
        string $login, 
        string $password
    ) : Request 
    {
        $query = \GuzzleHttp\Psr7\build_query([
            'login' => $login,
            'password' => $password
        ]);
        
        return new Request(
            'POST',
            $this->getAuthenticateResource() . ($query ? "?{$query}" : ''),
            $this->buildRequestHeaders()
        );         
    }
    
    /**
     * Authenticate by login and password
     * 
     * @param string $login Login
     * @param string $password Password
     * @return string Token
     * @throws ApiException
     */
    public function authenticate(string $login, string $password) : string
    {
        $request = $this->authenticateRequest($login, $password);
        $response = $this->send($request);
        $token = $response->getBody()->getContents();
        $this->getAuth()->saveToken($token);

        return $token;
    }

}