<?php

namespace Herdl\PayRun;

use Herdl\PayRun\Groups\AEAssessmentGroup;
use Herdl\PayRun\Groups\CISGroup;
use Herdl\PayRun\Groups\DpsMessageGroup;
use Herdl\PayRun\Groups\EmployeeGroup;
use Herdl\PayRun\Groups\EmployerGroup;
use Herdl\PayRun\Groups\HealthCheckGroup;
use Herdl\PayRun\Groups\HolidaySchemeGroup;
use Herdl\PayRun\Groups\JobsGroup;
use Herdl\PayRun\Groups\NominalCodeGroup;
use Herdl\PayRun\Groups\PayCodeGroup;
use Herdl\PayRun\Groups\PayInstructionGroup;
use Herdl\PayRun\Groups\PayLineGroup;
use Herdl\PayRun\Groups\PayRunGroup;
use Herdl\PayRun\Groups\PayScheduleGroup;
use Herdl\PayRun\Groups\PensionGroup;
use Herdl\PayRun\Groups\QueryGroup;
use Herdl\PayRun\Groups\ReportLineGroup;
use Herdl\PayRun\Groups\ReportLineInstructionGroup;
use Herdl\PayRun\Groups\ReportsGroup;
use Herdl\PayRun\Groups\RTIGroup;
use Herdl\PayRun\Groups\SchemasGroup;
use Herdl\PayRun\Groups\SubContractorGroup;
use Herdl\PayRun\Groups\TaggingGroup;
use Herdl\PayRun\Groups\TemplatesGroup;
use Herdl\PayRun\Helpers\GuzzleHelper;
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
