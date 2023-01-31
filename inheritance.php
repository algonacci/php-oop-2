<?php
class User
{
 protected $_name;
 protected $_age;

 public function __construct($name, $age)
 {
  $this->name = $name;
  $this->age  = $age;
 }
}

class Customer extends User
{
 private $__balance;

 public function __construct($name, $age, $balance)
 {
  parent::__construct($name, $age);
  $this->balance = $balance;
 }

 public function pay($amount)
 {
  return $this->name . " paid $" . $amount;
 }

 public function getBalance()
 {
  return $this->balance;
 }
}

$customer1 = new Customer("Eric", 21, 500);
// echo $customer1->pay(1000);
echo $customer1->getBalance();
