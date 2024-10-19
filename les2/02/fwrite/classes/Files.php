<?php 
class Files{
    public $fpname;
    public $file;

    public function __construct($file)
    {
        $this->file = $file;
        if(!is_writable($this->file)){
            echo "Файл {$this->file} недоступен для записи";
            exit;
        } 
        if (!$this->fpname = fopen($this->file, 'a')) {
            echo "Не могу открыть файл ($this->file)";
            exit;
       } 
    }
    public function __destruct()
    {
        fclose($this->fpname); 
    }
    public function wriInfo($test){
        // Записываем значение переменной $somecontent в открытый файл.
        if (fwrite($this->fpname, $test . PHP_EOL) === FALSE) {
            echo "Не могу произвести запись в файл ($this->file)";
            exit;
        }
    }
}


?>