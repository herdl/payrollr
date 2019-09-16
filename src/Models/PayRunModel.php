<?php

namespace Herdl\PayRun\Models;

use Error;
use Exception;
use Herdl\PayRun\Exceptions\ModelException;
use Herdl\PayRun\Helpers\ExceptionHelper;

/**
 * https://developer.payrun.io/docs/reference/payrun/index.html#pay-run
 */
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
     * PayRunModel constructor.
     *
     * @param string|null $payFrequency
     * @param int|null $paymentDate
     * @param int|null $periodStart
     * @param int|null $periodEnd
     * @param int|null $executed
     * @param int|null $taxYear
     * @param int|null $taxPeriod
     * @param bool|null $isSupplementary
     * @param LinkModel|null $paySchedule
     * @param LinkModel|null $proceedingPayRun
     * @param int|null $sequence
     */
    public function __construct(
        ?string $payFrequency = null,
        ?int $paymentDate = null,
        ?int $periodStart = null,
        ?int $periodEnd = null,
        ?int $executed = null,
        ?int $taxYear = null,
        ?int $taxPeriod = null,
        ?bool $isSupplementary = null,
        ?LinkModel $paySchedule = null,
        ?LinkModel $proceedingPayRun = null,
        ?int $sequence = null
    ) {
        if ($payFrequency) {
            $this->payFrequency = $payFrequency;
        }

        if ($paymentDate) {
            $this->paymentDate = $paymentDate;
        }

        if ($periodStart) {
            $this->periodStart = $periodStart;
        }

        if ($periodEnd) {
            $this->periodEnd = $periodEnd;
        }

        if ($executed) {
            $this->executed = $executed;
        }

        if ($taxYear) {
            $this->taxYear = $taxYear;
        }

        if ($taxPeriod) {
            $this->taxPeriod = $taxPeriod;
        }

        if ($isSupplementary) {
            $this->isSupplementary = $isSupplementary;
        }

        if ($paySchedule) {
            $this->paySchedule = $paySchedule;
        }

        if ($proceedingPayRun) {
            $this->proceedingPayRun = $proceedingPayRun;
        }

        if ($sequence) {
            $this->sequence = $sequence;
        }
    }

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

    /**
     * @return array
     * @throws ModelException
     */
    public function format(): array
    {
        try {
            return [
                'PayFrequency' => $this->payFrequency,
                'PaymentDate' => Date::formatDate($this->paymentDate),
                'PeriodStart' => Date::formatDate($this->periodStart),
                'PeriodEnd' => Date::formatDate($this->periodEnd),
                'Executed' => Date::formatDate($this->executed),
                'TaxYear' => $this->taxYear,
                'TaxPeriod' => $this->taxPeriod,
                'IsSupplementary' => $this->isSupplementary ? 'true' : 'false',
                'PaySchedule' => $this->paySchedule->format(),
                'ProceedingPayRun' => $this->proceedingPayRun->format(),
                'Sequence' => $this->sequence,
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
