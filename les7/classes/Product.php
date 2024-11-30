<?php

abstract class Product
{

    public $name;
    protected $price;

    private $discount = 0;
    const TEST2 = 20;
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
        Цена со скидкой: {$this->getPrice()}<br>";
        
    }
    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }
    /**
     * @return int
     */
    public function getDiscount() : int 
    {
        return $this->discount;
    }
    /**
     * @param int $discount
     */
    public function setDiscount(int $discount){
        $this->discount = $discount;
    }

    abstract protected function abst($name,$price);




}