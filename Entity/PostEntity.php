<?php

require_once(BASE_DIR. 'Entity/BaseEntity.php');

class PostEntity extends BaseEntity{

    private $subtitle;
    private $post;
    private $autor;
    private $category;
    private $tag;
    private $precio;
    private $deleted;

    public function __construct($id= 0, $name='', $subtitle='', $post='', $autor='', $category='', $tag='', $precio='', $deleted = false, $c = null){
        parent::__construct($id, $name, $c);
        $this->setSubtitle($subtitle);
        $this->setPost($post);
        $this->setAutor($autor);
        $this->setCategory($category);
        $this->setTag($tag);
        $this->setPrecio($precio);
        $this->setDeleted($deleted);
    }

    public function setSubtitle($valor){
        $this->subtitle = $valor;
    }

    public function getSubtitle(){
        return $this->subtitle;
    }

    public function setPost($valor){
        $this->post = $valor;
    }

    public function getPost(){
        return $this->post;
    }

    public function setAutor($valor){
        $this->autor = $valor;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setCategory($valor){
        $this->category = $valor;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setTag($valor){
        $this->tag = $valor;
    }

    public function getTag(){
        return $this->tag;
    }

    public function setPrecio($valor){
        $this->precio = $valor;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setDeleted($deleted){
        $this->deleted = $deleted;
    }

    public function getDeleted(){
        return $this->deleted;
    }
}
   

?>