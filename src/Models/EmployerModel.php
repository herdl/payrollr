<?php

namespace B3none\PayRun\Models;

/**
 * https://developer.payrun.io/docs/reference/employer/index.html#employer
 */
class EmployerModel
{
    /**
     * Timestamp for the date the revision will come into effect.
     *
     * @var int
     */
    protected $effectiveDate;

    /**
     * The revision number of the employer; this is a readonly system generated value.
     *
     * @var int
     */
    protected $revision;

    /**
     * The legal name of the employer.
     *
     * @var string
     */
    protected $name;

    /**
     * The employer's region which determines the default calculators to be used.
     *
     * "NotSet", "England", "Scotland" or "Wales"
     *
     * @var string
     */
    protected $region;

    /**
     * The employer's territory which determines the default calculators to be used in all employee calculations.
     * Currently United Kingdom is the only supported territory.
     *
     * "UnitedKingdom"
     *
     * @var string
     */
    protected $territory;

    /**
     * The employer's unique identifier making payments through the BACS network.
     *
     * @var int
     */
    protected $bacsServiceUserNumber;

    /**
     * Indicates if the employer should claim the Employment Allowance See Claiming the Employment Allowance for more details.
     *
     * https://developer.payrun.io/docs/payroll-help/claiming-employment-allowance.html
     *
     * @var bool
     */
    protected $claimEmploymentAllowance;

    /**
     * Indicates if the employer should claim the Small Employer Relief See Claiming Small Employer Relief for more details.
     *
     * https://developer.payrun.io/docs/payroll-help/claiming-small-employer-relief.html
     *
     * @var bool
     */
    protected $claimSmallEmployerRelief;

    /**
     * The employer's annual levy allowance; The apprenticeship levy will only apply to employers with annual paybill in excess of £3 million.
     *
     * Between 0, 15000
     *
     * @var int
     */
    protected $apprenticeshipLevyAllowance;

    /**
     * The list of pre-claculation rules to exclude by default for all employees. See Pre-calculation rules for more information on how they work.
     *
     * https://developer.payrun.io/docs/key-concepts/pre-calculation-rules.html
     *
     * None, AutoEnrolmentStatusChangeRule, NiMissingPayInstructionRule, TaxMissingPayInstructionRule,
     * TaxCodeUpliftRule, NiSetExpectedLetterRule, NiDateOfBirthChangeRetrospectiveCRule,
     * NiDefermentStatusChangeRule, NiEndContractedOutTransferRule, PaymentAfterLeavingRule,
     * LeaverEndInstructionsRule, P45StudentLoanInstructionRule, P45TaxInstructionRule,
     * P45YtdTaxRule, YtdInstructionRule, TaxCodeRegionChangeRule, EmployeeDeceasedRule
     *
     * @var string
     */
    protected $ruleExclusions;

    /**
     * The employer's registered address.
     *
     * @var AddressModel
     */
    protected $address;

    /**
     * The employer's specific HMRC reference numbers and RTI credentials.
     *
     * @var HMRCSettingsModel
     */
    protected $hmrcSettings;

    /**
     * The employer's bank account; will be used as the originator account in any BACS reporting.
     *
     * @var BankAccountModel
     */
    protected $bankAccount;

    /**
     * The employer's auto enrolment details; controls the processing of auto enrolment assessments.
     *
     * @var EmployerAutoEnrolmentModel
     */
    protected $autoEnrolment;

    /**
     * The employers optional meta data collection.
     *
     * @var MetaDataModel
     */
    protected $metaData;

    /**
     * @param int $effectiveDate
     * @return EmployerModel
     */
    public function setEffectiveDate(int $effectiveDate): EmployerModel
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @param int $revision
     * @return EmployerModel
     */
    public function setRevision(int $revision): EmployerModel
    {
        $this->revision = $revision;
        return $this;
    }

    /**
     * @param string $name
     * @return EmployerModel
     */
    public function setName(string $name): EmployerModel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $region
     * @return EmployerModel
     */
    public function setRegion(string $region): EmployerModel
    {
        $this->region = $region;
        return $this;
    }
    /**
     * @param string $territory
     * @return EmployerModel
     */
    public function setTerritory(string $territory): EmployerModel
    {
        $this->territory = $territory;
        return $this;
    }

    /**
     * @param int $bacsServiceUserNumber
     * @return EmployerModel
     */
    public function setBacsServiceUserNumber(int $bacsServiceUserNumber): EmployerModel
    {
        $this->bacsServiceUserNumber = $bacsServiceUserNumber;
        return $this;
    }

    /**
     * @param bool $claimEmploymentAllowance
     * @return EmployerModel
     */
    public function setClaimEmploymentAllowance(bool $claimEmploymentAllowance): EmployerModel
    {
        $this->claimEmploymentAllowance = $claimEmploymentAllowance;
        return $this;
    }

    /**
     * @param bool $claimSmallEmployerRelief
     * @return EmployerModel
     */
    public function setClaimSmallEmployerRelief(bool $claimSmallEmployerRelief): EmployerModel
    {
        $this->claimSmallEmployerRelief = $claimSmallEmployerRelief;
        return $this;
    }

    /**
     * @param int $apprenticeshipLevyAllowance
     * @return EmployerModel
     */
    public function setApprenticeshipLevyAllowance(int $apprenticeshipLevyAllowance): EmployerModel
    {
        $this->apprenticeshipLevyAllowance = $apprenticeshipLevyAllowance;
        return $this;
    }

    /**
     * @param string $ruleExclusions
     * @return EmployerModel
     */
    public function setRuleExclusions(string $ruleExclusions): EmployerModel
    {
        $this->ruleExclusions = $ruleExclusions;
        return $this;
    }

    /**
     * @param AddressModel $address
     * @return EmployerModel
     */
    public function setAddress(AddressModel $address): EmployerModel
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param HMRCSettingsModel $hmrcSettings
     * @return EmployerModel
     */
    public function setHmrcSettings(HMRCSettingsModel $hmrcSettings): EmployerModel
    {
        $this->hmrcSettings = $hmrcSettings;
        return $this;
    }

    /**
     * @param BankAccountModel $bankAccount
     * @return EmployerModel
     */
    public function setBankAccount(BankAccountModel $bankAccount): EmployerModel
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @param EmployerAutoEnrolmentModel $autoEnrolment
     * @return EmployerModel
     */
    public function setAutoEnrolment(EmployerAutoEnrolmentModel $autoEnrolment): EmployerModel
    {
        $this->autoEnrolment = $autoEnrolment;
        return $this;
    }

    /**
     * @param MetaDataModel $metaData
     * @return EmployerModel
     */
    public function setMetaData(MetaDataModel $metaData): EmployerModel
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getTerritory(): string
    {
        return $this->territory;
    }

    /**
     * @return int
     */
    public function getBacsServiceUserNumber(): int
    {
        return $this->bacsServiceUserNumber;
    }

    /**
     * @return bool
     */
    public function isClaimEmploymentAllowance(): bool
    {
        return $this->claimEmploymentAllowance;
    }

    /**
     * @return bool
     */
    public function isClaimSmallEmployerRelief(): bool
    {
        return $this->claimSmallEmployerRelief;
    }

    /**
     * @return int
     */
    public function getApprenticeshipLevyAllowance(): int
    {
        return $this->apprenticeshipLevyAllowance;
    }

    /**
     * @return string
     */
    public function getRuleExclusions(): string
    {
        return $this->ruleExclusions;
    }

    /**
     * @return AddressModel
     */
    public function getAddress(): AddressModel
    {
        return $this->address;
    }

    /**
     * @return HMRCSettingsModel
     */
    public function getHmrcSettings(): HMRCSettingsModel
    {
        return $this->hmrcSettings;
    }

    /**
     * @return BankAccountModel
     */
    public function getBankAccount(): BankAccountModel
    {
        return $this->bankAccount;
    }

    /**
     * @return EmployerAutoEnrolmentModel
     */
    public function getAutoEnrolment(): EmployerAutoEnrolmentModel
    {
        return $this->autoEnrolment;
    }

    /**
     * @return MetaDataModel
     */
    public function getMetaData(): MetaDataModel
    {
        return $this->metaData;
    }
}
