<?php
//php private access modifier
class MyClass {
    private $property = "Hello, World!";

    public function method() {
        echo $this->property;
    }
}   
$object = new MyClass();
$object->method();  
echo "<br>";
// Uncommenting the line below will cause an error because $property is private
// echo $object->property; // This will cause an error
echo "<br>";
?> 


<?php
class Bankaccount {
    private $balance = 0;

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

$account = new Bankaccount();
$account->deposit(100);
echo "Current balance: $" . $account->getBalance() . "<br>";
echo "Attempting to access private balance: ";
// Uncommenting the line below will cause an error because $balance is private
// echo $account->balance; // This will cause an error
echo "<br>";
?>

<?php
class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername() {
        return $this->username;
    }   
    public function checkPassword($password) {
        return $this->password === $password;
    }
}

$user = new User("admin", "password123");
echo "Username: " . $user->getUsername() . "<br>";
if ($user->checkPassword("password123")) {
    echo "Password is correct.<br>";
} else {
    echo "Password is incorrect.<br>";
    echo "Attempting to access private password: ";
    // Uncommenting the line below will cause an error because $password is private
    // echo $user->password; // This will cause an error
    echo "<br>";
}

?>  