<?php

namespace Herdl\PayRun\Models;

/**
 * https://developer.payrun.io/docs/reference/holidays/index.html#holiday-accrual-scheme
 */
class HolidaySchemeModel
{
    /**
     * A timestamp for he date the revision will come into effect.
     *
     * @var int
     */
    protected $effectiveDate;

    /**
     * The revision number of the holiday scheme; this is a readonly system generated value.
     *
     * @var int
     */
    protected $revision;

    /**
     * Allows an override of the default pay code used by the holiday scheme.
     *
     * @var string
     */
    protected $code;

    /**
     * The unique identifier of the holiday scheme. This value remains consistent for the entire history of the holiday scheme.
     *
     * @var string
     */
    protected $schemeKey;

    /**
     * The name of the holiday scheme.
     *
     * @var string
     */
    protected $schemeName;

    /**
     * A timestamp for the date at which the holiday scheme ceased to operate. [Optional]
     *
     * @var int
     */
    protected $schemeCeasedDate;

    /**
     * Indicates the calendar month in which the holiday scheme entitlement period begins.
     *
     * @var int
     */
    protected $yearStartMonth;

    /**
     * Indicates the day of month in which the holiday scheme entitlement period begins.
     *
     * @var int
     */
    protected $yearStartDay;

    /**
     * Determines the annual number of entitled days holiday for the holiday scheme.
     *
     * @var float
     */
    protected $annualEntitlementWeeks;

    /**
     * Determines the maximum number of entitled holiday days that can be carried over into a new annual holiday entitlement year.
     *
     * @var float
     */
    protected $maxCarryOverDays;

    /**
     * Indicates if the holiday scheme allows employees to use holiday entitlement before it has been accrued.
     *
     * @var bool
     */
    protected $allowNegativeBalance;

    /**
     * Indicates if the annual entitlement figure includes bank holidays.
     *
     * @var bool
     */
    protected $bankHolidayInclusive;

    /**
     * @var string[]
     */
    protected $accrualPayCodes;

    /**
     * HolidaySchemeModel constructor.
     *
     * @param int|null $effectiveDate
     * @param int|null $revision
     * @param string|null $code
     * @param string|null $schemeKey
     * @param string|null $schemeName
     * @param int|null $schemeCeasedDate
     * @param int|null $yearStartMonth
     * @param int|null $yearStartDay
     * @param float|null $annualEntitlementWeeks
     * @param float|null $maxCarryOverDays
     * @param bool|null $allowNegativeBalance
     * @param bool|null $bankHolidayInclusive
     * @param array|null $accrualPayCodes
     */
    public function __construct(
      ?int $effectiveDate = null,
      ?int $revision = null,
      ?string $code = null,
      ?string $schemeKey = null,
      ?string $schemeName = null,
      ?int $schemeCeasedDate = null,
      ?int $yearStartMonth = null,
      ?int $yearStartDay = null,
      ?float $annualEntitlementWeeks = null,
      ?float $maxCarryOverDays = null,
      ?bool $allowNegativeBalance = null,
      ?bool $bankHolidayInclusive = null,
      ?array $accrualPayCodes = null
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

        if ($schemeKey) {
            $this->schemeKey = $schemeKey;
        }

        if ($schemeName) {
            $this->schemeName = $schemeName;
        }

        if ($schemeCeasedDate) {
            $this->schemeCeasedDate = $schemeCeasedDate;
        }

        if ($yearStartMonth) {
            $this->yearStartMonth = $yearStartMonth;
        }

        if ($yearStartDay) {
            $this->yearStartDay = $yearStartDay;
        }

        if ($annualEntitlementWeeks) {
            $this->annualEntitlementWeeks = $annualEntitlementWeeks;
        }

        if ($maxCarryOverDays) {
            $this->maxCarryOverDays = $maxCarryOverDays;
        }

        if ($allowNegativeBalance) {
            $this->allowNegativeBalance = $allowNegativeBalance;
        }

        if ($bankHolidayInclusive) {
            $this->bankHolidayInclusive = $bankHolidayInclusive;
        }

        if ($accrualPayCodes) {
            $this->accrualPayCodes = $accrualPayCodes;
        }
    }

    /**
     * @param int $effectiveDate
     * @return HolidaySchemeModel
     */
    public function setEffectiveDate(int $effectiveDate): HolidaySchemeModel
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @param int $revision
     * @return HolidaySchemeModel
     */
    public function setRevision(int $revision): HolidaySchemeModel
    {
        $this->revision = $revision;
        return $this;
    }

    /**
     * @param string $code
     * @return HolidaySchemeModel
     */
    public function setCode(string $code): HolidaySchemeModel
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param string $schemeKey
     * @return HolidaySchemeModel
     */
    public function setSchemeKey(string $schemeKey): HolidaySchemeModel
    {
        $this->schemeKey = $schemeKey;
        return $this;
    }

    /**
     * @param string $schemeName
     * @return HolidaySchemeModel
     */
    public function setSchemeName(string $schemeName): HolidaySchemeModel
    {
        $this->schemeName = $schemeName;
        return $this;
    }

    /**
     * @param int $schemeCeasedDate
     * @return HolidaySchemeModel
     */
    public function setSchemeCeasedDate(int $schemeCeasedDate): HolidaySchemeModel
    {
        $this->schemeCeasedDate = $schemeCeasedDate;
        return $this;
    }

    /**
     * @param int $yearStartMonth
     * @return HolidaySchemeModel
     */
    public function setYearStartMonth(int $yearStartMonth): HolidaySchemeModel
    {
        $this->yearStartMonth = $yearStartMonth;
        return $this;
    }

    /**
     * @param int $yearStartDay
     * @return HolidaySchemeModel
     */
    public function setYearStartDay(int $yearStartDay): HolidaySchemeModel
    {
        $this->yearStartDay = $yearStartDay;
        return $this;
    }

    /**
     * @param float $annualEntitlementWeeks
     * @return HolidaySchemeModel
     */
    public function setAnnualEntitlementWeeks(float $annualEntitlementWeeks): HolidaySchemeModel
    {
        $this->annualEntitlementWeeks = $annualEntitlementWeeks;
        return $this;
    }

    /**
     * @param float $maxCarryOverDays
     * @return HolidaySchemeModel
     */
    public function setMaxCarryOverDays(float $maxCarryOverDays): HolidaySchemeModel
    {
        $this->maxCarryOverDays = $maxCarryOverDays;
        return $this;
    }

    /**
     * @param bool $allowNegativeBalance
     * @return HolidaySchemeModel
     */
    public function setAllowNegativeBalance(bool $allowNegativeBalance): HolidaySchemeModel
    {
        $this->allowNegativeBalance = $allowNegativeBalance;
        return $this;
    }

    /**
     * @param bool $bankHolidayInclusive
     * @return HolidaySchemeModel
     */
    public function setBankHolidayInclusive(bool $bankHolidayInclusive): HolidaySchemeModel
    {
        $this->bankHolidayInclusive = $bankHolidayInclusive;
        return $this;
    }

    /**
     * @param string[] $accrualPayCodes
     * @return HolidaySchemeModel
     */
    public function setAccrualPayCodes(array $accrualPayCodes): HolidaySchemeModel
    {
        $this->accrualPayCodes = $accrualPayCodes;
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
    public function getSchemeKey(): string
    {
        return $this->schemeKey;
    }

    /**
     * @return string
     */
    public function getSchemeName(): string
    {
        return $this->schemeName;
    }

    /**
     * @return int
     */
    public function getSchemeCeasedDate(): int
    {
        return $this->schemeCeasedDate;
    }

    /**
     * @return int
     */
    public function getYearStartMonth(): int
    {
        return $this->yearStartMonth;
    }

    /**
     * @return int
     */
    public function getYearStartDay(): int
    {
        return $this->yearStartDay;
    }

    /**
     * @return float
     */
    public function getAnnualEntitlementWeeks(): float
    {
        return $this->annualEntitlementWeeks;
    }

    /**
     * @return float
     */
    public function getMaxCarryOverDays(): float
    {
        return $this->maxCarryOverDays;
    }

    /**
     * @return bool
     */
    public function isAllowNegativeBalance(): bool
    {
        return $this->allowNegativeBalance;
    }

    /**
     * @return bool
     */
    public function isBankHolidayInclusive(): bool
    {
        return $this->bankHolidayInclusive;
    }

    /**
     * @return string[]
     */
    public function getAccrualPayCodes(): array
    {
        return $this->accrualPayCodes;
    }
}
