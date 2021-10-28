<?php

require_once(BASE_DIR. 'DataAccess/CategoryDao.php');

class CategoryBusiness {

    private $daoCategory;

    function __construct(){
        $this->daoCategory = new CategoryDao();
    }

    function getAll($where = array()) {
        return $this->daoCategory->getAll($where );
    }
}

?>