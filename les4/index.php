<?php

error_reporting(-1);
require_once 'classes/Product.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new Product('Три мушкетера', 20, null, 1000);
$notebook = new Product('Dell', 1000, 'Intel');

debug($book);
debug($notebook);

echo $book->getProduct('book');
echo $notebook->getProduct();