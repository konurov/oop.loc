<?php class NotebookProduct extends Product5 implements ID6{
    
    public $cpu;

    const TEST1 = 40;

    public function __construct($name, $price,$cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
        var_dump(self::TEST1);
        
    }
    public function test(){
        var_dump(self::TEST2);
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
    public function abst($name,$price,$discount = null){

        var_dump($name);
        var_dump($price);

    }
}