<?php

namespace B3none\PayRun;

use B3none\PayRun\Groups\AEAssessmentGroup;
use B3none\PayRun\Groups\CISGroup;
use B3none\PayRun\Groups\DpsMessageGroup;
use B3none\PayRun\Groups\EmployeeGroup;
use B3none\PayRun\Groups\EmployerGroup;
use B3none\PayRun\Groups\HealthCheckGroup;
use B3none\PayRun\Groups\HolidaySchemeGroup;
use B3none\PayRun\Groups\JobsGroup;
use B3none\PayRun\Groups\NominalCodeGroup;
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

    /**
     * Get the CIS endpoints.
     *
     * @return CISGroup
     */
    public function CIS(): CISGroup
    {
        return new CISGroup($this->guzzleClient);
    }

    /**
     * Get the DpsMessage endpoints.
     *
     * @return DpsMessageGroup
     */
    public function DpsMessage(): DpsMessageGroup
    {
        return new DpsMessageGroup($this->guzzleClient);
    }

    /**
     * Get the Employee endpoints.
     *
     * @return EmployeeGroup
     */
    public function Employee(): EmployeeGroup
    {
        return new EmployeeGroup($this->guzzleClient);
    }

    /**
     * Get the Employer endpoints.
     *
     * @return EmployerGroup
     */
    public function Employer(): EmployerGroup
    {
        return new EmployerGroup($this->guzzleClient);
    }

    /**
     * Get the HealthCheck endpoints.
     *
     * @return HealthCheckGroup
     */
    public function HealthCheck(): HealthCheckGroup
    {
        return new HealthCheckGroup($this->guzzleClient);
    }

    /**
     * Get the HolidaySchedule endpoints.
     *
     * @return HolidaySchemeGroup
     */
    public function HolidayScheme(): HolidaySchemeGroup
    {
        return new HolidaySchemeGroup($this->guzzleClient);
    }

    /**
     * Get the Jobs endpoints.
     *
     * @return JobsGroup
     */
    public function Jobs(): JobsGroup
    {
        return new JobsGroup($this->guzzleClient);
    }

    /**
     * Get the NominalCode endpoints.
     *
     * @return NominalCodeGroup
     */
    public function NominalCode(): NominalCodeGroup
    {
        return new NominalCodeGroup($this->guzzleClient);
    }

}
