<?php

namespace FortressWire\Request;

use Psr\Http\Message\ResponseInterface;

trait HasHTTPMethods
{
    /**
     * Submit a get request.
     *
     * @return ResponseInterface
     */
    public function get() : ResponseInterface
    {
        return $this->make('GET');
    }

    /**
     * Submit a head request.
     *
     * @return ResponseInterface
     */
    public function head() : ResponseInterface
    {
        return $this->make('HEAD');
    }

    /**
     * Submit a post request.
     *
     * @param array $data
     * @return ResponseInterface
     */
    public function post(array $data) : ResponseInterface
    {
        return $this->make('POST', $data);
    }

    /**
     * Submit a put request.
     *
     * @param array $data
     * @return ResponseInterface
     */
    public function put(array $data) : ResponseInterface
    {
        return $this->make('PUT', $data);
    }

    /**
     * Submit a delete request.
     *
     * @param array|null $data
     * @return ResponseInterface
     */
    public function delete(array $data = null) : ResponseInterface
    {
        return $this->make('DELETE', $data);
    }

    /**
     * Submit a connect request.
     *
     * @return ResponseInterface
     */
    public function connect() : ResponseInterface
    {
        return $this->make('CONNECT');
    }

    /**
     * Submit a options request.
     *
     * @return ResponseInterface
     */
    public function options() : ResponseInterface
    {
        return $this->make('OPTIONS');
    }

    /**
     * Submit a trace request.
     *
     * @return ResponseInterface
     */
    public function trace() : ResponseInterface
    {
        return $this->make('TRACE');
    }

    /**
     * Submit a patch request.
     *
     * @param array $data
     * @return ResponseInterface
     */
    public function patch(array $data) : ResponseInterface
    {
        return $this->make('PATCH', $data);
    }
}