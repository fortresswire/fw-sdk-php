<?php

namespace FortressWire\Moana;

trait TableOperations
{
    /**
     * Fetch records.
     *
     * @param object|null
     */
    public function get()
    {
        return $this->request
            ->get()
            ->getBody()
            ->getContents();
    }

    /**
     * Find record.
     *
     * @param object|null
     */
    public function find(int $id)
    {
        return $this->request
            ->get("{$id}")
            ->getBody()
            ->getContents();
    }

    /**
     * Create record.
     *
     * @param object|null
     */
    public function create(array $data)
    {
        return $this->request
            ->put('', [ 'data' => $data ])
            ->getBody()
            ->getContents();
    }
}
