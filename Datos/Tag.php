<?php


$dummyData[1] = array('id' => 1, 'name' => 'Talle S');
$dummyData[2] = array('id' => 2, 'name' => 'Talle M');
$dummyData[3] = array('id' => 3, 'name' => 'Talle L');
$dummyData[4] = array('id' => 4, 'name' => 'Talle XL');



file_put_contents('tag.json', json_encode($dummyData));        


?>