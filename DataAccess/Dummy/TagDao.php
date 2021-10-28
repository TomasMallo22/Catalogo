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

        function getOne($id){
            $dummyData = new TagEntity($id, 'Tag '.$id);
            return $dummyData;
        }

        function getAll($where){
            $dummyData[1] = new TagEntity('1', 'Tag 1');
            $dummyData[2] = new TagEntity('2', 'Tag 2');
            $dummyData[3] = new TagEntity('3', 'Tag 3');
            $dummyData[4] = new TagEntity('4', 'Tag 4');
            $dummyData[5] = new TagEntity('5', 'Tag 5');
            return $dummyData;

        }
        
        function save($data){}
        function modify($id, $data){}
        function delete($id){}
    
    }
?>