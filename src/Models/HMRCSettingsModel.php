<?php

namespace Herdl\PayRun\Models;

use Error;
use Exception;
use Herdl\PayRun\Exceptions\ModelException;
use Herdl\PayRun\Helpers\ExceptionHelper;

/**
 * https://developer.payrun.io/docs/reference/employer/index.html#hmrc-settings
 */
class HMRCSettingsModel
{
    /**
     * The Tax Office Number is the first part of your employer's PAYE reference issued by HMRC; it consists of 3 numbers.
     * Required to make RTI submissions.
     *
     * @var int
     */
    protected $taxOfficeNumber;

    /**
     * The Tax Office Reference is the second part of your employer's PAYE reference issued by HMRC; it consists of up to 10 apha-numeric characters.
     * Required to make RTI submissions.
     *
     * @var string
     */
    protected $taxOfficeReference;

    /**
     * The Accounting Office Reference is issued by HMRC; typically it is found on employer's P30BC Employer Payment Booklet.
     * Required to make RTI submissions.
     *
     * @var string
     */
    protected $accountingOfficeRef;

    /**
     * The Self Assessment Unique Tax reference; only applicable to sole proprietors or partnerships.
     *
     * @var int
     */
    protected $sautr;

    /**
     * The Corporation Tax reference; applicable to limited companies.
     *
     * @var int
     */
    protected $cotaxRef;

    /**
     * The entity type that is making the RTI submission on behalf of the employer. Required to make RTI submissions.
     *
     * Individual, Company, Agent, Bureau, Partnership, Trust
     * Employer, Government, ActingInCapacity, Other
     *
     * @var string
     */
    protected $sender;

    /**
     * The government gateway username issued to the employer by HMRC. Required to make RTI submissions.
     *
     * @var string
     */
    protected $senderId;

    /**
     * The government gateway password issued to the employer by HMRC. Required to make RTI submissions.
     *
     * @var string
     */
    protected $password;

    /**
     * The designated HMRC contact person's first name.
     *
     * @var string
     */
    protected $contactFirstName;

    /**
     * The designated HMRC contact person's last name.
     *
     * @var string
     */
    protected $contactLastName;

    /**
     * The designated HMRC contact person's email address; RTI submission acknowledgements will be sent to this address.
     *
     * @var string
     */
    protected $contactEmail;

    /**
     * The designated HMRC contact person's telephone number.
     *
     * @var string
     */
    protected $contactTelephone;

    /**
     * The designated HMRC contact person's fax number.
     *
     * @var string
     */
    protected $contactFax;

    public function __construct(
        ?int $taxOfficeNumber = null,
        ?string $taxOfficeReference = null,
        ?string $accountingOfficeRef = null,
        ?int $sautr = null,
        ?int $cotaxRef = null,
        ?string $sender = null,
        ?string $senderId = null,
        ?string $password = null,
        ?string $contactFirstName = null,
        ?string $contactLastName = null,
        ?string $contactEmail = null,
        ?string $contactTelephone = null,
        ?string $contactFax = null
    ) {
        if ($taxOfficeNumber) {
            $this->taxOfficeNumber = $taxOfficeNumber;
        }

        if ($taxOfficeReference) {
            $this->taxOfficeReference = $taxOfficeReference;
        }

        if ($accountingOfficeRef) {
            $this->accountingOfficeRef = $accountingOfficeRef;
        }

        if ($sautr) {
            $this->sautr = $sautr;
        }

        if ($cotaxRef) {
            $this->cotaxRef = $cotaxRef;
        }

        if ($sender) {
            $this->sender = $sender;
        }

        if ($senderId) {
            $this->senderId = $senderId;
        }

        if ($password) {
            $this->password = $password;
        }

        if ($contactFirstName) {
            $this->contactFirstName = $contactFirstName;
        }

        if ($contactLastName) {
            $this->contactLastName = $contactLastName;
        }

        if ($contactEmail) {
            $this->contactEmail = $contactEmail;
        }

        if ($contactTelephone) {
            $this->contactTelephone = $contactTelephone;
        }

        if ($contactFax) {
            $this->contactFax = $contactFax;
        }
    }

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

    /**
     * @return array
     * @throws ModelException
     */
    public function format(): array
    {
        try {
            return [
                'TaxOfficeNumber' => $this->taxOfficeNumber,
                'TaxOfficeReference' => $this->taxOfficeReference,
                'AccountingOfficeRef' => $this->accountingOfficeRef,
                'SAUTR' => $this->sautr,
                'COTAXRef' => $this->cotaxRef,
                'Sender' => $this->sender,
                'SenderId' => $this->senderId,
                'Password' => $this->password,
                'ContactFirstName' => $this->contactFirstName,
                'ContactLastName' => $this->contactLastName,
                'ContactEmail' => $this->contactEmail,
                'ContactTelephone' => $this->contactTelephone,
                'ContactFax' => $this->contactFax,
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
