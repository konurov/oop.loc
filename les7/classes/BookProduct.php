<?php 
class BookProduct extends Product implements IDE
{
    
    
    public $numPages;
    //const TEST = 30;
    public function __construct($name, $price,$numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(50);
        var_dump(self::TEST2);
    }
    public function test(){
        var_dump(self::TEST2);
    }
    public function getNumPages(){
        return $this->numPages;
    }
    
    public function getProduct()
    {
        $out =  parent::getProduct();
        $out .= "Цена без скидки: {$this->price}<br>";
        $out .= "Кол-во страниц:{$this->numPages}";

        return $out;
    }
    public function abst($name,$price){

        var_dump($name);
        var_dump($price);

    }
}