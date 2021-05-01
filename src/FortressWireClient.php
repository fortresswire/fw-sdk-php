<?php

namespace FortressWire;

class FortressWireClient
{
    /**
     * Api region.
     *
     * @var string
     */
    private string $region;
    
    /**
     * Api version.
     *
     * @var string
     */
    private string $version;

    /**
     * Api host.
     *
     * @var string
     */
    private string $host;

    /**
     * Api key.
     *
     * @var string
     */
    private string $key;

    /**
     * Guzzle ssl verify.
     *
     * @var bool
     */
    private bool $ssl_verify;

    /**
     * Request intsance.
     *
     * @var Request
     */
    public Request $request;

    /**
     * Instantiate FortressWireClient.
     *
     * @param array $args Client options
     */
    public function __construct(array $args)
    {
        $this->region     = $args['region'];
        $this->version    = $args['version'];
        $this->key        = $args['key'];
        $this->host       = $args['host'];
        $this->ssl_verify = $args['ssl_verify'] ?? true;
        $this->request    = new Request($this->createGuzzleClient());
    }

    /**
     * Create a guzzle http client.
     *
     * @return \GuzzleHttp\Client
     */
    private function createGuzzleClient()
    {
        return new \GuzzleHttp\Client([
            'verify' =>  $this->ssl_verify,
            'base_uri' => "https://{$this->region}.{$this->host}/service/v{$this->version}/",
            'headers'  => [
                'Authorization' => "Bearer {$this->key}",
            ]
        ]);
    }
}
