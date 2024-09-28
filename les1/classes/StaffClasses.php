<?php
class StaffClasses{
    // Свойства класса
  public $name = "Snajar";
  public $age = 15;
  #----ЗАДАЧА-------#
  #Давайте добавим проверку введенного возраста: если он от 18 до 60, то будем менять возраст на новый, а если нет - то менять не будем:
  // Методы класса
  public function sayHello() {
    echo "Hello, my name is ".$this->name." and I am ".$this->age." years old.";
  }
}