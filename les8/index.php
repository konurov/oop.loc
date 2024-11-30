<?php

error_reporting(-1);
require_once 'classes/Product5.php';
require_once 'classes/ID6.php';
require_once 'classes/NotebookProduct.php';

//require_once 'classes/BookProduct.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

//$book = new BookProduct('Три мушкетера',20,100);
$notebook = new NotebookProduct('Dell', 100,'Intel');

debug($notebook);

echo $notebook->abst("test",250)."<br>";

echo $notebook->test()."<br>";
///$bak = new Product5("TEST",200);

//debug($bak);

echo $notebook->getProduct();




?>