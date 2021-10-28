<?php

require_once(BASE_DIR. 'DataAccess/AbstractDao.php');
require_once(BASE_DIR. 'Entity/TagEntity.php');

/*
    Un DAO normalmente tiene que tener 5 funciones basicas en base al CRUD o ADM
    C-> create -> necesito una funcion de creación de datos.
    R-> read -> necesito 2 funciones de lectura, leerTodos y leerUno.
    U-> update -> necesito una funcion para la actualizacion de datos.
    D-> delete -> necesito una función para el borrado de los datos.

*/
    class TagDao extends AbstractDao{

        function __construct() {
            $this->file = BASE_DIR. 'Datos/tag.json';
            parent::__construct();
        }
        
        function convert($json){
            foreach(json_decode($json) as $index => $stdObj){
                $this->data[$index] = new TagEntity($stdObj->id, $stdObj->name);
            }
        }
        
        function save($data){}
        function modify($id, $data){}
        function delete($id){}
    
    }
?>