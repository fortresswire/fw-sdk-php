<?php

namespace FortressWire\Watchdog;

use Psr\Http\Message\ResponseInterface;

interface WatchdogEventsInterface
{
    public function create(string $level = 'debug', string $message, array $extra = []) : ResponseInterface;

    public function fatal(string $message, array $extra = []);

    public function error(string $message, array $extra = []);

    public function warn(string $message, array $extra = []);

    public function info(string $message, array $extra = []);

    public function debug(string $message, array $extra = []);
}
