<?php

namespace B3none\PayRun\Groups;

use GuzzleHttp\Client as GuzzleClient;

class BaseGroup
{
    /**
     * @var GuzzleClient
     */
    protected $guzzleClient;

    /**
     * BaseGroup constructor.
     *
     * @param GuzzleClient $guzzleClient
     */
    public function __construct(GuzzleClient $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
    }
}