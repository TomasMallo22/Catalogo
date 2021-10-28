<?php

require_once(BASE_DIR. 'DataAccess/AbstractDao.php');
require_once(BASE_DIR. 'Entity/UserEntity.php');

/*
    Un DAO normalmente tiene que tener 5 funciones basicas en base al CRUD o ADM
    C-> create -> necesito una funcion de creación de datos.
    R-> read -> necesito 2 funciones de lectura, leerTodos y leerUno.
    U-> update -> necesito una funcion para la actualizacion de datos.
    D-> delete -> necesito una función para el borrado de los datos.

*/
    class UserDao extends AbstractDao{

        function getOne($id){
            $dummyData = new UserEntity($id, 'User '.$id);
            return $dummyData;
        }

        function getAll($where){
            $dummyData[1] = new UserEntity('1', 'User 1');
            $dummyData[2] = new UserEntity('2', 'User 2');
            $dummyData[3] = new UserEntity('3', 'User 3');
            $dummyData[4] = new UserEntity('4', 'User 4');
            $dummyData[5] = new UserEntity('5', 'User 5');
            return $dummyData;

        }
        
        function save($data){}
        function modify($id, $data){}
        function delete($id){}
    
    }
?>