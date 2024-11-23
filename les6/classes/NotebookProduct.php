<?php class NotebookProduct extends Product{
    
    public $cpu;

    public function __construct($name, $price,$cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
        
    }
   
    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Цена без скидки:{$this->price}<br>";
        $out .= "процессор:{$this->cpu}";

        return $out;
    }
    public function getCpu(){
        return $this->cpu;
    }
}