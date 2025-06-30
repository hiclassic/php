<?php
//php protected access modifier
class Bankaccount {
    protected $balance = 0;

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $" . $amount . "<br>";
        } else {
            echo "Deposit amount must be positive.<br>";
        }
    }

    public function getBalance() {
        return $this->balance;
    }   

}
// Subclass to access protected property
class SavingsAccount extends Bankaccount {
    public function showBalance() {
        echo "Current balance: $" . $this->balance . "<br>";
    }
}   

$account = new SavingsAccount();
$account->deposit(100);
$account->showBalance();
// Attempting to access protected balance directly will cause an error
// echo $account->balance; // This will cause an error
echo "<br>";
// Attempting to access protected balance from a subclass method
$account->showBalance();
echo "<br>";
// Attempting to access protected balance from a subclass method
class CheckingAccount extends Bankaccount {
    public function showBalance() {
        echo "Checking Account Balance: $" . $this->balance . "<br>";
    }
}
$checkingAccount = new CheckingAccount();
$checkingAccount->deposit(50);
$checkingAccount->showBalance();
echo "<br>";
?>