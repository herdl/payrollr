<?php

namespace Herdl\PayRun\Models;

use Error;
use Exception;
use Herdl\PayRun\Exceptions\ModelException;
use Herdl\PayRun\Helpers\ExceptionHelper;

/**
 * https://developer.payrun.io/docs/reference/employee/index.html#employee
 */
class EmployeeModel
{
    /**
     * A timestamp for the date the revision will come into effect.
     *
     * @var int
     */
    protected $effectiveDate;

    /**
     * The revision number of the employee; this is a readonly system generated value.
     *
     * @var int
     */
    protected $revision;

    /**
     * The employee's unique code also known as the payroll Id The code must be unique to Employer and never reused.
     *
     * @var string
     */
    protected $code;

    /**
     * The employee's formal title.
     *
     * @var string
     */
    protected $title;

    /**
     * The employee's first name.
     *
     * @var string
     */
    protected $firstName;

    /**
     * The employee's middle name(s) (if any).
     *
     * @var string
     */
    protected $middleName;

    /**
     * The employee's initial, if not supplying a first name.
     *
     * @var string
     */
    protected $initials;

    /**
     * The employee's last name or surname.
     *
     * @var string
     */
    protected $lastName;

    /**
     * The employee's National Insurance number issued by HMRC.
     * Temporary NI numbers should no longer be used for payroll
     *
     * @var string
     */
    protected $niNumber;

    /**
     * A timestamp for the employee's date of birth.
     * The correct date of birth will ensure the correct NI letter is assigned.
     *
     * @var int
     */
    protected $dateOfBirth;

    /**
     * A timestamp for the date the directorship appointment started.
     *
     * @var int
     */
    protected $directorshipAppointmentDate;

    /**
     * The employee's current gender.
     *
     * @var string
     */
    protected $gender;

    /**
     * The NIC liability flags are used to ensure the correct NI letter is assigned.
     * See Using the correct NI letter code for more information on setting the correct NIC liability flags.
     *
     * https://developer.payrun.io/docs/payroll-help/using-the-correct-ni-letter.html
     *
     * IsFullyLiable, HasOtherJob, IsFemaleEntitledToReducedRate, IsNotLiable, IsContractedOut,
     * IsApprentice, LeaverBeyond6Weeks, PaymentAfterLeaving
     *
     * @var string
     */
    protected $nicLiability;

    /**
     * The employee's region which determines the correct calculators to be used.
     *
     * @var string
     */
    protected $region;

    /**
     * The employee's territory which determines the correct calculators to be used.
     * Currently United Kingdom is the only supported territory.
     *
     * @var string
     */
    protected $territory;

    /**
     * A link to the Pay Schedule resource that the employee is assigned to.
     *
     * @var LinkModel
     */
    protected $paySchedule;

    /**
     * A timestamp for the commencement date of the employee's employment.
     *
     * @var int
     */
    protected $startDate;

    /**
     * The declaration made by the employee. Required for FPS reporting to HMRC.
     * Must be set if specifying the employee start date.
     *
     * @var string
     */
    protected $starterDeclaration;

    /**
     * A timestamp for the date the employee leaves the employment.
     *
     * @var int
     */
    protected $leavingDate;

    /**
     * The reason the employee leaves the employment.
     *
     * Resigned, Dismissed, Redundant, Retired, Deceased, LegalCustody, Other
     *
     * @var string
     */
    protected $leaverReason;

    /**
     * The list of pre-calculation rules to exclude. See Pre-calculation rules for more information on how they work.
     *
     * https://developer.payrun.io/docs/key-concepts/pre-calculation-rules.html
     *
     * @var string
     */
    protected $ruleExclusions;

    /**
     * The employee's normal working week pattern.
     *
     * @var string
     */
    protected $workingWeek;

    /**
     * The employee's home address.
     *
     * @var AddressModel
     */
    protected $address;

    /**
     * The employee's normal number of hours worked per week (irrespective of pay frequency).
     *
     * @var float
     */
    protected $hoursPerWeek;

    /**
     * The employee's UK passport number (if applicable).
     *
     * @var int
     */
    protected $passportNumber;

    /**
     * Indicates if the employee is on secondment from abroad.
     *
     * @var string
     */
    protected $seconded;

    /**
     * Indicates if the employee is an agency worker.
     *
     * @var bool
     */
    protected $isAgencyWorker;

    /**
     * Indicates if the seconded employee is a citizen of the European Economic Area.
     *
     * @var bool
     */
    protected $eeaCitizen;

    /**
     * Indicates if the seconded employee is under an EPM6 (Modified) Scheme for tax equalised expatriate employees.
     *
     * @var bool
     */
    protected $epm6;

    /**
     * Indicates where payments are made to a body, such as personal representative, trustee or corporate organisation.
     *
     * @var bool
     */
    protected $paymentToANonIndividual;

    /**
     * Indicates if the employee is paid on an irregular basis.
     *
     * @var bool
     */
    protected $irregularEmployment;

    /**
     * Indicates if the employee's pay in this pay period has been reduced due to being on strike.
     *
     * @var bool
     */
    protected $onStrike;

    /**
     * The employee's preferred payment method.
     *
     * NotSet, Cash, Cheque, BACS
     *
     * @var string
     */
    protected $paymentMethod;

    /**
     * The employee's marital status.
     *
     * NotSet, Single, Married, Divorced, Widowed
     *
     * @var string
     */
    protected $maritalStatus;

    /**
     * The employee's bank account details; used for BACS payments.
     *
     * @var BankAccountModel
     */
    protected $bankAccount;

    /**
     * The employee's partner details; used when paying ShPP
     *
     * @var EmployeePartnerModel
     */
    protected $employeePartner;

    /**
     * The auto enrolment assessment override value.
     * Enables the auto enrolment assessment result to be overridden
     *
     * None, OptOut, OptIn, VoluntaryJoiner, ContractualPension, CeasedMembership, Leaver, Excluded
     *
     * @var string
     */
    protected $aeAssessmentOverride;

    /**
     * A timestamp for the auto enrolment assessment override date.
     * Determines the date when auto enrolment assessment override applies.
     *
     * @var int
     */
    protected $aeAssessmentOverrideDate;

    /**
     * A timestamp for the auto enrolment deferment date.
     * Indicates the date when auto enrolment assessments are deferred to.
     *
     * @var int
     */
    protected $aePostponementDate;

    /**
     * The auto enrolment exclusion reason code for why a worker is not obligated to run under normal AE conditions.
     *
     * OtherNotKnown, NotAWorker, NotUKWorker, TemporaryUKWorker, OutsideAgeRange, SingleEmployeeDirector,
     * CeasedMembershipWithin12Months, CeasedMembershipBeyond12Months, WorkerWULSWithin12Month, WorkerWULSBeyond12Month
     * WorkerInNoticePeriod, WorkerTaxProtection
     *
     * @var string
     */
    protected $aeExclusionReasonCode;

    /**
     * Indicates if the employee is deactivated. Deactivated employees cannot be included in a pay run.
     *
     * @var bool
     */
    protected $deactivated;

    /**
     * The employees optional meta data collection.
     *
     * @var MetaDataModel
     */
    protected $metaData;

    /**
     * EmployeeModel constructor.
     *
     * @param int|null $effectiveDate
     * @param int|null $revision
     * @param string|null $code
     * @param string|null $title
     * @param string|null $firstName
     * @param string|null $middleName
     * @param string|null $initials
     * @param string|null $lastName
     * @param string|null $niNumber
     * @param int|null $dateOfBirth
     * @param int|null $directorshipAppointmentDate
     * @param string|null $gender
     * @param string|null $nicLiability
     * @param string|null $region
     * @param string|null $territory
     * @param LinkModel|null $paySchedule
     * @param int|null $startDate
     * @param string|null $starterDeclaration
     * @param int|null $leavingDate
     * @param string|null $leaverReason
     * @param string|null $ruleExclusions
     * @param string|null $workingWeek
     * @param string|null $address
     * @param float|null $hoursPerWeek
     * @param int|null $passportNumber
     * @param string|null $seconded
     * @param bool|null $isAgencyWorker
     * @param bool|null $eeaCitizen
     * @param bool|null $epm6
     * @param bool|null $paymentToANonIndividual
     * @param bool|null $irregularEmployment
     * @param bool|null $onStrike
     * @param string|null $paymentMethod
     * @param string|null $maritalStatus
     * @param BankAccountModel|null $bankAccount
     * @param EmployeePartnerModel|null $employeePartner
     * @param string|null $aeAssessmentOverride
     * @param int|null $aeAssessmentOverrideDate
     * @param int|null $aePostponementDate
     * @param string|null $aeExclusionReasonCode
     * @param bool|null $deactivated
     * @param MetaDataModel|null $metaData
     */
    public function __construct(
        ?int $effectiveDate = null,
        ?int $revision = null,
        ?string $code = null,
        ?string $title = null,
        ?string $firstName = null,
        ?string $middleName = null,
        ?string $initials = null,
        ?string $lastName = null,
        ?string $niNumber = null,
        ?int $dateOfBirth = null,
        ?int $directorshipAppointmentDate = null,
        ?string $gender = null,
        ?string $nicLiability = null,
        ?string $region = null,
        ?string $territory = null,
        ?LinkModel $paySchedule = null,
        ?int $startDate = null,
        ?string $starterDeclaration = null,
        ?int $leavingDate = null,
        ?string $leaverReason = null,
        ?string $ruleExclusions = null,
        ?string $workingWeek = null,
        ?string $address = null,
        ?float $hoursPerWeek = null,
        ?int $passportNumber = null,
        ?string $seconded = null,
        ?bool $isAgencyWorker = null,
        ?bool $eeaCitizen = null,
        ?bool $epm6 = null,
        ?bool $paymentToANonIndividual = null,
        ?bool $irregularEmployment = null,
        ?bool $onStrike = null,
        ?string $paymentMethod = null,
        ?string $maritalStatus = null,
        ?BankAccountModel $bankAccount = null,
        ?EmployeePartnerModel $employeePartner = null,
        ?string $aeAssessmentOverride = null,
        ?int $aeAssessmentOverrideDate = null,
        ?int $aePostponementDate = null,
        ?string $aeExclusionReasonCode = null,
        ?bool $deactivated = null,
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

        if ($title) {
            $this->title = $title;
        }

        if ($firstName) {
            $this->firstName = $firstName;
        }

        if ($middleName) {
            $this->middleName = $middleName;
        }

        if ($initials) {
            $this->initials = $initials;
        }

        if ($lastName) {
            $this->lastName = $lastName;
        }

        if ($niNumber) {
            $this->niNumber = $niNumber;
        }

        if ($dateOfBirth) {
            $this->dateOfBirth = $dateOfBirth;
        }

        if ($directorshipAppointmentDate) {
            $this->directorshipAppointmentDate = $directorshipAppointmentDate;
        }

        if ($gender) {
            $this->gender = $gender;
        }

        if ($nicLiability) {
            $this->nicLiability = $nicLiability;
        }

        if ($region) {
            $this->region = $region;
        }

        if ($territory) {
            $this->territory = $territory;
        }

        if ($paySchedule) {
            $this->paySchedule = $paySchedule;
        }

        if ($startDate) {
            $this->startDate = $startDate;
        }

        if ($starterDeclaration) {
            $this->starterDeclaration = $starterDeclaration;
        }

        if ($leavingDate) {
            $this->leavingDate = $leavingDate;
        }

        if ($leaverReason) {
            $this->leaverReason = $leaverReason;
        }

        if ($ruleExclusions) {
            $this->ruleExclusions = $ruleExclusions;
        }

        if ($workingWeek) {
            $this->workingWeek = $workingWeek;
        }

        if ($address) {
            $this->address = $address;
        }

        if ($hoursPerWeek) {
            $this->hoursPerWeek = $hoursPerWeek;
        }

        if ($passportNumber) {
            $this->passportNumber = $passportNumber;
        }

        if ($seconded) {
            $this->seconded = $seconded;
        }

        if ($isAgencyWorker) {
            $this->isAgencyWorker = $isAgencyWorker;
        }

        if ($eeaCitizen) {
            $this->eeaCitizen = $eeaCitizen;
        }

        if ($epm6) {
            $this->epm6 = $epm6;
        }

        if ($paymentToANonIndividual) {
            $this->paymentToANonIndividual = $paymentToANonIndividual;
        }

        if ($irregularEmployment) {
            $this->irregularEmployment = $irregularEmployment;
        }

        if ($onStrike) {
            $this->onStrike = $onStrike;
        }

        if ($paymentMethod) {
            $this->paymentMethod = $paymentMethod;
        }

        if ($maritalStatus) {
            $this->maritalStatus = $maritalStatus;
        }

        if ($bankAccount) {
            $this->bankAccount = $bankAccount;
        }

        if ($employeePartner) {
            $this->employeePartner = $employeePartner;
        }

        if ($aeAssessmentOverride) {
            $this->aeAssessmentOverride = $aeAssessmentOverride;
        }

        if ($aeAssessmentOverrideDate) {
            $this->aeAssessmentOverrideDate = $aeAssessmentOverrideDate;
        }

        if ($aePostponementDate) {
            $this->aePostponementDate = $aePostponementDate;
        }

        if ($aeExclusionReasonCode) {
            $this->aeExclusionReasonCode = $aeExclusionReasonCode;
        }

        if ($deactivated) {
            $this->deactivated = $deactivated;
        }

        if ($metaData) {
            $this->metaData = $metaData;
        }
    }

    /**
     * @param int $effectiveDate
     * @return EmployeeModel
     */
    public function setEffectiveDate(int $effectiveDate): EmployeeModel
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @param int $revision
     * @return EmployeeModel
     */
    public function setRevision(int $revision): EmployeeModel
    {
        $this->revision = $revision;
        return $this;
    }

    /**
     * @param string $code
     * @return EmployeeModel
     */
    public function setCode(string $code): EmployeeModel
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param string $title
     * @return EmployeeModel
     */
    public function setTitle(string $title): EmployeeModel
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $firstName
     * @return EmployeeModel
     */
    public function setFirstName(string $firstName): EmployeeModel
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @param string $middleName
     * @return EmployeeModel
     */
    public function setMiddleName(string $middleName): EmployeeModel
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * @param string $initials
     * @return EmployeeModel
     */
    public function setInitials(string $initials): EmployeeModel
    {
        $this->initials = $initials;
        return $this;
    }

    /**
     * @param string $lastName
     * @return EmployeeModel
     */
    public function setLastName(string $lastName): EmployeeModel
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @param string $niNumber
     * @return EmployeeModel
     */
    public function setNiNumber(string $niNumber): EmployeeModel
    {
        $this->niNumber = $niNumber;
        return $this;
    }

    /**
     * @param int $dateOfBirth
     * @return EmployeeModel
     */
    public function setDateOfBirth(int $dateOfBirth): EmployeeModel
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    /**
     * @param int $directorshipAppointmentDate
     * @return EmployeeModel
     */
    public function setDirectorshipAppointmentDate(int $directorshipAppointmentDate): EmployeeModel
    {
        $this->directorshipAppointmentDate = $directorshipAppointmentDate;
        return $this;
    }

    /**
     * @param string $gender
     * @return EmployeeModel
     */
    public function setGender(string $gender): EmployeeModel
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @param string $nicLiability
     * @return EmployeeModel
     */
    public function setNicLiability(string $nicLiability): EmployeeModel
    {
        $this->nicLiability = $nicLiability;
        return $this;
    }

    /**
     * @param string $region
     * @return EmployeeModel
     */
    public function setRegion(string $region): EmployeeModel
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @param string $territory
     * @return EmployeeModel
     */
    public function setTerritory(string $territory): EmployeeModel
    {
        $this->territory = $territory;
        return $this;
    }

    /**
     * @param LinkModel $paySchedule
     * @return EmployeeModel
     */
    public function setPaySchedule(LinkModel $paySchedule): EmployeeModel
    {
        $this->paySchedule = $paySchedule;
        return $this;
    }

    /**
     * @param int $startDate
     * @return EmployeeModel
     */
    public function setStartDate(int $startDate): EmployeeModel
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @param string $starterDeclaration
     * @return EmployeeModel
     */
    public function setStarterDeclaration(string $starterDeclaration): EmployeeModel
    {
        $this->starterDeclaration = $starterDeclaration;
        return $this;
    }

    /**
     * @param int $leavingDate
     * @return EmployeeModel
     */
    public function setLeavingDate(int $leavingDate): EmployeeModel
    {
        $this->leavingDate = $leavingDate;
        return $this;
    }

    /**
     * @param string $leaverReason
     * @return EmployeeModel
     */
    public function setLeaverReason(string $leaverReason): EmployeeModel
    {
        $this->leaverReason = $leaverReason;
        return $this;
    }

    /**
     * @param string $ruleExclusions
     * @return EmployeeModel
     */
    public function setRuleExclusions(string $ruleExclusions): EmployeeModel
    {
        $this->ruleExclusions = $ruleExclusions;
        return $this;
    }

    /**
     * @param string $workingWeek
     * @return EmployeeModel
     */
    public function setWorkingWeek(string $workingWeek): EmployeeModel
    {
        $this->workingWeek = $workingWeek;
        return $this;
    }

    /**
     * @param AddressModel $address
     * @return EmployeeModel
     */
    public function setAddress(AddressModel $address): EmployeeModel
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param float $hoursPerWeek
     * @return EmployeeModel
     */
    public function setHoursPerWeek(float $hoursPerWeek): EmployeeModel
    {
        $this->hoursPerWeek = $hoursPerWeek;
        return $this;
    }

    /**
     * @param int $passportNumber
     * @return EmployeeModel
     */
    public function setPassportNumber(int $passportNumber): EmployeeModel
    {
        $this->passportNumber = $passportNumber;
        return $this;
    }

    /**
     * @param string $seconded
     * @return EmployeeModel
     */
    public function setSeconded(string $seconded): EmployeeModel
    {
        $this->seconded = $seconded;
        return $this;
    }

    /**
     * @param bool $isAgencyWorker
     * @return EmployeeModel
     */
    public function setIsAgencyWorker(bool $isAgencyWorker): EmployeeModel
    {
        $this->isAgencyWorker = $isAgencyWorker;
        return $this;
    }

    /**
     * @param bool $eeaCitizen
     * @return EmployeeModel
     */
    public function setEeaCitizen(bool $eeaCitizen): EmployeeModel
    {
        $this->eeaCitizen = $eeaCitizen;
        return $this;
    }

    /**
     * @param bool $epm6
     * @return EmployeeModel
     */
    public function setEpm6(bool $epm6): EmployeeModel
    {
        $this->epm6 = $epm6;
        return $this;
    }

    /**
     * @param bool $paymentToANonIndividual
     * @return EmployeeModel
     */
    public function setPaymentToANonIndividual(bool $paymentToANonIndividual): EmployeeModel
    {
        $this->paymentToANonIndividual = $paymentToANonIndividual;
        return $this;
    }

    /**
     * @param bool $irregularEmployment
     * @return EmployeeModel
     */
    public function setIrregularEmployment(bool $irregularEmployment): EmployeeModel
    {
        $this->irregularEmployment = $irregularEmployment;
        return $this;
    }

    /**
     * @param bool $onStrike
     * @return EmployeeModel
     */
    public function setOnStrike(bool $onStrike): EmployeeModel
    {
        $this->onStrike = $onStrike;
        return $this;
    }

    /**
     * @param string $paymentMethod
     * @return EmployeeModel
     */
    public function setPaymentMethod(string $paymentMethod): EmployeeModel
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @param string $maritalStatus
     * @return EmployeeModel
     */
    public function setMaritalStatus(string $maritalStatus): EmployeeModel
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * @param BankAccountModel $bankAccount
     * @return EmployeeModel
     */
    public function setBankAccount(BankAccountModel $bankAccount): EmployeeModel
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @param EmployeePartnerModel $employeePartner
     * @return EmployeeModel
     */
    public function setEmployeePartner(EmployeePartnerModel $employeePartner): EmployeeModel
    {
        $this->employeePartner = $employeePartner;
        return $this;
    }

    /**
     * @param string $aeAssessmentOverride
     * @return EmployeeModel
     */
    public function setAeAssessmentOverride(string $aeAssessmentOverride): EmployeeModel
    {
        $this->aeAssessmentOverride = $aeAssessmentOverride;
        return $this;
    }

    /**
     * @param int $aeAssessmentOverrideDate
     * @return EmployeeModel
     */
    public function setAeAssessmentOverrideDate(int $aeAssessmentOverrideDate): EmployeeModel
    {
        $this->aeAssessmentOverrideDate = $aeAssessmentOverrideDate;
        return $this;
    }

    /**
     * @param int $aePostponementDate
     * @return EmployeeModel
     */
    public function setAePostponementDate(int $aePostponementDate): EmployeeModel
    {
        $this->aePostponementDate = $aePostponementDate;
        return $this;
    }

    /**
     * @param string $aeExclusionReasonCode
     * @return EmployeeModel
     */
    public function setAeExclusionReasonCode(string $aeExclusionReasonCode): EmployeeModel
    {
        $this->aeExclusionReasonCode = $aeExclusionReasonCode;
        return $this;
    }

    /**
     * @param bool $deactivated
     * @return EmployeeModel
     */
    public function setDeactivated(bool $deactivated): EmployeeModel
    {
        $this->deactivated = $deactivated;
        return $this;
    }

    /**
     * @param MetaDataModel $metaData
     * @return EmployeeModel
     */
    public function setMetaData(MetaDataModel $metaData): EmployeeModel
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    /**
     * @return string
     */
    public function getInitials(): string
    {
        return $this->initials;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getNiNumber(): string
    {
        return $this->niNumber;
    }

    /**
     * @return int
     */
    public function getDateOfBirth(): int
    {
        return $this->dateOfBirth;
    }

    /**
     * @return int
     */
    public function getDirectorshipAppointmentDate(): int
    {
        return $this->directorshipAppointmentDate;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getNicLiability(): string
    {
        return $this->nicLiability;
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
     * @return LinkModel
     */
    public function getPaySchedule(): LinkModel
    {
        return $this->paySchedule;
    }

    /**
     * @return int
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }

    /**
     * @return string
     */
    public function getStarterDeclaration(): string
    {
        return $this->starterDeclaration;
    }

    /**
     * @return int
     */
    public function getLeavingDate(): int
    {
        return $this->leavingDate;
    }

    /**
     * @return string
     */
    public function getLeaverReason(): string
    {
        return $this->leaverReason;
    }

    /**
     * @return string
     */
    public function getRuleExclusions(): string
    {
        return $this->ruleExclusions;
    }

    /**
     * @return string
     */
    public function getWorkingWeek(): string
    {
        return $this->workingWeek;
    }

    /**
     * @return AddressModel
     */
    public function getAddress(): AddressModel
    {
        return $this->address;
    }

    /**
     * @return float
     */
    public function getHoursPerWeek(): float
    {
        return $this->hoursPerWeek;
    }

    /**
     * @return int
     */
    public function getPassportNumber(): int
    {
        return $this->passportNumber;
    }

    /**
     * @return string
     */
    public function getSeconded(): string
    {
        return $this->seconded;
    }

    /**
     * @return bool
     */
    public function isAgencyWorker(): bool
    {
        return $this->isAgencyWorker;
    }

    /**
     * @return bool
     */
    public function isEeaCitizen(): bool
    {
        return $this->eeaCitizen;
    }

    /**
     * @return bool
     */
    public function isEpm6(): bool
    {
        return $this->epm6;
    }

    /**
     * @return bool
     */
    public function isPaymentToANonIndividual(): bool
    {
        return $this->paymentToANonIndividual;
    }

    /**
     * @return bool
     */
    public function isIrregularEmployment(): bool
    {
        return $this->irregularEmployment;
    }

    /**
     * @return bool
     */
    public function isOnStrike(): bool
    {
        return $this->onStrike;
    }

    /**
     * @return string
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    /**
     * @return string
     */
    public function getMaritalStatus(): string
    {
        return $this->maritalStatus;
    }

    /**
     * @return BankAccountModel
     */
    public function getBankAccount(): BankAccountModel
    {
        return $this->bankAccount;
    }

    /**
     * @return EmployeePartnerModel
     */
    public function getEmployeePartner(): EmployeePartnerModel
    {
        return $this->employeePartner;
    }

    /**
     * @return string
     */
    public function getAeAssessmentOverride(): string
    {
        return $this->aeAssessmentOverride;
    }

    /**
     * @return int
     */
    public function getAeAssessmentOverrideDate(): int
    {
        return $this->aeAssessmentOverrideDate;
    }

    /**
     * @return int
     */
    public function getAePostponementDate(): int
    {
        return $this->aePostponementDate;
    }

    /**
     * @return string
     */
    public function getAeExclusionReasonCode(): string
    {
        return $this->aeExclusionReasonCode;
    }

    /**
     * @return bool
     */
    public function isDeactivated(): bool
    {
        return $this->deactivated;
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
                'Code' => $this->code,
                'Title' => $this->title,
                'FirstName' => $this->firstName,
                'MiddleName' => $this->middleName,
                'Initials' => $this->initials,
                'LastName' => $this->lastName,
                'NiNumber' => $this->niNumber,
                'DateOfBirth' => Date::formatDate($this->dateOfBirth),
                'DirectorshipAppointmentDate' => Date::formatDate($this->directorshipAppointmentDate),
                'Gender' => $this->gender,
                'NicLiability' => $this->nicLiability,
                'Region' => $this->region,
                'Territory' => $this->territory,
                'PaySchedule' => $this->paySchedule->format(),
                'StartDate' => Date::formatDate($this->startDate),
                'StarterDeclaration' => $this->starterDeclaration,
                'LeavingDate' => Date::formatDate($this->leavingDate),
                'LeaverReason' => $this->leaverReason,
                'RuleExclusions' => $this->ruleExclusions,
                'WorkingWeek' => $this->workingWeek,
                'Address' => $this->address->format(),
                'HoursPerWeek' => $this->hoursPerWeek,
                'PassportNumber' => $this->passportNumber,
                'Seconded' => $this->seconded,
                'EEACitizen' => $this->eeaCitizen ? 'true' : 'false',
                'EPM6' => $this->epm6 ? 'true' : 'false',
                'PaymentToANonIndividual' => $this->paymentToANonIndividual ? 'true' : 'false',
                'IrregularEmployment' => $this->irregularEmployment ? 'true' : 'false',
                'OnStrike' => $this->onStrike ? 'true' : 'false',
                'PaymentMethod' => $this->paymentMethod,
                'MaritalStatus' => $this->maritalStatus,
                'BankAccount' => $this->bankAccount->format(),
                'EmployeePartner' => $this->employeePartner->format(),
                'IsAgencyWorker' => $this->isAgencyWorker ? 'true' : 'false',
                'Deactivated' => $this->deactivated ? 'true' : 'false',
                'AEAssessmentOverride' => $this->aeAssessmentOverride,
                'AEAssessmentOverrideDate' => Date::formatDate($this->aeAssessmentOverrideDate),
                'AEPostponementDate' => Date::formatDate($this->aePostponementDate),
                'AEExclusionReasonCode' => $this->aeExclusionReasonCode,
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
