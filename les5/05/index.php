<?php

error_reporting(-1);
require_once 'classes/Product1.php';
require_once 'classes/NotebookProduct1.php';
require_once 'classes/BookProduct1.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new BookProduct1('Три мушкетера', 20, 1000);
$notebook = new NotebookProduct1('Dell', 1000, 'Intel');

debug($book);
debug($notebook);

echo $book->getProduct();
echo $notebook->getProduct();