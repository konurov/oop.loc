<?php
class StaffClasses{
    // Свойства класса
  public $name = "Snajar";
  public $age = 15;

  // Методы класса
  public function sayHello() {
    echo "Hello, my name is ".$this->name." and I am ".$this->age." years old.";
  }
}