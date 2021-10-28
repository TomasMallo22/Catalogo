<?php


$dummyData[1] = array('id' => 1, 'name' => 'User 1');
$dummyData[2] = array('id' => 2, 'name' => 'User 2');
$dummyData[3] = array('id' => 3, 'name' => 'User 3');
$dummyData[4] = array('id' => 4, 'name' => 'User 4');
$dummyData[5] = array('id' => 5, 'name' => 'User 5');


file_put_contents('User.json', json_encode($dummyData));        


?>