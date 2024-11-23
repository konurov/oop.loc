<?php

class Product
{

    public $name;
    protected $price;

    private $discount = 5;

    //public $public = "PUBLIC1";
    //protected $protected = "PROTECTED";
    //private  $private = "PRIVATE";

    

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
        
    }

   
    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getProduct()
    {
        return  "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена без скидки: {$this->price}<br>
                Цена со скидкой: {$this->getPrice()}<br>";
        
    }
    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }



}