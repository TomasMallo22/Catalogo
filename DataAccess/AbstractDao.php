<?php

abstract class AbstractDao{
    
    protected $data;
    protected $file;


    abstract function save($data);
    abstract function modify($id, $data);
    abstract function delete($id);
    abstract function convert($json);
    
    function __construct(){
        $this->convert($this->getDataFromFile());
    }

    function getDataFromFile(){
        $datos = file_get_contents($this->file);
        return $datos;
    }

    function saveDataToFile($datos){
        file_put_contents($this->file, json_encode($datos));
        // $fp = fopen($this->file, "w");
        // fwrite($fp,json_encode($datos));
        // fclose($fp);
    }

    function getOne($id){
        return $this->data[$id];
    }

    function getAll($where){
        return $this->data;

    }
}

?>