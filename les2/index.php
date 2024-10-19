<?php 
require_once "classes/Car.php";
function debug($data){
    echo "<pre>" .print_r($data, 1). "</pre>";
}
/*$o1 = new StaffClasses();
debug($o1);
$o2 = new StaffClasses();
$o2->name = "Nurbek";
$o2->age = 5;*/
/*
$mycar = new Car();
$mycar->brand = "Honda";
$mycar->model = "odyssey";
$mycar->year = 2001;
echo $mycar->getCarInfo();

$mycar1 = new Car();
$mycar1->brand = "Honda";
$mycar1->model = "fit";
$mycar1->year = 2009;

echo $mycar1->getCarInfo();*/

$mycar = new Car("Honda","fit",2001);
echo $mycar->upDA();


?>