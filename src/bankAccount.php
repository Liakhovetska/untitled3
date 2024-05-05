<?php

class BankAccount
{
    /**
     * @var int
     */
    private int $accountNumber;
    /**
     * @var int
     */
    private int $balance;

    /**
     * @param int $accountNumber
     * @param int $initialBalance
     */
    public function __construct(int $accountNumber, int $initialBalance = 0)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    /**
     * @return int
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param int $amount
     * @return bool
     */
    public function deposit(int $amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param int $amount
     * @return bool
     */
    public function withdraw(int $amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        } else {
            return false;
        }
    }
}