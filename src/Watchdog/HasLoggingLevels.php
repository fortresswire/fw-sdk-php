<?php

namespace FortressWire\Watchdog;

trait HasLoggingLevels
{
    /**
     * Create fatal event.
     *
     * @param string $message
     * @param array $extra
     */
    public function fatal(string $message, array $extra = [])
    {
        $this->create('fatal', $message, $extra);
    }

    /**
     * Create error event.
     *
     * @param string $message
     * @param array $extra
     */
    public function error(string $message, array $extra = [])
    {
        $this->create('error', $message, $extra);
    }

    /**
     * Create warning event.
     *
     * @param string $message
     * @param array $extra
     */
    public function warn(string $message, array $extra = [])
    {
        $this->create('warn', $message, $extra);
    }

    /**
     * Create info event.
     *
     * @param string $message
     * @param array $extra
     */
    public function info(string $message, array $extra = [])
    {
        $this->create('info', $message, $extra);
    }

    /**
     * Create debug event.
     *
     * @param string $message
     * @param array $extra
     */
    public function debug(string $message, array $extra = [])
    {
        $this->create('debug', $message, $extra);
    }
}
