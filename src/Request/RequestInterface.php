<?php

namespace FortressWire\Request;

use Psr\Http\Message\ResponseInterface;

interface RequestInterface
{
    public function on(string $path) : RequestInterface;

    public function make(string $method, array $data = null) : ResponseInterface;

    public function get() : ResponseInterface;

    public function head() : ResponseInterface;

    public function post(array $data) : ResponseInterface;

    public function put(array $data) : ResponseInterface;

    public function delete(array $data = null) : ResponseInterface;

    public function connect() : ResponseInterface;

    public function options() : ResponseInterface;

    public function trace() : ResponseInterface;

    public function patch(array $data) : ResponseInterface;
}
