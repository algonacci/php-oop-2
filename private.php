<?php
class User
{
 private $__name;
 private $__age;

 public function __construct($name, $age)
 {
  $this->name = $name;
  $this->age  = $age;
 }

 public function getName()
 {
  return $this->name;
 }

 public function setName($name)
 {
  $this->name = $name;
 }

//  __get() MAGIC METHOD
 public function __get($property)
 {
  if (property_exists($this, $property)) {
   return $this->$property;
  }
 }

//  __set() MAGIC METHOD
 public function __set($property, $value)
 {
  if (property_exists($this, $property)) {
   $this->$property = $value;
  }
  return $this;
 }
}

$user1 = new User("John Doe", 40);
// echo $user1->setName("Jane");
// echo $user1->getName();
$user1->__set("age", 21);
// echo $user1->__get("name");
// echo "<br>";
echo $user1->__get("age");
