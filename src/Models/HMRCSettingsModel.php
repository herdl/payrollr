<?php

namespace B3none\PayRun\Models;

class HMRCSettingsModel
{
    /**
     * Between 100 and 999
     *
     * @var int
     */
    protected $taxOfficeNumber;

    /**
     * @var string
     */
    protected $taxOfficeReference;

    /**
     * @var string
     */
    protected $accountingOfficeRef;

    /**
     * Between 1000000000 and 9999999999
     *
     * @var int
     */
    protected $sautr;

    /**
     * Between 1000000000 and 9999999999
     *
     * @var int
     */
    protected $cotaxRef;

    /**
     * Individual, Company, Agent, Bureau, Partnership, Trust
     * Employer, Government, ActingInCapacity, Other
     *
     * @var string
     */
    protected $sender;

    /**
     * @var string
     */
    protected $senderId;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $contactFirstName;

    /**
     * @var string
     */
    protected $contactLastName;

    /**
     * @var string
     */
    protected $contactEmail;

    /**
     * @var string
     */
    protected $contactTelephone;

    /**
     * @var string
     */
    protected $contactFax;

    /**
     * @param int $taxOfficeNumber
     * @return HMRCSettingsModel
     */
    public function setTaxOfficeNumber(int $taxOfficeNumber): HMRCSettingsModel
    {
        $this->taxOfficeNumber = $taxOfficeNumber;
        return $this;
    }

    /**
     * @param string $taxOfficeReference
     * @return HMRCSettingsModel
     */
    public function setTaxOfficeReference(string $taxOfficeReference): HMRCSettingsModel
    {
        $this->taxOfficeReference = $taxOfficeReference;
        return $this;
    }

    /**
     * @param string $accountingOfficeRef
     * @return HMRCSettingsModel
     */
    public function setAccountingOfficeRef(string $accountingOfficeRef): HMRCSettingsModel
    {
        $this->accountingOfficeRef = $accountingOfficeRef;
        return $this;
    }

    /**
     * @param int $sautr
     * @return HMRCSettingsModel
     */
    public function setSautr(int $sautr): HMRCSettingsModel
    {
        $this->sautr = $sautr;
        return $this;
    }

    /**
     * @param int $cotaxRef
     * @return HMRCSettingsModel
     */
    public function setCotaxRef(int $cotaxRef): HMRCSettingsModel
    {
        $this->cotaxRef = $cotaxRef;
        return $this;
    }

    /**
     * @param string $sender
     * @return HMRCSettingsModel
     */
    public function setSender(string $sender): HMRCSettingsModel
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * @param string $senderId
     * @return HMRCSettingsModel
     */
    public function setSenderId(string $senderId): HMRCSettingsModel
    {
        $this->senderId = $senderId;
        return $this;
    }

    /**
     * @param string $password
     * @return HMRCSettingsModel
     */
    public function setPassword(string $password): HMRCSettingsModel
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @param string $contactFirstName
     * @return HMRCSettingsModel
     */
    public function setContactFirstName(string $contactFirstName): HMRCSettingsModel
    {
        $this->contactFirstName = $contactFirstName;
        return $this;
    }

    /**
     * @param string $contactLastName
     * @return HMRCSettingsModel
     */
    public function setContactLastName(string $contactLastName): HMRCSettingsModel
    {
        $this->contactLastName = $contactLastName;
        return $this;
    }

    /**
     * @param string $contactEmail
     * @return HMRCSettingsModel
     */
    public function setContactEmail(string $contactEmail): HMRCSettingsModel
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * @param string $contactTelephone
     * @return HMRCSettingsModel
     */
    public function setContactTelephone(string $contactTelephone): HMRCSettingsModel
    {
        $this->contactTelephone = $contactTelephone;
        return $this;
    }

    /**
     * @param string $contactFax
     * @return HMRCSettingsModel
     */
    public function setContactFax(string $contactFax): HMRCSettingsModel
    {
        $this->contactFax = $contactFax;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaxOfficeNumber(): int
    {
        return $this->taxOfficeNumber;
    }

    /**
     * @return string
     */
    public function getTaxOfficeReference(): string
    {
        return $this->taxOfficeReference;
    }

    /**
     * @return string
     */
    public function getAccountingOfficeRef(): string
    {
        return $this->accountingOfficeRef;
    }

    /**
     * @return int
     */
    public function getSautr(): int
    {
        return $this->sautr;
    }

    /**
     * @return int
     */
    public function getCotaxRef(): int
    {
        return $this->cotaxRef;
    }

    /**
     * @return string
     */
    public function getSender(): string
    {
        return $this->sender;
    }

    /**
     * @return string
     */
    public function getSenderId(): string
    {
        return $this->senderId;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getContactFirstName(): string
    {
        return $this->contactFirstName;
    }

    /**
     * @return string
     */
    public function getContactLastName(): string
    {
        return $this->contactLastName;
    }

    /**
     * @return string
     */
    public function getContactEmail(): string
    {
        return $this->contactEmail;
    }

    /**
     * @return string
     */
    public function getContactTelephone(): string
    {
        return $this->contactTelephone;
    }

    /**
     * @return string
     */
    public function getContactFax(): string
    {
        return $this->contactFax;
    }
}
