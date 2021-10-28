<?php 

class BaseEntity{


    private $id;
    private $name;
    private $createdAt;

    function __construct($i,$n,$c = null){
        $this-> setId($i);
        $this-> setName($n);
        $this-> setCreatedAt($c);
    }

    public function setId($i){
        $this->id = $i;
    }

    public function getId(){
        return $this->id;
    }

    public function setName($n){
        $this->name = $n;
    }

    public function getName(){
        return $this->name;
    }    

    public function setCreatedAt($f){
        if($f == null){
            $f = date("Y-m-d H:i:s");
        }
        $this->createAt = $f;
    }

    public function getCreatedAt(){
        return date('d-m-y' , strtotime($this->createdAt));
    }
}


?>