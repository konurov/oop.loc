<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/IDE.php';
//require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';


function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new BookProduct('Три мушкетера',100,100);
//$notebook = new NotebookProduct('Dell', 1000,'Intel');
//$book->price = 50;
debug($book);

//$product = new Product("Акыл",10,500);

//debug($product);

$book->abst('test',10);

$book->test();

//debug($notebook);


//var_dump($book->public);
//var_dump($book->protected);
//var_dump($book->private);



echo $book->getProduct();
//echo $notebook->getProduct();

?>