<?php

namespace B3none\PayRun\Models;

class EmployerModel
{
    /**
     * @var int
     */
    protected $effectiveDate;

    /**
     * @var int
     */
    protected $revision;

    /**
     * @var string
     */
    protected $name;

    /**
     * "NotSet", "England", "Scotland" or "Wales"
     *
     * @var string
     */
    protected $region;

    /**
     * "UnitedKingdom"
     *
     * @var string
     */
    protected $territory;

    /**
     * @var int
     */
    protected $bacsServiceUserNumber;

    /**
     * @var bool
     */
    protected $claimEmploymentAllowance;

    /**
     * @var bool
     */
    protected $claimSmallEmployerRelief;

    /**
     * Between 0, 15000
     *
     * @var int
     */
    protected $apprenticeshipLevyAllowance;

    /**
     * None|AutoEnrolmentStatusChangeRule|NiMissingPayInstructionRule|TaxMissingPayInstructionRule|TaxCodeUpliftRule|NiSetExpectedLetterRule|NiDateOfBirthChangeRetrospectiveCRule|NiDefermentStatusChangeRule|NiEndContractedOutTransferRule|PaymentAfterLeavingRule|LeaverEndInstructionsRule|P45StudentLoanInstructionRule|P45TaxInstructionRule|P45YtdTaxRule|YtdInstructionRule|TaxCodeRegionChangeRule|EmployeeDeceasedRule
     *
     * @var string
     */
    protected $ruleExclusions;

    /**
     * @var AddressModel
     */
    protected $address;

    /**
     * @var HMRCSettingsModel
     */
    protected $hmrcSettings;

    /**
     * @var BankAccountModel
     */
    protected $bankAccount;

    /**
     * @var EmployerAutoEnrolmentModel
     */
    protected $autoEnrolment;

    /**
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
