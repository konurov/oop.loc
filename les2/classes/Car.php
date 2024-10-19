<?php
class Car {
    public $brand;
    public $model;
    public $year;
    function __construct($brand, $model, $year)
    {
        echo __METHOD__ .'<br>';

        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
    public function getCarInfo(){
        //echo __METHOD__ .'<br>';

        return "<h3>О моем авто</h3>
        марка:{$this->brand}<br>
        модель:{$this->model}<br>
        год выпуска{$this->year}<br> ";
    }
}

?>