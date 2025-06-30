<?php
class myClass{
    public $property = "Hello, World!";
    
    public function method() {
        echo "This is a method.";
    }
} 
$object = new myClass();
echo $object->property;
echo "<br>";
$object->method();
echo "<br>";
echo "<br>";
?> 


<?php
class myAccount {
    public $balance = 0;

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $" . $amount . "<br>";
        } else {
            echo "Deposit amount must be positive.<br>";
        }
    }

    public function getBalance($amount) {
        return $this->balance;
    }
}

$account = new myAccount();
$account->deposit(100);
echo "Current balance: $" . $account->getBalance(500) . "<br>";
echo "Attempting to access public balance: " . $account->balance . "<br>";
echo "<br>";
?>