<?php

class Product
{

    public $name;
    public $price;

    

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
        
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getProduct()
    {
        return  "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена: {$this->price}<br>";
        
    }


}