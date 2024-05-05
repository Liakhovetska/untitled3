<?php
require_once __DIR__ . '/bankAccount.php';

$accountToday = new BankAccount("590011463454", 1000);

echo "Account Number: " . $accountToday->getAccountNumber() . PHP_EOL;
echo "Initial Balance: " . $accountToday->getBalance() . ' UAH' . PHP_EOL;

$accountToday->deposit(500);
echo "Balance after deposit: " . $accountToday->getBalance() . ' UAH' . PHP_EOL;

$accountToday->withdraw(200);
echo "Balance after withdraw: " . $accountToday->getBalance() . ' UAH' . PHP_EOL;