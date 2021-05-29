<?php

namespace FortressWire;

use FortressWire\Exception\CredentialsException;
use FortressWire\Exception\UnresolvedHostException;
use FortressWire\Request\HasHTTPMethods;
use FortressWire\Request\RequestInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use Psr\Http\Message\ResponseInterface;

class Request implements RequestInterface
{
    use HasHTTPMethods;

    /**
     * Guzzle http client.
     *
     * @var \GuzzleHttp\Client
     */
    private \GuzzleHttp\Client $guzzle;

    /**
     * Endpoint path.
     *
     * @var string
     */
    private string $path;

    /**
     * Get endpoint path.
     *
     * @param string $path
     * @return string
     */
    private function getPath(string $path)
    {
        return trim($this->path) . '/' . trim($path, '/');
    }

    /**
     * Instantiate Request.
     *
     * @param \GuzzleHttp\Client $guzzle
     */
    public function __construct(\GuzzleHttp\Client $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    /**
     * Set endpoint path.
     *
     * @param string $path
     * @return Request
     */
    public function on(string $path) : Request
    {
        $this->path = trim($path, '/');

        return $this;
    }

    /**
     * Submit request.
     *
     * @param string $method
     * @param string $path
     * @param array|null $data
     * @throws CredentialsException
     * @return ResponseInterface
     */
    public function make(string $method, $path = '', array $data = null) : ResponseInterface
    {
        try {
            $request = $this->guzzle->request(strtoupper($method), $this->getPath($path) ?? '', [
                \GuzzleHttp\RequestOptions::JSON => $data,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ]
            ]);
    
            return $request;
        }
        
        catch (ClientException $exception) {
            switch ($exception->getCode()) {
                case 401:
                    throw new CredentialsException;
                    break;
                
                default:
                    throw $exception;
                    break;
            }
        }

        catch (ConnectException $exception) {
            throw new UnresolvedHostException;
        }
    }
}
