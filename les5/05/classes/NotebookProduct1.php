<?php 
class NotebookProduct1 extends Product1{
    public $cpu;
   

    public function __construct($name, $price,$cpu)
    {
       parent::__construct($name, $price);
        $this->cpu = $cpu;
      
    }
    public function getCpu(){
        return $this->cpu;
    }
    public function getProduct()
    {
        $out = "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена: {$this->price}<br>";
        $out .= "Процессор: {$this->cpu}";

        return $out;
        
    }
}

?>