<?php

namespace Herdl\PayRun\Models;

use Error;
use Exception;
use Herdl\PayRun\Exceptions\ModelException;
use Herdl\PayRun\Helpers\ExceptionHelper;

/**
 * https://developer.payrun.io/docs/reference/employee/index.html#employeepartner
 */
class EmployeePartnerModel
{
    /**
     * The employee's partner first name.
     *
     * @var string
     */
    protected $firstName;

    /**
     * The employee's partner middle name.
     *
     * @var string
     */
    protected $middleName;

    /**
     * The employee's partner initial, if not supplying a first name.
     *
     * @var string
     */
    protected $initials;

    /**
     * The employee's partner lastname or surname.
     *
     * @var string
     */
    protected $lastName;

    /**
     * The employee's partner National Insurance number issued by HMRC.
     *
     * @var string
     */
    protected $niNumber;

    /**
     * EmployeePartnerModel constructor.
     *
     * @param string|null $firstName
     * @param string|null $middleName
     * @param string|null $initials
     * @param string|null $lastName
     * @param string|null $niNumber
     */
    public function __construct(
        ?string $firstName = null,
        ?string $middleName = null,
        ?string $initials = null,
        ?string $lastName = null,
        ?string $niNumber = null
    ) {
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
    }

    /**
     * @param string $firstName
     * @return EmployeePartnerModel
     */
    public function setFirstName(string $firstName): EmployeePartnerModel
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @param string $middleName
     * @return EmployeePartnerModel
     */
    public function setMiddleName(string $middleName): EmployeePartnerModel
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * @param string $initials
     * @return EmployeePartnerModel
     */
    public function setInitials(string $initials): EmployeePartnerModel
    {
        $this->initials = $initials;
        return $this;
    }

    /**
     * @param string $lastName
     * @return EmployeePartnerModel
     */
    public function setLastName(string $lastName): EmployeePartnerModel
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @param string $niNumber
     * @return EmployeePartnerModel
     */
    public function setNiNumber(string $niNumber): EmployeePartnerModel
    {
        $this->niNumber = $niNumber;
        return $this;
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
     * @return array
     * @throws ModelException
     */
    public function format(): array
    {
        try {
            return [
                'FirstName' => $this->firstName,
                'MiddleName' => $this->middleName,
                'Initials' => $this->initials,
                'LastName' => $this->lastName,
                'NiNumber' => $this->niNumber,
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
