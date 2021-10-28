<?php
require('../config.php');
require_once(BASE_DIR. 'DataAccess/AbstractDao.php');
require_once(BASE_DIR. 'Entity/CategoryEntity.php');

$dummyData[1] = array('id' => 1, 'name' => 'Remeras Hombres');
$dummyData[2] = array('id' => 2, 'name' => 'Remeras Mujeres');
$dummyData[3] = array('id' => 3, 'name' => 'Shorts');



file_put_contents('category.json', json_encode($dummyData));        


?>