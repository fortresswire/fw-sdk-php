<?php

namespace FortressWire\Exception;

use Exception;

class CredentialsException extends InternalException
{
    /** @inheritDoc */
    protected $message = 'An error occurred when calling operation ({operation}): The security key included in the request is invalid.';
}
