<?php

namespace Antlena\SDK\Diadoc\Api;

/**
 * Interface AuthInterface
 *
 * @package Antlena\SDK\Diadoc\Api
 */
interface AuthInterface
{
    
    /**
     * Save access token
     *
     * @param string $token
     * @return bool
     */
    public function saveToken(string $token) : bool;

    /**
     * Get access token
     *
     * @return string Token
     */
    public function getToken() : string;
    
}