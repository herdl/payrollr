<?php

namespace Herdl\PayRun\Models;

/**
 * https://developer.payrun.io/docs/reference/pay-code/index.html#pay-codes
 */
class PayCodeModel
{
    /**
     * The pay code identifier referenced on calculation pay lines. See revisible objects for more information on revisions and how they work.
     *
     * https://developer.payrun.io/docs/key-concepts/revisible-objects.html
     *
     * @var string
     */
    protected $code;

    /**
     * The timestamp for the date when the pay code revision became effective.
     *
     * @var int
     */
    protected $effectiveDate;

    /**
     * The revision number of the pay code; this is a readonly system generated value
     *
     * @var int
     */
    protected $revision;

    /**
     * The description of the pay code. Example: Standard basic pay.
     *
     * @var string
     */
    protected $description;

    /**
     * Indicates if the value of the pay line should be applied before national insuration contribution calculation.
     *
     * @var bool
     */
    protected $niable;

    /**
     * Indicates if the value of the pay line should be applied before PAYE tax calculation.
     *
     * @var bool
     */
    protected $taxable;

    /**
     * Indicates if the value of the pay line is considered a benefit in kind.
     *
     * @var bool
     */
    protected $benefit;

    /**
     * Indicates if the value of the pay line has a notional value for tax or national insurance.
     *
     * @var bool
     */
    protected $notional;

    /**
     * Indicates if the value of the pay line should not be considered for recovery of a debt via an AOE.
     *
     * @var bool
     */
    protected $nonArrestable;

    /**
     * Determines if the pay code can be edited. Readonly pay codes cannot be altered.
     *
     * @var bool
     */
    protected $readOnly;

    /**
     * Determines the calculator territory to be used when processing pay lines that reference this pay code.
     *
     * UnitedKingdom
     *
     * @var string
     */
    protected $territory;

    /**
     * Determines the calculator region to be used when processing pay lines that reference this pay code.
     *
     * NotSet, England, Scotland, Wales
     *
     * @var string
     */
    protected $region;

    /**
     * The type of payment code; either Payment or Dedution.
     *
     * Payment, Deduction
     *
     * @var string
     */
    protected $type;

    /**
     * A link to the associated nominal ledger code. Nominal codes are used to group pay codes into journal accounts. See Nominal Code for more details.
     *
     * https://developer.payrun.io/docs/reference/nominal-code/index.html
     *
     * @var LinkModel
     */
    protected $nominalCode;

    /**
     * @param string $code
     * @return PayCodeModel
     */
    public function setCode(string $code): PayCodeModel
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param int $effectiveDate
     * @return PayCodeModel
     */
    public function setEffectiveDate(int $effectiveDate): PayCodeModel
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @param int $revision
     * @return PayCodeModel
     */
    public function setRevision(int $revision): PayCodeModel
    {
        $this->revision = $revision;
        return $this;
    }

    /**
     * @param string $description
     * @return PayCodeModel
     */
    public function setDescription(string $description): PayCodeModel
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param bool $niable
     * @return PayCodeModel
     */
    public function setNiable(bool $niable): PayCodeModel
    {
        $this->niable = $niable;
        return $this;
    }

    /**
     * @param bool $taxable
     * @return PayCodeModel
     */
    public function setTaxable(bool $taxable): PayCodeModel
    {
        $this->taxable = $taxable;
        return $this;
    }

    /**
     * @param bool $benefit
     * @return PayCodeModel
     */
    public function setBenefit(bool $benefit): PayCodeModel
    {
        $this->benefit = $benefit;
        return $this;
    }

    /**
     * @param bool $notional
     * @return PayCodeModel
     */
    public function setNotional(bool $notional): PayCodeModel
    {
        $this->notional = $notional;
        return $this;
    }

    /**
     * @param bool $nonArrestable
     * @return PayCodeModel
     */
    public function setNonArrestable(bool $nonArrestable): PayCodeModel
    {
        $this->nonArrestable = $nonArrestable;
        return $this;
    }

    /**
     * @param bool $readOnly
     * @return PayCodeModel
     */
    public function setReadOnly(bool $readOnly): PayCodeModel
    {
        $this->readOnly = $readOnly;
        return $this;
    }

    /**
     * @param string $territory
     * @return PayCodeModel
     */
    public function setTerritory(string $territory): PayCodeModel
    {
        $this->territory = $territory;
        return $this;
    }

    /**
     * @param string $region
     * @return PayCodeModel
     */
    public function setRegion(string $region): PayCodeModel
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @param string $type
     * @return PayCodeModel
     */
    public function setType(string $type): PayCodeModel
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param LinkModel $nominalCode
     * @return PayCodeModel
     */
    public function setNominalCode(LinkModel $nominalCode): PayCodeModel
    {
        $this->nominalCode = $nominalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isNiable(): bool
    {
        return $this->niable;
    }

    /**
     * @return bool
     */
    public function isTaxable(): bool
    {
        return $this->taxable;
    }

    /**
     * @return bool
     */
    public function isBenefit(): bool
    {
        return $this->benefit;
    }

    /**
     * @return bool
     */
    public function isNotional(): bool
    {
        return $this->notional;
    }

    /**
     * @return bool
     */
    public function isNonArrestable(): bool
    {
        return $this->nonArrestable;
    }

    /**
     * @return bool
     */
    public function isReadOnly(): bool
    {
        return $this->readOnly;
    }

    /**
     * @return string
     */
    public function getTerritory(): string
    {
        return $this->territory;
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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return LinkModel
     */
    public function getNominalCode(): LinkModel
    {
        return $this->nominalCode;
    }
}
