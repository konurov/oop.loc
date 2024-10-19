<?php
//https://www.php.net/manual/ru/function.fwrite.php#refsect1-function.fwrite-examples
require_once "classes/File.php";

$file = new File( __DIR__ .'\text.txt');

$file->getFileInfo("sanjar 1");
$file->getFileInfo("sanjar 2");



?>