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
    public function aeAssessment(): AEAssessmentGroup
    {
        return new AEAssessmentGroup($this->guzzleClient);
    }

    /**
     * Get the CIS endpoints.
     *
     * @return CISGroup
     */
    public function cis(): CISGroup
    {
        return new CISGroup($this->guzzleClient);
    }

    /**
     * Get the DpsMessage endpoints.
     *
     * @return DpsMessageGroup
     */
    public function dpsMessage(): DpsMessageGroup
    {
        return new DpsMessageGroup($this->guzzleClient);
    }

    /**
     * Get the Employee endpoints.
     *
     * @return EmployeeGroup
     */
    public function employee(): EmployeeGroup
    {
        return new EmployeeGroup($this->guzzleClient);
    }

    /**
     * Get the Employer endpoints.
     *
     * @return EmployerGroup
     */
    public function employer(): EmployerGroup
    {
        return new EmployerGroup($this->guzzleClient);
    }

    /**
     * Get the HealthCheck endpoints.
     *
     * @return HealthCheckGroup
     */
    public function healthCheck(): HealthCheckGroup
    {
        return new HealthCheckGroup($this->guzzleClient);
    }

    /**
     * Get the HolidaySchedule endpoints.
     *
     * @return HolidaySchemeGroup
     */
    public function holidayScheme(): HolidaySchemeGroup
    {
        return new HolidaySchemeGroup($this->guzzleClient);
    }

    /**
     * Get the Jobs endpoints.
     *
     * @return JobsGroup
     */
    public function jobs(): JobsGroup
    {
        return new JobsGroup($this->guzzleClient);
    }

    /**
     * Get the NominalCode endpoints.
     *
     * @return NominalCodeGroup
     */
    public function nominalCode(): NominalCodeGroup
    {
        return new NominalCodeGroup($this->guzzleClient);
    }

    /**
     * Get the PayCode endpoints.
     *
     * @return PayCodeGroup
     */
    public function payCode(): PayCodeGroup
    {
        return new PayCodeGroup($this->guzzleClient);
    }

    /**
     * Get the PayInstruction endpoints.
     *
     * @return PayInstructionGroup
     */
    public function payInstruction(): PayInstructionGroup
    {
        return new PayInstructionGroup($this->guzzleClient);
    }

    /**
     * Get the PayLine endpoints.
     *
     * @return PayLineGroup
     */
    public function payLine(): PayLineGroup
    {
        return new PayLineGroup($this->guzzleClient);
    }

    /**
     * Get the PayRun endpoints.
     *
     * @return PayRunGroup
     */
    public function payRun(): PayRunGroup
    {
        return new PayRunGroup($this->guzzleClient);
    }

    /**
     * Get the PaySchedule endpoints.
     *
     * @return PayScheduleGroup
     */
    public function paySchedule(): PayScheduleGroup
    {
        return new PayScheduleGroup($this->guzzleClient);
    }

    /**
     * Get the Pension endpoints.
     *
     * @return PensionGroup
     */
    public function pension(): PensionGroup
    {
        return new PensionGroup($this->guzzleClient);
    }

    /**
     * Get the Query endpoints.
     *
     * @return QueryGroup
     */
    public function query(): QueryGroup
    {
        return new QueryGroup($this->guzzleClient);
    }

    /**
     * Get the ReportLine endpoints.
     *
     * @return ReportLineGroup
     */
    public function reportLine(): ReportLineGroup
    {
        return new ReportLineGroup($this->guzzleClient);
    }

    /**
     * Get the ReportLineInstruction endpoints.
     *
     * @return ReportLineInstructionGroup
     */
    public function reportLineInstruction(): ReportLineInstructionGroup
    {
        return new ReportLineInstructionGroup($this->guzzleClient);
    }

    /**
     * Get the Reports endpoints.
     *
     * @return ReportsGroup
     */
    public function reports(): ReportsGroup
    {
        return new ReportsGroup($this->guzzleClient);
    }

    /**
     * Get the RTI endpoints.
     *
     * @return RTIGroup
     */
    public function rti(): RTIGroup
    {
        return new RTIGroup($this->guzzleClient);
    }

    /**
     * Get the Schemas endpoints.
     *
     * @return SchemasGroup
     */
    public function schemas(): SchemasGroup
    {
        return new SchemasGroup($this->guzzleClient);
    }

    /**
     * Get the SubContractor endpoints.
     *
     * @return SubContractorGroup
     */
    public function subContractor(): SubContractorGroup
    {
        return new SubContractorGroup($this->guzzleClient);
    }

    /**
     * Get the Tagging endpoints.
     *
     * @return TaggingGroup
     */
    public function tagging(): TaggingGroup
    {
        return new TaggingGroup($this->guzzleClient);
    }

    /**
     * Get the Templates endpoints.
     *
     * @return TemplatesGroup
     */
    public function templates(): TemplatesGroup
    {
        return new TemplatesGroup($this->guzzleClient);
    }
}
