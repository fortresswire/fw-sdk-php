<?php

namespace FortressWire\Watchdog;

use FortressWire\FortressWireClient;
use Psr\Http\Message\ResponseInterface;

class WatchdogEvents implements WatchdogEventsInterface
{
    use HasLoggingLevels;

    /**
     * FortressWire Client.
     *
     * @var FortressWireClient
     */
    private FortressWireClient $client;

    /**
     * Instantiate Watchdog events.
     *
     * @param FortressWireClient $client
     */
    public function __construct(FortressWireClient $client)
    {
        $this->client = $client;
    }

    /**
     * Create event.
     *
     * @param int $level
     * @param string $message
     * @param array $extra
     * @return ResponseInterface
     */
    public function create(string $level = 'debug', string $message, array $extra = []) : ResponseInterface
    {
        return $this->client->request->on('event/create')->put('', [
            'level' => $level,
            'message' => $message,
            'extra' => $extra,
        ]);
    }
}
