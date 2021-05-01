<?php

namespace FortressWire\Exception;

use Exception;

class UnresolvedHostException extends Exception
{
    /** @inheritDoc */
    protected $message = 'An error occurred when calling operation ({operation}): The host or region is invalid.';
}