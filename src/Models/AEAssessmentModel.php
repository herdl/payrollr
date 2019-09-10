<?php

namespace B3none\PayRun\Models;

/**
 * https://developer.payrun.io/docs/reference/ae-assessment/index.html#ae-assessment
 */
class AEAssessmentModel
{
    /**
     * The employee's age as time of assessment.
     *
     * @var int
     */
    protected $age;

    /**
     * The employee's state pension age in years.
     *
     * @var int
     */
    protected $statePensionAge;

    /**
     * The date the employee is entitled to claim state pension.
     *
     * @var int
     */
    protected $statePensionDate;

    /**
     * The date the assessment took place.
     *
     * @var int
     */
    protected $assessmentDate;

    /**
     * The assessment qualifying earnings.
     *
     * @var float
     */
    protected $qualifyingEarnings;

    /**
     * The assessment code. Indicates the worker type identified during the assessment.
     *
     * @var string
     */
    protected $assessmentCode;

    /**
     * The assessment event. Indicates the assessment event type.
     *
     * @var string
     */
    protected $assessmentEvent;

    /**
     * The assessment result. Indicates the assessment final result.
     *
     * @var string
     */
    protected $assessmentResult;

    /**
     * The assessment override. Indicates the type of assessment override action.
     *
     * @var string
     */
    protected $assessmentOverride;

    /**
     * The final date a worker can opt-out and have their contributions refunded.
     *
     * @var int
     */
    protected $optOutWindowEndDate;

    /**
     * The date on which all workers must be assessed for automatic re-enrolment by the employer.
     *
     * @var int
     */
    protected $reEnrollmentDate;

    /**
     * Indicates if the worker is already a member of a qualifying pension scheme.
     *
     * @var bool
     */
    protected $isMemberOfAlternativePensionScheme;

    /**
     * The tax year the assessment was made during.
     *
     * @var int
     */
    protected $taxYear;

    /**
     * The tax period the assessment was made during.
     *
     * @var int
     */
    protected $taxPeriod;

    /**
     * AEAssessmentModel constructor.
     *
     * @param int|null $age
     * @param int|null $statePensionAge
     * @param int|null $statePensionDate
     * @param int|null $assessmentDate
     * @param float|null $qualifyingEarnings
     * @param string|null $assessmentCode
     * @param string|null $assessmentEvent
     * @param string|null $assessmentResult
     * @param string|null $assessmentOverride
     * @param int|null $optOutWindowEndDate
     * @param int|null $reEnrollmentDate
     * @param bool|null $isMemberOfAlternativePensionScheme
     * @param int|null $taxYear
     * @param int|null $taxPeriod
     */
    public function __construct(
        ?int $age = null,
        ?int $statePensionAge = null,
        ?int $statePensionDate = null,
        ?int $assessmentDate = null,
        ?float $qualifyingEarnings = null,
        ?string $assessmentCode = null,
        ?string $assessmentEvent = null,
        ?string $assessmentResult = null,
        ?string $assessmentOverride = null,
        ?int $optOutWindowEndDate = null,
        ?int $reEnrollmentDate = null,
        ?bool $isMemberOfAlternativePensionScheme = null,
        ?int $taxYear = null,
        ?int $taxPeriod = null
    ) {
        if ($age) {
            $this->age = $age;
        }

        if ($statePensionAge) {
            $this->statePensionAge = $statePensionAge;
        }

        if ($statePensionDate) {
            $this->statePensionDate = $statePensionDate;
        }

        if ($assessmentDate) {
            $this->assessmentDate = $assessmentDate;
        }

        if ($qualifyingEarnings) {
            $this->qualifyingEarnings = $qualifyingEarnings;
        }

        if ($assessmentCode) {
            $this->assessmentCode = $assessmentCode;
        }

        if ($assessmentEvent) {
            $this->assessmentEvent = $assessmentEvent;
        }

        if ($assessmentResult) {
            $this->assessmentResult = $assessmentResult;
        }

        if ($assessmentOverride) {
            $this->assessmentOverride = $assessmentOverride;
        }

        if ($optOutWindowEndDate) {
            $this->optOutWindowEndDate = $optOutWindowEndDate;
        }

        if ($reEnrollmentDate) {
            $this->reEnrollmentDate = $reEnrollmentDate;
        }

        if ($isMemberOfAlternativePensionScheme) {
            $this->isMemberOfAlternativePensionScheme = $isMemberOfAlternativePensionScheme;
        }

        if ($taxYear) {
            $this->taxYear = $taxYear;
        }

        if ($taxPeriod) {
            $this->taxPeriod = $taxPeriod;
        }
    }

    /**
     * @param int $age
     * @return AEAssessmentModel
     */
    public function setAge(int $age): AEAssessmentModel
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @param int $statePensionAge
     * @return AEAssessmentModel
     */
    public function setStatePensionAge(int $statePensionAge): AEAssessmentModel
    {
        $this->statePensionAge = $statePensionAge;
        return $this;
    }

    /**
     * @param int $statePensionDate
     * @return AEAssessmentModel
     */
    public function setStatePensionDate(int $statePensionDate): AEAssessmentModel
    {
        $this->statePensionDate = $statePensionDate;
        return $this;
    }

    /**
     * @param int $assessmentDate
     * @return AEAssessmentModel
     */
    public function setAssessmentDate(int $assessmentDate): AEAssessmentModel
    {
        $this->assessmentDate = $assessmentDate;
        return $this;
    }

    /**
     * @param float $qualifyingEarnings
     * @return AEAssessmentModel
     */
    public function setQualifyingEarnings(float $qualifyingEarnings): AEAssessmentModel
    {
        $this->qualifyingEarnings = $qualifyingEarnings;
        return $this;
    }

    /**
     * @param string $assessmentCode
     * @return AEAssessmentModel
     */
    public function setAssessmentCode(string $assessmentCode): AEAssessmentModel
    {
        $this->assessmentCode = $assessmentCode;
        return $this;
    }

    /**
     * @param string $assessmentEvent
     * @return AEAssessmentModel
     */
    public function setAssessmentEvent(string $assessmentEvent): AEAssessmentModel
    {
        $this->assessmentEvent = $assessmentEvent;
        return $this;
    }

    /**
     * @param string $assessmentResult
     * @return AEAssessmentModel
     */
    public function setAssessmentResult(string $assessmentResult): AEAssessmentModel
    {
        $this->assessmentResult = $assessmentResult;
        return $this;
    }

    /**
     * @param string $assessmentOverride
     * @return AEAssessmentModel
     */
    public function setAssessmentOverride(string $assessmentOverride): AEAssessmentModel
    {
        $this->assessmentOverride = $assessmentOverride;
        return $this;
    }

    /**
     * @param int $optOutWindowEndDate
     * @return AEAssessmentModel
     */
    public function setOptOutWindowEndDate(int $optOutWindowEndDate): AEAssessmentModel
    {
        $this->optOutWindowEndDate = $optOutWindowEndDate;
        return $this;
    }

    /**
     * @param int $reEnrollmentDate
     * @return AEAssessmentModel
     */
    public function setReEnrollmentDate(int $reEnrollmentDate): AEAssessmentModel
    {
        $this->reEnrollmentDate = $reEnrollmentDate;
        return $this;
    }

    /**
     * @param bool $isMemberOfAlternativePensionScheme
     * @return AEAssessmentModel
     */
    public function setIsMemberOfAlternativePensionScheme(bool $isMemberOfAlternativePensionScheme): AEAssessmentModel
    {
        $this->isMemberOfAlternativePensionScheme = $isMemberOfAlternativePensionScheme;
        return $this;
    }

    /**
     * @param int $taxYear
     * @return AEAssessmentModel
     */
    public function setTaxYear(int $taxYear): AEAssessmentModel
    {
        $this->taxYear = $taxYear;
        return $this;
    }

    /**
     * @param int $taxPeriod
     * @return AEAssessmentModel
     */
    public function setTaxPeriod(int $taxPeriod): AEAssessmentModel
    {
        $this->taxPeriod = $taxPeriod;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return int
     */
    public function getStatePensionAge(): int
    {
        return $this->statePensionAge;
    }

    /**
     * @return int
     */
    public function getStatePensionDate(): int
    {
        return $this->statePensionDate;
    }

    /**
     * @return int
     */
    public function getAssessmentDate(): int
    {
        return $this->assessmentDate;
    }

    /**
     * @return float
     */
    public function getQualifyingEarnings(): float
    {
        return $this->qualifyingEarnings;
    }

    /**
     * @return string
     */
    public function getAssessmentCode(): string
    {
        return $this->assessmentCode;
    }

    /**
     * @return string
     */
    public function getAssessmentEvent(): string
    {
        return $this->assessmentEvent;
    }

    /**
     * @return string
     */
    public function getAssessmentResult(): string
    {
        return $this->assessmentResult;
    }

    /**
     * @return string
     */
    public function getAssessmentOverride(): string
    {
        return $this->assessmentOverride;
    }

    /**
     * @return int
     */
    public function getOptOutWindowEndDate(): int
    {
        return $this->optOutWindowEndDate;
    }

    /**
     * @return int
     */
    public function getReEnrollmentDate(): int
    {
        return $this->reEnrollmentDate;
    }

    /**
     * @return bool
     */
    public function isMemberOfAlternativePensionScheme(): bool
    {
        return $this->isMemberOfAlternativePensionScheme;
    }

    /**
     * @return int
     */
    public function getTaxYear(): int
    {
        return $this->taxYear;
    }

    /**
     * @return int
     */
    public function getTaxPeriod(): int
    {
        return $this->taxPeriod;
    }

    /**
     * @return array
     */
    public function format(): array
    {
        return [
            'Age' => (string)$this->age,
            'StatePensionAge' => (string)$this->statePensionAge,
            'StatePensionDate' => Date::formatDate($this->statePensionDate),
            'AssessmentDate' => Date::formatDate($this->assessmentDate),
            'QualifyingEarnings' => (string)$this->qualifyingEarnings,
            'AssessmentCode' => (string)$this->assessmentCode,
            'AssessmentEvent' => (string)$this->assessmentEvent,
            'AssessmentResult' => (string)$this->assessmentResult,
            'AssessmentOverride' => (string)$this->assessmentOverride,
            'OptOutWindowEndDate' => Date::formatDate($this->optOutWindowEndDate),
            'ReenrolmentDate' => Date::formatDate($this->reEnrollmentDate),
            'IsMemberOfAlternativePensionScheme' => $this->isMemberOfAlternativePensionScheme ? 'true' : 'false',
            'TaxYear' => (string)$this->taxYear,
            'TaxPeriod' => (string)$this->taxPeriod,
        ];
    }
}
