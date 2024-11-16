<?php 
    class BookProduct1 extends Product1{

        public $numPages;

        public function __construct($name,$price,$numPages)
        {
            parent::__construct($name,$price);
            $this->numPages = $numPages;
            
        }

        public function getPages(){
            return $this->numPages;
        }
       
        public function getProduct()
        {
           $out = "<hr><b>О товаре:</b><br>
                    Наименование: {$this->name}<br>
                    Цена: {$this->price}<br>";

            $out .= "Кол-во страниц:{$this->numPages}";

            return $out;
            
        }




    }

?>