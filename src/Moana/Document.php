<?php

namespace FortressWire\Moana;

class Document implements DocumentInterface
{
    /**
     * Moana Client.
     *
     * @var \FortressWire\Moana\MoanaClient
     */
    private MoanaClient $client;

    /**
     * Instantiate Moana DB document.
     *
     * @param \FortressWire\Moana\MoanaClient $client
     */
    public function __construct(MoanaClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get table.
     *
     * @param string $name
     * @return \FortressWire\Moana\Table
     */
    public function table(string $name)
    {
        return new Table($this->client->request->on($name));
    }
}
