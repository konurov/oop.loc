<?php

abstract class Product5
{

    public $name;
    protected $price;
    
    public $discount = 5;

    const TEST1 = 20;

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
    abstract protected function abst($name,$price);

    
    

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