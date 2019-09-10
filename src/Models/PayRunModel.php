<?php

namespace B3none\PayRun\Models;

class PayRunModel
{
    /**
     * The pay frequency of the pay run.
     *
     * Weekly, Monthly, TwoWeekly, FourWeekly, Yearly
     *
     * @var string
     */
    protected $payFrequency;

    /**
     * A timestamp for The date the employees were paid in the pay run.
     *
     * @var int
     */
    protected $paymentDate;

    /**
     * A timestamp for the pay period start date.
     *
     * @var int
     */
    protected $periodStart;

    /**
     * A timestamp for the pay period end date.
     *
     * @var int
     */
    protected $periodEnd;

    /**
     * A timestamp for the date when the pay run was executed.
     *
     * @var int
     */
    protected $executed;

    /**
     * The tax year the pay run was in.
     *
     * @var int
     */
    protected $taxYear;

    /**
     * The tax period the pay run was in.
     *
     * @var int
     */
    protected $taxPeriod;

    /**
     * Flag to indicate if the pay run should was treated as supplementary.
     *
     * @var bool
     */
    protected $isSupplementary;

    /**
     * The link to the pay schedule resource used for the pay run.
     *
     * @var LinkModel
     */
    protected $paySchedule;

    /**
     * The link to the previous pay run resource.
     *
     * @var LinkModel
     */
    protected $proceedingPayRun;

    /**
     * The sequence of the pay run in the collection of pay runs.
     *
     * @var int
     */
    protected $sequence;

    /**
     * @param string $payFrequency
     * @return PayRunModel
     */
    public function setPayFrequency(string $payFrequency): PayRunModel
    {
        $this->payFrequency = $payFrequency;
        return $this;
    }

    /**
     * @param int $paymentDate
     * @return PayRunModel
     */
    public function setPaymentDate(int $paymentDate): PayRunModel
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * @param int $periodStart
     * @return PayRunModel
     */
    public function setPeriodStart(int $periodStart): PayRunModel
    {
        $this->periodStart = $periodStart;
        return $this;
    }

    /**
     * @param int $periodEnd
     * @return PayRunModel
     */
    public function setPeriodEnd(int $periodEnd): PayRunModel
    {
        $this->periodEnd = $periodEnd;
        return $this;
    }

    /**
     * @param int $executed
     * @return PayRunModel
     */
    public function setExecuted(int $executed): PayRunModel
    {
        $this->executed = $executed;
        return $this;
    }

    /**
     * @param int $taxYear
     * @return PayRunModel
     */
    public function setTaxYear(int $taxYear): PayRunModel
    {
        $this->taxYear = $taxYear;
        return $this;
    }

    /**
     * @param int $taxPeriod
     * @return PayRunModel
     */
    public function setTaxPeriod(int $taxPeriod): PayRunModel
    {
        $this->taxPeriod = $taxPeriod;
        return $this;
    }

    /**
     * @param bool $isSupplementary
     * @return PayRunModel
     */
    public function setIsSupplementary(bool $isSupplementary): PayRunModel
    {
        $this->isSupplementary = $isSupplementary;
        return $this;
    }

    /**
     * @param LinkModel $paySchedule
     * @return PayRunModel
     */
    public function setPaySchedule(LinkModel $paySchedule): PayRunModel
    {
        $this->paySchedule = $paySchedule;
        return $this;
    }

    /**
     * @param LinkModel $proceedingPayRun
     * @return PayRunModel
     */
    public function setProceedingPayRun(LinkModel $proceedingPayRun): PayRunModel
    {
        $this->proceedingPayRun = $proceedingPayRun;
        return $this;
    }

    /**
     * @param int $sequence
     * @return PayRunModel
     */
    public function setSequence(int $sequence): PayRunModel
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayFrequency(): string
    {
        return $this->payFrequency;
    }

    /**
     * @return int
     */
    public function getPaymentDate(): int
    {
        return $this->paymentDate;
    }

    /**
     * @return int
     */
    public function getPeriodStart(): int
    {
        return $this->periodStart;
    }

    /**
     * @return int
     */
    public function getPeriodEnd(): int
    {
        return $this->periodEnd;
    }

    /**
     * @return int
     */
    public function getExecuted(): int
    {
        return $this->executed;
    }

    /**
     * @return int
     */
    public function getTaxYear(): int
    {
        return $this->taxYear;
    }

    /**
     * @return int
     */
    public function getTaxPeriod(): int
    {
        return $this->taxPeriod;
    }

    /**
     * @return bool
     */
    public function isSupplementary(): bool
    {
        return $this->isSupplementary;
    }

    /**
     * @return LinkModel
     */
    public function getPaySchedule(): LinkModel
    {
        return $this->paySchedule;
    }

    /**
     * @return LinkModel
     */
    public function getProceedingPayRun(): LinkModel
    {
        return $this->proceedingPayRun;
    }

    /**
     * @return int
     */
    public function getSequence(): int
    {
        return $this->sequence;
    }
}
