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
            $this->dummyData[1] = new PostEntity('1', 'Post 1', 'Subtitulo 1', 'contenido del post', $this->UserDao->getOne(1),$this->CategoryDao->getOne(1),$this->TagDao->getOne(1));
            $this->dummyData[2] = new PostEntity('2', 'Post 2', 'Subtitulo 2', 'contenido del post', $this->UserDao->getOne(1),$this->CategoryDao->getOne(1),$this->TagDao->getOne(2));
            $this->dummyData[3] = new PostEntity('3', 'Post 3', 'Subtitulo 3', 'contenido del post', $this->UserDao->getOne(2),$this->CategoryDao->getOne(4),$this->TagDao->getOne(1));
            $this->dummyData[4] = new PostEntity('4', 'Post 4', 'Subtitulo 4', 'contenido del post', $this->UserDao->getOne(3),$this->CategoryDao->getOne(5),$this->TagDao->getOne(3));
            $this->dummyData[5] = new PostEntity('5', 'Post 5', 'Subtitulo 5', 'contenido del post', $this->UserDao->getOne(4),$this->CategoryDao->getOne(3),$this->TagDao->getOne(3));
            $this->dummyData[6] = new PostEntity('6', 'Post 6', 'Subtitulo 6', 'contenido del post', $this->UserDao->getOne(5),$this->CategoryDao->getOne(3),$this->TagDao->getOne(5));
            $this->dummyData[7] = new PostEntity('7', 'Post 7', 'Subtitulo 7', 'contenido del post', $this->UserDao->getOne(1),$this->CategoryDao->getOne(1),$this->TagDao->getOne(1));
            $this->dummyData[10] = new PostEntity('10', 'Post 10', 'Subtitulo 8', 'contenido del post', $this->UserDao->getOne(1),$this->CategoryDao->getOne(2),$this->TagDao->getOne(1));
            

        }

        function getOne($id){
            return $this->dummyData[$id];
        }

        function getAll($where){
            foreach($this->dummyData as $index=>$data){
                if(!empty($where['cat']) AND $data->getCategory()->getId()!= $where['cat']){
                    unset($this->dummyData[$index]);
                }
                if(!empty($where['tag']) AND $data->getTag()->getId()!= $where['tag']){
                    unset($this->dummyData[$index]);
                }
                if(!empty($where['autor']) AND $data->getAutor()->getId()!= $where['autor']){
                    unset($this->dummyData[$index]);
                }
            }
            return $this->dummyData;
        }
        
        function save($data){}
        function modify($id, $data){}
        function delete($id){}
    
    }
?>