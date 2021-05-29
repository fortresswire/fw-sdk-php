<?php

namespace FortressWire\Request;

use Psr\Http\Message\ResponseInterface;

trait HasHTTPMethods
{
    /**
     * Submit a get request.
     *
     * @param string $path
     * @return ResponseInterface
     */
    public function get(string $path = '') : ResponseInterface
    {
        return $this->make('GET', $path);
    }

    /**
     * Submit a head request.
     *
     * @param string $path
     * @return ResponseInterface
     */
    public function head(string $path = '') : ResponseInterface
    {
        return $this->make('HEAD', $path);
    }

    /**
     * Submit a post request.
     *
     * @param string $path
     * @param array $data
     * @return ResponseInterface
     */
    public function post(string $path = '', array $data) : ResponseInterface
    {
        return $this->make('POST', $path, $data);
    }

    /**
     * Submit a put request.
     *
     * @param string $path
     * @param array $data
     * @return ResponseInterface
     */
    public function put(string $path = '', array $data) : ResponseInterface
    {
        return $this->make('PUT', $path, $data);
    }

    /**
     * Submit a delete request.
     *
     * @param string $path
     * @param array|null $data
     * @return ResponseInterface
     */
    public function delete(string $path = '', array $data = null) : ResponseInterface
    {
        return $this->make('DELETE', $path, $data);
    }

    /**
     * Submit a connect request.
     *
     * @param string $path
     * @return ResponseInterface
     */
    public function connect(string $path = '') : ResponseInterface
    {
        return $this->make('CONNECT', $path);
    }

    /**
     * Submit a options request.
     *
     * @param string $path
     * @return ResponseInterface
     */
    public function options(string $path = '') : ResponseInterface
    {
        return $this->make('OPTIONS', $path);
    }

    /**
     * Submit a trace request.
     *
     * @param string $path
     * @return ResponseInterface
     */
    public function trace(string $path = '') : ResponseInterface
    {
        return $this->make('TRACE', $path);
    }

    /**
     * Submit a patch request.
     *
     * @param string $path
     * @param array $data
     * @return ResponseInterface
     */
    public function patch(string $path = '', array $data) : ResponseInterface
    {
        return $this->make('PATCH', $path, $data);
    }
}
