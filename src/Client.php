<?php

namespace B3none\PayRun;

use B3none\PayRun\Groups\AEAssessmentGroup;
use B3none\PayRun\Helpers\GuzzleHelper;
use GuzzleHttp\Client as GuzzleClient;

class Client
{
    /**
     * @var GuzzleClient
     */
    protected $guzzleClient;

    /**
     * Client constructor.
     *
     * @param $consumerKey
     * @param $consumerSecret
     * @param bool $isTesting
     */
    public function __construct($consumerKey, $consumerSecret, $isTesting = false)
    {
        $this->guzzleClient = GuzzleHelper::create($consumerKey, $consumerSecret, $isTesting);
    }

    /**
     * Get the AEAssessment endpoints.
     *
     * @return AEAssessmentGroup
     */
    public function AEAssessment(): AEAssessmentGroup
    {
        return new AEAssessmentGroup($this->guzzleClient);
    }
}
