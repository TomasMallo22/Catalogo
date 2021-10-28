<?php

require_once(BASE_DIR. 'DataAccess/AbstractDao.php');
require_once(BASE_DIR. 'Entity/PostEntity.php');
require_once(BASE_DIR.'DataAccess/UserDao.php');
require_once(BASE_DIR.'DataAccess/CategoryDao.php');
require_once(BASE_DIR.'DataAccess/TagDao.php');

/*
    Un DAO normalmente tiene que tener 5 funciones basicas en base al CRUD o ADM
    C-> create -> necesito una funcion de creación de datos.
    R-> read -> necesito 2 funciones de lectura, leerTodos y leerUno.
    U-> update -> necesito una funcion para la actualizacion de datos.
    D-> delete -> necesito una función para el borrado de los datos.

*/
    class PostDao extends AbstractDao{

        private $UserDao;
        private $TagDao;
        private $CategoryDao;
        private $dummyData;

        function __construct(){
            $this->UserDao = new UserDao();
            $this->CategoryDao = new CategoryDao();
            $this->TagDao = new TagDao();
        
            $this->file= BASE_DIR. 'Datos/post.json';
            parent::__construct();
        }

        function getOne($id){
            if($id == 0){
                return new PostEntity();
            }else{
                return $this->data[$id];
            }
        }
    
        function getAll($where,$showDeleted = false){
            foreach($this->data as $index=>$data){
                if(!empty($where['cat']) AND $data->getCategory()->getId()!= $where['cat']){
                    unset($this->data[$index]);
                }
                if(!empty($where['tag']) AND $data->getTag()->getId()!= $where['tag']){
                    unset($this->data[$index]);
                }
                if(!empty($where['autor']) AND $data->getAutor()->getId()!= $where['autor']){
                    unset($this->data[$index]);
                }
                if($showDeleted == false AND $data->getDeleted() == true) {
                    unset($this->data[$index]);
                }
            }
            return $this->data;
        }

        function convert($json){
            foreach(json_decode($json) as $index => $stdObj){
                $this->data[$index] = new PostEntity($stdObj->id,$stdObj->name,$stdObj->subtitle,$stdObj->post, $this->UserDao->getOne($stdObj->user),$this->CategoryDao->getOne($stdObj->category),$this->TagDao->getOne($stdObj->tag),$stdObj->precio,$stdObj->deleted, $stdObj->createdAt);
            }
        }
        
        function save($data){
           
            $data['id'] = date("Ymdhis");
            $data['createdAt'] = date("Ymd");
            $data['category'] = intval($data['category']);
            $data['tag'] = intval($data['tag']);
            $data['deleted'] = false;

            $datos = json_decode($this->getDataFromFile(), TRUE);
            $datos[$data['id']] = $data;
            $this->saveDataToFile($datos);
        }

        function modify($id, $data){}

        function delete($id){
            $datos = json_decode($this->getDataFromFile(), TRUE);
            // unset($datos[$id]); // borrado fisico
            $datos[$id]['deleted'] = true; //borrado logico
            $this->saveDataToFile($datos);
        }
    
    }
?>


