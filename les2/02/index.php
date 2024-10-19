<?php 
require_once 'classes/Car1.php';


function debug($data){
    echo "<pre>" .print_r($data, 1) . "<pre>";
}
/*
$myf = new Car1();
#var_dump($myf);
#debug($myf);
$myf->brand = "Hondo";
$myf->model = "fit";
$myf->year = 2009;

echo $myf->getCarInfo();

$myCar = new Car1();
#var_dump($myf);
#debug($myf);
$myCar->brand = "Honda";
$myCar->model = "jaz";
$myCar->year = 2010;

echo $myCar->getCarInfo();*/

$mycar = new Car1("Honda","fit",2001);
echo $mycar->getCarInfo();

$mycar1 = new Car1("Honda","fit",2002);
echo $mycar1->getCarInfo();
?>