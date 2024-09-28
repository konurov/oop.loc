<?php
require_once 'app/studentApp.php';

$o1 = new studentApp();
$o2 = new studentApp();

function debug($data){
    echo "<pre>" .print_r($data, 1) . "<pre>";
}
var_dump($o1);
debug($o1);

$o2-> $name = "Ainazik";
$o2-> $age = 17;

debug($o2);

$person1 = new studentApp();
$person1->name = "John";
$person1->age = 30;
$person1->sayHello();






?>