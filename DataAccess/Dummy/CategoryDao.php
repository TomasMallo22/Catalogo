<?php

require_once(BASE_DIR. 'DataAccess/AbstractDao.php');
require_once(BASE_DIR. 'Entity/CategoryEntity.php');

/*
    Un DAO normalmente tiene que tener 5 funciones basicas en base al CRUD o ADM
    C-> create -> necesito una funcion de creación de datos.
    R-> read -> necesito 2 funciones de lectura, leerTodos y leerUno.
    U-> update -> necesito una funcion para la actualizacion de datos.
    D-> delete -> necesito una función para el borrado de los datos.

*/
    class CategoryDao extends AbstractDao{

        function getOne($id){
            $dummyData = new CategoryEntity($id, 'Categ '.$id);
            return $dummyData;
        }

        function getAll($where){
            $dummyData[1] = new CategoryEntity('1', 'Categ 1');
            $dummyData[2] = new CategoryEntity('2', 'Categ 2');
            $dummyData[3] = new CategoryEntity('3', 'Categ 3');
            $dummyData[4] = new CategoryEntity('4', 'Categ 4');
            $dummyData[5] = new CategoryEntity('5', 'Categ 5');
            return $dummyData;

        }
        
        function save($data){}
        function modify($id, $data){}
        function delete($id){}
    
    }
?>