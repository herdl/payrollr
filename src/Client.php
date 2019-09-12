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
use B3none\PayRun\Groups\PayCodeGroup;
use B3none\PayRun\Groups\PayInstructionGroup;
use B3none\PayRun\Groups\PayLineGroup;
use B3none\PayRun\Groups\PayRunGroup;
use B3none\PayRun\Groups\PayScheduleGroup;
use B3none\PayRun\Groups\PensionGroup;
use B3none\PayRun\Groups\QueryGroup;
use B3none\PayRun\Groups\ReportLineGroup;
use B3none\PayRun\Groups\ReportLineInstructionGroup;
use B3none\PayRun\Groups\ReportsGroup;
use B3none\PayRun\Groups\RTIGroup;
use B3none\PayRun\Groups\SchemasGroup;
use B3none\PayRun\Groups\SubContractorGroup;
use B3none\PayRun\Groups\TaggingGroup;
use B3none\PayRun\Groups\TemplatesGroup;
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

    /**
     * Get the PayCode endpoints.
     *
     * @return PayCodeGroup
     */
    public function PayCode(): PayCodeGroup
    {
        return new PayCodeGroup($this->guzzleClient);
    }

    /**
     * Get the PayInstruction endpoints.
     *
     * @return PayInstructionGroup
     */
    public function PayInstruction(): PayInstructionGroup
    {
        return new PayInstructionGroup($this->guzzleClient);
    }

    /**
     * Get the PayLine endpoints.
     *
     * @return PayLineGroup
     */
    public function PayLine(): PayLineGroup
    {
        return new PayLineGroup($this->guzzleClient);
    }

    /**
     * Get the PayRun endpoints.
     *
     * @return PayRunGroup
     */
    public function PayRun(): PayRunGroup
    {
        return new PayRunGroup($this->guzzleClient);
    }

    /**
     * Get the PaySchedule endpoints.
     *
     * @return PayScheduleGroup
     */
    public function PaySchedule(): PayScheduleGroup
    {
        return new PayScheduleGroup($this->guzzleClient);
    }

    /**
     * Get the Pension endpoints.
     *
     * @return PensionGroup
     */
    public function Pension(): PensionGroup
    {
        return new PensionGroup($this->guzzleClient);
    }

    /**
     * Get the Query endpoints.
     *
     * @return QueryGroup
     */
    public function Query(): QueryGroup
    {
        return new QueryGroup($this->guzzleClient);
    }

    /**
     * Get the ReportLine endpoints.
     *
     * @return ReportLineGroup
     */
    public function ReportLine(): ReportLineGroup
    {
        return new ReportLineGroup($this->guzzleClient);
    }

    /**
     * Get the ReportLineInstruction endpoints.
     *
     * @return ReportLineInstructionGroup
     */
    public function ReportLineInstruction(): ReportLineInstructionGroup
    {
        return new ReportLineInstructionGroup($this->guzzleClient);
    }

    /**
     * Get the Reports endpoints.
     *
     * @return ReportsGroup
     */
    public function Reports(): ReportsGroup
    {
        return new ReportsGroup($this->guzzleClient);
    }

    /**
     * Get the RTI endpoints.
     *
     * @return RTIGroup
     */
    public function RTI(): RTIGroup
    {
        return new RTIGroup($this->guzzleClient);
    }

    /**
     * Get the Schemas endpoints.
     *
     * @return SchemasGroup
     */
    public function Schemas(): SchemasGroup
    {
        return new SchemasGroup($this->guzzleClient);
    }

    /**
     * Get the SubContractor endpoints.
     *
     * @return SubContractorGroup
     */
    public function SubContractor(): SubContractorGroup
    {
        return new SubContractorGroup($this->guzzleClient);
    }

    /**
     * Get the Tagging endpoints.
     *
     * @return TaggingGroup
     */
    public function Tagging(): TaggingGroup
    {
        return new TaggingGroup($this->guzzleClient);
    }

    /**
     * Get the Templates endpoints.
     *
     * @return TemplatesGroup
     */
    public function Templates(): TemplatesGroup
    {
        return new TemplatesGroup($this->guzzleClient);
    }
}
