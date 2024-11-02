<?php
class Product{
    public $name;
    public $price;
    public $cpu;
    public $numPages;

    public function __construct($name, $price, $cpu = null,$numPages=null){
        $this->name = $name;
        $this->price = $price;
        $this->cpu = $cpu;
        $this->numPages = $numPages;

    }
    public function getCpu()
    {
        return $this->cpu;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }


    public function getProduct($type = "notbook"){
        $r = "<hr><h3>О товаре</h3></hr><br>
        Наименование:{$this->name}<br>
        Цена:{$this->price}<br>
        ";
        if($type == "notbook"){
            $r .= "Процессор:{$this->cpu}<br>";
        }else{
            $r .= "Кол-во страниц: {$this->numPages}<br>";
        }
        return $r;

    }

    
        
    



}

?>