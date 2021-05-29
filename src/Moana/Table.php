<?php

namespace FortressWire\Moana;

use FortressWire\Request;

class Table implements TableInterface
{
    use TableOperations;

    /**
     * Request intsance.
     *
     * @var \FortressWire\Request
     */
    private Request $request;

    /**
     * Instantiate FortressWireClient.
     *
     * @param \FortressWire\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
