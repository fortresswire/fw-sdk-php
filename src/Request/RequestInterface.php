<?php

namespace FortressWire\Request;

use Psr\Http\Message\ResponseInterface;

interface RequestInterface
{
    public function on(string $path) : RequestInterface;

    public function make(string $method, array $data = null) : ResponseInterface;

    public function get(string $path = '') : ResponseInterface;

    public function head(string $path = '') : ResponseInterface;

    public function post(string $path = '', array $data) : ResponseInterface;

    public function put(string $path = '', array $data) : ResponseInterface;

    public function delete(string $path = '', array $data = null) : ResponseInterface;

    public function connect(string $path = '') : ResponseInterface;

    public function options(string $path = '') : ResponseInterface;

    public function trace(string $path = '') : ResponseInterface;

    public function patch(string $path = '', array $data) : ResponseInterface;
}
