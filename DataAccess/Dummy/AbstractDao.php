<?php

abstract class AbstractDao{
    abstract function getOne($id);
    abstract function getAll($where);
    abstract function save($data);
    abstract function modify($id, $data);
    abstract function delete($id);
}

?>