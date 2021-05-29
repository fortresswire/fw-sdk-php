<?php

namespace FortressWire\Moana;

interface TableInterface
{
    public function get();

    public function find(int $id);

    public function create(array $data);
}
