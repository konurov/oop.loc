<?php

class Product
{

    public $name;
    protected $price;
    
    public $discount = 5;

   // public $public = "PUBLIC";
   // protected $protected = "PROTECTED";
   // private $private = "PRIVATE";
    

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
        ///var_dump($this->protected);
        //var_dump($this->private);
        
    }

    
    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getProduct()
    {
        return  "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена co скидкой: {$this->getPrice()}<br>";
        
    }
    public function getPrice()
    {
        return $this->price -($this->discount / 100 * $this->price);
    }



}