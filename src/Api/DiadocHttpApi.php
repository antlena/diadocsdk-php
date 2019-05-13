<?php

namespace Antlena\SDK\Diadoc\Api;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\MessageInterface;
use Antlena\SDK\Diadoc\Exception\ApiException;

/**
 * DiadocHttpApi
 *
 * @package  Antlena\SDK\Diadoc\Api
 */
class DiadocHttpApi extends AbstractBaseApi
{    
    
    /**
     * Get host
     * 
     * @return string
     */
    public function getHost() : string
    {
        return $this->getClient()->getConfig('base_uri');
    } 
    
    /**
     * Send request
     * 
     * @param Request $request
     * @return MessageInterface
     */
    public function send(Request $request) : MessageInterface
    {
        try {

            return $this->getClient()->send($request);

        } catch (RequestException $e) {

            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
            );

        }
    }
    
    /**
     * Build request headers
     * 
     * @return array
     */
    public function buildRequestHeaders() : array
    {
        return [
            'Authorization' => sprintf(
                'DiadocAuth ddauth_api_client_id=%s', 
                $this->getClient()->getConfig('api_key') .
                (
                    ($token = $this->getAuth()->getToken()) 
                    ?  sprintf(', ddauth_token=%s', $token) 
                    : ''
                )
            )
        ];
    }

}