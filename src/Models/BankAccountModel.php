<?php

namespace B3none\PayRun\Models;

/**
 * https://developer.payrun.io/docs/reference/bank-account.html#bank-account
 */
class BankAccountModel
{
    /**
     * @var string
     */
    protected $accountName;

    /**
     * @var int
     */
    protected $accountNumber;

    /**
     * @var int
     */
    protected $sortCode;

    /**
     * @var string
     */
    protected $reference;

    /**
     * BankAccountModel constructor.
     *
     * @param string|null $accountName
     * @param int|null $accountNumber
     * @param int|null $sortCode
     * @param string|null $reference
     */
    public function __construct(
        ?string $accountName = null,
        ?int $accountNumber = null,
        ?int $sortCode = null,
        ?string $reference = null
    ) {
        if ($accountName) {
            $this->accountName = $accountName;
        }

        if ($accountNumber) {
            $this->accountNumber = $accountNumber;
        }

        if ($sortCode) {
            $this->sortCode = $sortCode;
        }

        if ($reference) {
            $this->reference = $reference;
        }
    }

    /**
     * @param string $accountName
     * @return BankAccountModel
     */
    public function setAccountName(string $accountName): BankAccountModel
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * @param int $accountNumber
     * @return BankAccountModel
     */
    public function setAccountNumber(int $accountNumber): BankAccountModel
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @param int $sortCode
     * @return BankAccountModel
     */
    public function setSortCode(int $sortCode): BankAccountModel
    {
        $this->sortCode = $sortCode;
        return $this;
    }

    /**
     * @param string $reference
     * @return BankAccountModel
     */
    public function setReference(string $reference): BankAccountModel
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * @return int
     */
    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    /**
     * @return int
     */
    public function getSortCode(): int
    {
        return $this->sortCode;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @return array
     */
    public function format(): array
    {
        return [
            'AccountName' => $this->accountName,
            'AccountNumber' => (string)$this->accountName,
            'SortCode' => (string)$this->accountName,
            'Reference' => $this->accountName,
        ];
    }
}
