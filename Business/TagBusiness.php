<?php



require_once(BASE_DIR. 'DataAccess/TagDao.php');

class TagBusiness {

    private $daoTag;

    function __construct(){
        $this->daoTag = new TagDao();
    }

    function getAll($where = array()) {
        return $this->daoTag->getAll($where );
    }
}

?>

