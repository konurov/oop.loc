<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
//require_once 'classes/BookProduct.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

//$book = new BookProduct('Три мушкетера',20,100);
$notebook = new NotebookProduct('Dell', 100,'Intel');

//debug($book);
debug($notebook);
$notebook->discount = 50;
//echo $book->getProduct();
echo $notebook->getProduct();


//var_dump($notebook->public);
//var_dump($notebook->protected);
//var_dump($notebook->private);

?>