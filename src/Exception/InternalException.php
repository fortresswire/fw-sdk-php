<?php

namespace FortressWire\Exception;

use Exception;

class InternalException extends Exception
{
    public function __construct(string $message = null)
    {
        $message = $message ?? $this->message;

        $trace   = debug_backtrace();

        $line    = end($trace);

        $this->message =  str_replace('{operation}', basename($line['class']) . '::' . $line['function'], $message);
    }
}