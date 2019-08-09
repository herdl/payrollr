<?php

namespace B3none\PayRun\Models;

use DateTime;

class Date
{
    /**
     * @var int
     */
    protected $timestamp;

    /**
     * Date constructor.
     *
     * @param int|null $timestamp
     */
    public function __construct(?int $timestamp = null)
    {
        if ($timestamp) {
            $this->timestamp = $timestamp;
        }
    }

    /**
     * @param int $timestamp
     * @return Date
     */
    public function setTimestamp(int $timestamp): Date
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @return string
     */
    public function format(): string
    {
        return self::formatDate($this->timestamp);
    }

    /**
     * @param int $timestamp
     * @return string
     */
    public static function formatDate(int $timestamp): string
    {
        return date('Y-m-d', $timestamp);
    }
}
