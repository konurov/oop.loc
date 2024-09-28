<?php
    require_once "classes/StaffClasses.php";
    function debug($data){
        echo "<pre>" .print_r($data, 1). "</pre>";
    }
    $o1 = new StaffClasses();
    debug($o1);
    $o2 = new StaffClasses();
    $o2->name = "Nurbek";
    $o2->age = 5;

    debug($o2);
    $person1 = new StaffClasses();
    $person1->name = "John";
    $person1->age = 30;
    $person1->sayHello();

?>