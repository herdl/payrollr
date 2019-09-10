<?php

namespace B3none\PayRun\Models;

/**
 * https://developer.payrun.io/docs/reference/employer/index.html#employer-auto-enrolment
 */
class EmployerAutoEnrolmentModel
{
    /**
     * Timestamp for the employers auto enrolment staging date.
     *
     * @var int
     */
    protected $stagingDate;

    /**
     * Timestamp for the optional employers auto enrolment deferment date.
     *
     * @var int
     */
    protected $postponementDate;

    /**
     * The optional employers auto enrolment re-enrolment day offset. Allows the tri-annual re-enrolment
     * to be offset by a number of days. Supports positive and negative integers.
     *
     * @var int
     */
    protected $reEnrolmentDayOffset;

    /**
     * The optional employers auto enrolment re-enrolment month offset. Allows the tri-annual re-enrolment
     * to be offset by a number of months. Supports positive and negative integers.
     *
     * @var int
     */
    protected $reEnrolmentMonthOffset;

    /**
     * The employers auto enrolment primary contact first name.
     *
     * @var string
     */
    protected $primaryFirstName;

    /**
     * The employers auto enrolment primary contact last name.
     *
     * @var string
     */
    protected $primaryLastName;

    /**
     * The employers auto enrolment primary contact email address.
     *
     * @var string
     */
    protected $primaryEmail;

    /**
     * The employers auto enrolment primary contact telephone number.
     *
     * @var string
     */
    protected $primaryTelephone;

    /**
     * The employers auto enrolment primary contact telephone number.
     *
     * @var string
     */
    protected $primaryJobTitle;

    /**
     * The employers auto enrolment secondary contact first name.
     *
     * @var string
     */
    protected $secondaryFirstName;

    /**
     * The employers auto enrolment secondary contact last name.
     *
     * @var string
     */
    protected $secondaryLastName;

    /**
     * The employers auto enrolment secondary contact email address.
     *
     * @var string
     */
    protected $secondaryEmail;

    /**
     * The employers auto enrolment secondary contact telephone number.
     *
     * @var string
     */
    protected $secondaryTelephone;

    /**
     * The employers auto enrolment secondary job title.
     *
     * @var string
     */
    protected $secondaryJobTitle;

    /**
     * The link to the employers auto enrolment pension scheme.
     *
     * @var LinkModel
     */
    protected $pension;

    /**
     * @param int $stagingDate
     * @return EmployerAutoEnrolmentModel
     */
    public function setStagingDate(int $stagingDate): EmployerAutoEnrolmentModel
    {
        $this->stagingDate = $stagingDate;
        return $this;
    }

    /**
     * @param int $postponementDate
     * @return EmployerAutoEnrolmentModel
     */
    public function setPostponementDate(int $postponementDate): EmployerAutoEnrolmentModel
    {
        $this->postponementDate = $postponementDate;
        return $this;
    }

    /**
     * @param int $reEnrolmentDayOffset
     * @return EmployerAutoEnrolmentModel
     */
    public function setReEnrolmentDayOffset(int $reEnrolmentDayOffset): EmployerAutoEnrolmentModel
    {
        $this->reEnrolmentDayOffset = $reEnrolmentDayOffset;
        return $this;
    }

    /**
     * @param int $reEnrolmentMonthOffset
     * @return EmployerAutoEnrolmentModel
     */
    public function setReEnrolmentMonthOffset(int $reEnrolmentMonthOffset): EmployerAutoEnrolmentModel
    {
        $this->reEnrolmentMonthOffset = $reEnrolmentMonthOffset;
        return $this;
    }

    /**
     * @param string $primaryFirstName
     * @return EmployerAutoEnrolmentModel
     */
    public function setPrimaryFirstName(string $primaryFirstName): EmployerAutoEnrolmentModel
    {
        $this->primaryFirstName = $primaryFirstName;
        return $this;
    }

    /**
     * @param string $primaryLastName
     * @return EmployerAutoEnrolmentModel
     */
    public function setPrimaryLastName(string $primaryLastName): EmployerAutoEnrolmentModel
    {
        $this->primaryLastName = $primaryLastName;
        return $this;
    }

    /**
     * @param string $primaryEmail
     * @return EmployerAutoEnrolmentModel
     */
    public function setPrimaryEmail(string $primaryEmail): EmployerAutoEnrolmentModel
    {
        $this->primaryEmail = $primaryEmail;
        return $this;
    }

    /**
     * @param string $primaryTelephone
     * @return EmployerAutoEnrolmentModel
     */
    public function setPrimaryTelephone(string $primaryTelephone): EmployerAutoEnrolmentModel
    {
        $this->primaryTelephone = $primaryTelephone;
        return $this;
    }

    /**
     * @param string $primaryJobTitle
     * @return EmployerAutoEnrolmentModel
     */
    public function setPrimaryJobTitle(string $primaryJobTitle): EmployerAutoEnrolmentModel
    {
        $this->primaryJobTitle = $primaryJobTitle;
        return $this;
    }

    /**
     * @param string $secondaryFirstName
     * @return EmployerAutoEnrolmentModel
     */
    public function setSecondaryFirstName(string $secondaryFirstName): EmployerAutoEnrolmentModel
    {
        $this->secondaryFirstName = $secondaryFirstName;
        return $this;
    }

    /**
     * @param string $secondaryLastName
     * @return EmployerAutoEnrolmentModel
     */
    public function setSecondaryLastName(string $secondaryLastName): EmployerAutoEnrolmentModel
    {
        $this->secondaryLastName = $secondaryLastName;
        return $this;
    }

    /**
     * @param string $secondaryEmail
     * @return EmployerAutoEnrolmentModel
     */
    public function setSecondaryEmail(string $secondaryEmail): EmployerAutoEnrolmentModel
    {
        $this->secondaryEmail = $secondaryEmail;
        return $this;
    }

    /**
     * @param string $secondaryTelephone
     * @return EmployerAutoEnrolmentModel
     */
    public function setSecondaryTelephone(string $secondaryTelephone): EmployerAutoEnrolmentModel
    {
        $this->secondaryTelephone = $secondaryTelephone;
        return $this;
    }

    /**
     * @param string $secondaryJobTitle
     * @return EmployerAutoEnrolmentModel
     */
    public function setSecondaryJobTitle(string $secondaryJobTitle): EmployerAutoEnrolmentModel
    {
        $this->secondaryJobTitle = $secondaryJobTitle;
        return $this;
    }

    /**
     * @param LinkModel $pension
     * @return EmployerAutoEnrolmentModel
     */
    public function setPension(LinkModel $pension): EmployerAutoEnrolmentModel
    {
        $this->pension = $pension;
        return $this;
    }

    /**
     * @return int
     */
    public function getStagingDate(): int
    {
        return $this->stagingDate;
    }

    /**
     * @return int
     */
    public function getPostponementDate(): int
    {
        return $this->postponementDate;
    }

    /**
     * @return int
     */
    public function getReEnrolmentDayOffset(): int
    {
        return $this->reEnrolmentDayOffset;
    }

    /**
     * @return int
     */
    public function getReEnrolmentMonthOffset(): int
    {
        return $this->reEnrolmentMonthOffset;
    }

    /**
     * @return string
     */
    public function getPrimaryFirstName(): string
    {
        return $this->primaryFirstName;
    }

    /**
     * @return string
     */
    public function getPrimaryLastName(): string
    {
        return $this->primaryLastName;
    }

    /**
     * @return string
     */
    public function getPrimaryEmail(): string
    {
        return $this->primaryEmail;
    }

    /**
     * @return string
     */
    public function getPrimaryTelephone(): string
    {
        return $this->primaryTelephone;
    }

    /**
     * @return string
     */
    public function getPrimaryJobTitle(): string
    {
        return $this->primaryJobTitle;
    }

    /**
     * @return string
     */
    public function getSecondaryFirstName(): string
    {
        return $this->secondaryFirstName;
    }

    /**
     * @return string
     */
    public function getSecondaryLastName(): string
    {
        return $this->secondaryLastName;
    }

    /**
     * @return string
     */
    public function getSecondaryEmail(): string
    {
        return $this->secondaryEmail;
    }

    /**
     * @return string
     */
    public function getSecondaryTelephone(): string
    {
        return $this->secondaryTelephone;
    }

    /**
     * @return string
     */
    public function getSecondaryJobTitle(): string
    {
        return $this->secondaryJobTitle;
    }

    /**
     * @return LinkModel
     */
    public function getPension(): LinkModel
    {
        return $this->pension;
    }
}
