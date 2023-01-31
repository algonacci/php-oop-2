<?php
class User
{
 public $name;
 public $age;

 public function __construct($name, $age)
 {
  $this->name = $name;
  $this->age  = $age;
 }

 public function sayHello()
 {
  return $this->name . " says Hello!";
 }
}

$user1 = new User("Eric", 21);
echo $user1->name . " is " . $user1->age . " years old";
