<?php

namespace Herdl\PayRun\Models;

use Error;
use Exception;
use Herdl\PayRun\Exceptions\ModelException;
use Herdl\PayRun\Helpers\ExceptionHelper;

/**
 * https://developer.payrun.io/docs/reference/pension/index.html#pension
 */
class PensionModel
{
    /**
     * A timestamp for the date the revision will come into effect.
     *
     * @var int
     */
    protected $effectiveDate;

    /**
     * The revision number of the pension scheme; this is a readonly system generated value.
     *
     * @var int
     */
    protected $revision;

    /**
     * Allows an override of the default pay code used by the pension scheme.
     *
     * @var string
     */
    protected $code;

    /**
     * The name of the pension scheme.
     *
     * @var string
     */
    protected $schemeName;

    /**
     * The name of the pension provider.
     *
     * @var string
     */
    protected $providerName;

    /**
     * The reference issued by the pension provider.
     *
     * @var string
     */
    protected $providerEmployerRef;

    /**
     * The group name within the pension scheme.
     *
     * @var string
     */
    protected $group;

    /**
     * The sub-group name within the pension scheme.
     *
     * @var string
     */
    protected $subGroup;

    /**
     * The employee's gross cash contribution.
     *
     * @var float
     */
    protected $employeeContributionCash;

    /**
     * The employer's gross cash contribution.
     *
     * @var float
     */
    protected $employerContributionCash;

    /**
     * The employee's percentage contribution from their pensionable pay.
     *
     * @var float
     */
    protected $employeeContributionPercent;

    /**
     * The employer's percentage contribution from the employee's pensionable pay.
     *
     * @var float
     */
    protected $employerContributionPercent;

    /**
     * The lower earning threshold; only pensionable pay above this value will be included for calculating contributions.
     * Thresholds are predominantly used for triggering Auto Enrolment contributions; see Auto Enrolment for more information.
     *
     * https://developer.payrun.io/docs/payroll-help/auto-enrolment.html
     *
     * @var float
     */
    protected $lowerThreshold;

    /**
     * The upper earning threshold; only pensionable pay below this value will be included for calculating contributions.
     * Thresholds are predominantly used for triggering Auto Enrolment contributions; see Auto Enrolment for more information.
     *
     * https://developer.payrun.io/docs/payroll-help/auto-enrolment.html
     *
     * @var float
     */
    protected $upperThreshold;

    /**
     * The taxation method to use when calculating pension contributions; this should be mandated by your pension provider.
     *
     * NotSet, NetBased, ReliefAtSource
     *
     * @var string
     */
    protected $taxationMethod;

    /**
     * The normal day of the month when contributions will be deducted.
     *
     * @var int
     */
    protected $contributionDeductionDay;

    /**
     * The salary sacrifice option. Used to indicate if the pension scheme employee contributions should make use of salary sacrifice.
     *
     * @var bool
     */
    protected $salarySacrifice;

    /**
     * The pro-rata method option to be used; the default is not set. See Pro-rata Calculation Methods for more information.
     *
     * https://developer.payrun.io/docs/payroll-help/prorata-calculation-methods.html
     *
     * NotSet, Annual260Days, Annual365Days, AnnualQualifyingDays, DaysPerCalendarMonth, DaysPerTaxPeriod
     *
     * @var string
     */
    protected $proRataMethod;

    /**
     * The rounding option to use when calculating pension deductions from both employee and employer; default is Bankers.
     *
     * NotSet, PennyUp, PennyDown, Bankers, FiveUp, FiveDown
     *
     * @var string
     */
    protected $roundingOption = 'Bankers';

    /**
     * The Auto Enrolment compatibility indicator. Used to indicate if this pension scheme is compatible with auto enrolment requirements.
     *
     * @var bool
     */
    protected $aeCompatible;

    /**
     * The Use Auto Enrolment Thresholds indicator. Used to indicate if this pension scheme uses the auto enrolment thresholds.
     *
     * @var bool
     */
    protected $useAEThresholds;

    /**
     * The list of pay codes that contribute to the pensionable pay amount.
     *
     * @var string[]
     */
    protected $pensionablePayCodes;

    /**
     * The list of pay codes that contribute to the qualifying earnings pay amount.
     *
     * @var string[]
     */
    protected $qualifyingPayCodes;

    /**
     * The optional pension meta data collection.
     *
     * @var MetaDataModel
     */
    protected $metaData;

    /**
     * PensionModel constructor.
     *
     * @param int|null $effectiveDate
     * @param int|null $revision
     * @param string|null $code
     * @param string|null $schemeName
     * @param string|null $providerName
     * @param string|null $providerEmployerRef
     * @param string|null $group
     * @param string|null $subGroup
     * @param float|null $employeeContributionCash
     * @param float|null $employerContributionCash
     * @param float|null $employeeContributionPercent
     * @param float|null $employerContributionPercent
     * @param float|null $lowerThreshold
     * @param float|null $upperThreshold
     * @param string|null $taxationMethod
     * @param int|null $contributionDeductionDay
     * @param bool|null $salarySacrifice
     * @param string|null $proRataMethod
     * @param string|null $roundingOption
     * @param bool|null $aeCompatible
     * @param bool|null $useAEThresholds
     * @param array|null $pensionablePayCodes
     * @param array|null $qualifyingPayCodes
     * @param MetaDataModel|null $metaData
     */
    public function __construct(
        ?int $effectiveDate = null,
        ?int $revision = null,
        ?string $code = null,
        ?string $schemeName = null,
        ?string $providerName = null,
        ?string $providerEmployerRef = null,
        ?string $group = null,
        ?string $subGroup = null,
        ?float $employeeContributionCash = null,
        ?float $employerContributionCash = null,
        ?float $employeeContributionPercent = null,
        ?float $employerContributionPercent = null,
        ?float $lowerThreshold = null,
        ?float $upperThreshold = null,
        ?string $taxationMethod = null,
        ?int $contributionDeductionDay = null,
        ?bool $salarySacrifice = null,
        ?string $proRataMethod = null,
        ?string $roundingOption = null,
        ?bool $aeCompatible = null,
        ?bool $useAEThresholds = null,
        ?array $pensionablePayCodes = null,
        ?array $qualifyingPayCodes = null,
        ?MetaDataModel $metaData = null
    ) {
        if ($effectiveDate) {
            $this->effectiveDate = $effectiveDate;
        }

        if ($revision) {
            $this->revision = $revision;
        }

        if ($code) {
            $this->code = $code;
        }

        if ($schemeName) {
            $this->schemeName = $schemeName;
        }

        if ($providerName) {
            $this->providerName = $providerName;
        }

        if ($providerEmployerRef) {
            $this->providerEmployerRef = $providerEmployerRef;
        }

        if ($group) {
            $this->group = $group;
        }

        if ($subGroup) {
            $this->subGroup = $subGroup;
        }

        if ($employeeContributionCash) {
            $this->employeeContributionCash = $employeeContributionCash;
        }

        if ($employerContributionCash) {
            $this->employerContributionCash = $employerContributionCash;
        }

        if ($employeeContributionPercent) {
            $this->employeeContributionPercent = $employeeContributionPercent;
        }

        if ($employerContributionPercent) {
            $this->employerContributionPercent = $employerContributionPercent;
        }

        if ($lowerThreshold) {
            $this->lowerThreshold = $lowerThreshold;
        }

        if ($upperThreshold) {
            $this->upperThreshold = $upperThreshold;
        }

        if ($taxationMethod) {
            $this->taxationMethod = $taxationMethod;
        }

        if ($contributionDeductionDay) {
            $this->contributionDeductionDay = $contributionDeductionDay;
        }

        if ($salarySacrifice) {
            $this->salarySacrifice = $salarySacrifice;
        }

        if ($proRataMethod) {
            $this->proRataMethod = $proRataMethod;
        }

        if ($roundingOption) {
            $this->roundingOption = $roundingOption;
        }

        if ($aeCompatible) {
            $this->aeCompatible = $aeCompatible;
        }

        if ($useAEThresholds) {
            $this->useAEThresholds = $useAEThresholds;
        }

        if ($pensionablePayCodes) {
            $this->pensionablePayCodes = $pensionablePayCodes;
        }

        if ($qualifyingPayCodes) {
            $this->qualifyingPayCodes = $qualifyingPayCodes;
        }

        if ($metaData) {
            $this->metaData = $metaData;
        }
    }

    /**
     * @param int $effectiveDate
     * @return PensionModel
     */
    public function setEffectiveDate(int $effectiveDate): PensionModel
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @param int $revision
     * @return PensionModel
     */
    public function setRevision(int $revision): PensionModel
    {
        $this->revision = $revision;
        return $this;
    }

    /**
     * @param string $code
     * @return PensionModel
     */
    public function setCode(string $code): PensionModel
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param string $schemeName
     * @return PensionModel
     */
    public function setSchemeName(string $schemeName): PensionModel
    {
        $this->schemeName = $schemeName;
        return $this;
    }

    /**
     * @param string $providerName
     * @return PensionModel
     */
    public function setProviderName(string $providerName): PensionModel
    {
        $this->providerName = $providerName;
        return $this;
    }

    /**
     * @param string $providerEmployerRef
     * @return PensionModel
     */
    public function setProviderEmployerRef(string $providerEmployerRef): PensionModel
    {
        $this->providerEmployerRef = $providerEmployerRef;
        return $this;
    }

    /**
     * @param string $group
     * @return PensionModel
     */
    public function setGroup(string $group): PensionModel
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @param string $subGroup
     * @return PensionModel
     */
    public function setSubGroup(string $subGroup): PensionModel
    {
        $this->subGroup = $subGroup;
        return $this;
    }

    /**
     * @param float $employeeContributionCash
     * @return PensionModel
     */
    public function setEmployeeContributionCash(float $employeeContributionCash): PensionModel
    {
        $this->employeeContributionCash = $employeeContributionCash;
        return $this;
    }

    /**
     * @param float $employerContributionCash
     * @return PensionModel
     */
    public function setEmployerContributionCash(float $employerContributionCash): PensionModel
    {
        $this->employerContributionCash = $employerContributionCash;
        return $this;
    }

    /**
     * @param float $employeeContributionPercent
     * @return PensionModel
     */
    public function setEmployeeContributionPercent(float $employeeContributionPercent): PensionModel
    {
        $this->employeeContributionPercent = $employeeContributionPercent;
        return $this;
    }

    /**
     * @param float $employerContributionPercent
     * @return PensionModel
     */
    public function setEmployerContributionPercent(float $employerContributionPercent): PensionModel
    {
        $this->employerContributionPercent = $employerContributionPercent;
        return $this;
    }

    /**
     * @param float $lowerThreshold
     * @return PensionModel
     */
    public function setLowerThreshold(float $lowerThreshold): PensionModel
    {
        $this->lowerThreshold = $lowerThreshold;
        return $this;
    }

    /**
     * @param float $upperThreshold
     * @return PensionModel
     */
    public function setUpperThreshold(float $upperThreshold): PensionModel
    {
        $this->upperThreshold = $upperThreshold;
        return $this;
    }

    /**
     * @param string $taxationMethod
     * @return PensionModel
     */
    public function setTaxationMethod(string $taxationMethod): PensionModel
    {
        $this->taxationMethod = $taxationMethod;
        return $this;
    }

    /**
     * @param int $contributionDeductionDay
     * @return PensionModel
     */
    public function setContributionDeductionDay(int $contributionDeductionDay): PensionModel
    {
        $this->contributionDeductionDay = $contributionDeductionDay;
        return $this;
    }

    /**
     * @param bool $salarySacrifice
     * @return PensionModel
     */
    public function setSalarySacrifice(bool $salarySacrifice): PensionModel
    {
        $this->salarySacrifice = $salarySacrifice;
        return $this;
    }

    /**
     * @param string $proRataMethod
     * @return PensionModel
     */
    public function setProRataMethod(string $proRataMethod): PensionModel
    {
        $this->proRataMethod = $proRataMethod;
        return $this;
    }

    /**
     * @param string $roundingOption
     * @return PensionModel
     */
    public function setRoundingOption(string $roundingOption): PensionModel
    {
        $this->roundingOption = $roundingOption;
        return $this;
    }

    /**
     * @param bool $aeCompatible
     * @return PensionModel
     */
    public function setAeCompatible(bool $aeCompatible): PensionModel
    {
        $this->aeCompatible = $aeCompatible;
        return $this;
    }

    /**
     * @param bool $useAEThresholds
     * @return PensionModel
     */
    public function setUseAEThresholds(bool $useAEThresholds): PensionModel
    {
        $this->useAEThresholds = $useAEThresholds;
        return $this;
    }

    /**
     * @param string[] $pensionablePayCodes
     * @return PensionModel
     */
    public function setPensionablePayCodes(array $pensionablePayCodes): PensionModel
    {
        $this->pensionablePayCodes = $pensionablePayCodes;
        return $this;
    }

    /**
     * @param string[] $qualifyingPayCodes
     * @return PensionModel
     */
    public function setQualifyingPayCodes(array $qualifyingPayCodes): PensionModel
    {
        $this->qualifyingPayCodes = $qualifyingPayCodes;
        return $this;
    }

    /**
     * @param MetaDataModel $metaData
     * @return PensionModel
     */
    public function setMetaData(MetaDataModel $metaData): PensionModel
    {
        $this->metaData = $metaData;
        return $this;
    }

    /**
     * @return int
     */
    public function getEffectiveDate(): int
    {
        return $this->effectiveDate;
    }

    /**
     * @return int
     */
    public function getRevision(): int
    {
        return $this->revision;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getSchemeName(): string
    {
        return $this->schemeName;
    }

    /**
     * @return string
     */
    public function getProviderName(): string
    {
        return $this->providerName;
    }

    /**
     * @return string
     */
    public function getProviderEmployerRef(): string
    {
        return $this->providerEmployerRef;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @return string
     */
    public function getSubGroup(): string
    {
        return $this->subGroup;
    }

    /**
     * @return float
     */
    public function getEmployeeContributionCash(): float
    {
        return $this->employeeContributionCash;
    }

    /**
     * @return float
     */
    public function getEmployerContributionCash(): float
    {
        return $this->employerContributionCash;
    }

    /**
     * @return float
     */
    public function getEmployeeContributionPercent(): float
    {
        return $this->employeeContributionPercent;
    }

    /**
     * @return float
     */
    public function getEmployerContributionPercent(): float
    {
        return $this->employerContributionPercent;
    }

    /**
     * @return float
     */
    public function getLowerThreshold(): float
    {
        return $this->lowerThreshold;
    }

    /**
     * @return float
     */
    public function getUpperThreshold(): float
    {
        return $this->upperThreshold;
    }

    /**
     * @return string
     */
    public function getTaxationMethod(): string
    {
        return $this->taxationMethod;
    }

    /**
     * @return int
     */
    public function getContributionDeductionDay(): int
    {
        return $this->contributionDeductionDay;
    }

    /**
     * @return bool
     */
    public function isSalarySacrifice(): bool
    {
        return $this->salarySacrifice;
    }

    /**
     * @return string
     */
    public function getProRataMethod(): string
    {
        return $this->proRataMethod;
    }

    /**
     * @return string
     */
    public function getRoundingOption(): string
    {
        return $this->roundingOption;
    }

    /**
     * @return bool
     */
    public function isAeCompatible(): bool
    {
        return $this->aeCompatible;
    }

    /**
     * @return bool
     */
    public function isUseAEThresholds(): bool
    {
        return $this->useAEThresholds;
    }

    /**
     * @return string[]
     */
    public function getPensionablePayCodes(): array
    {
        return $this->pensionablePayCodes;
    }

    /**
     * @return string[]
     */
    public function getQualifyingPayCodes(): array
    {
        return $this->qualifyingPayCodes;
    }

    /**
     * @return MetaDataModel
     */
    public function getMetaData(): MetaDataModel
    {
        return $this->metaData;
    }

    /**
     * @return array
     * @throws ModelException
     */
    public function format(): array
    {
        try {
            return [
                'EffectiveDate' => Date::formatDate($this->effectiveDate),
                'Revision' => $this->revision,
                'SchemeName' => $this->schemeName,
                'ProviderName' => $this->providerName,
                'ProviderEmployerRef' => $this->providerEmployerRef,
                'Group' => $this->group,
                'SubGroup' => $this->subGroup,
                'EmployeeContributionCash' => $this->employeeContributionCash,
                'EmployerContributionCash' => $this->employerContributionCash,
                'EmployeeContributionPercent' => $this->employeeContributionPercent,
                'EmployerContributionPercent' => $this->employerContributionPercent,
                'LowerThreshold' => $this->lowerThreshold,
                'UpperThreshold' => $this->upperThreshold,
                'TaxationMethod' => $this->taxationMethod,
                'Code' => $this->code,
                'ContributionDeductionDay' => $this->contributionDeductionDay,
                'SalarySacrifice' => $this->salarySacrifice ? 'true' : 'false',
                'ProRataMethod' => $this->proRataMethod,
                'RoundingOption' => $this->roundingOption,
                'AECompatible' => $this->aeCompatible ? 'true' : 'false',
                'UseAEThresholds' => $this->useAEThresholds ? 'true' : 'false',
                'PensionablePayCodes' => [
                    'PayCode' => $this->pensionablePayCodes,
                ],
                'QualifyingPayCodes' => [
                    'PayCode' => $this->qualifyingPayCodes,
                ],
                'MetaData' => $this->metaData->format(),
            ];
        } catch (ModelException $modelException) {
            throw $modelException;
        } catch (Exception $exception) {
            ExceptionHelper::handle($this);
        } catch (Error $error) {
            ExceptionHelper::handle($this);
        }
    }
}
