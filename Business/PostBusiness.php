<?php



require_once(BASE_DIR. 'DataAccess/PostDao.php');

class PostBusiness {

    private $daoPost;

    function __construct(){
        $this->daoPost = new PostDao();
    }

    function getAll($where = array(), $showDeleted = false) {
        return $this->daoPost->getAll($where,$showDeleted);
    }

    function getOne($id){
        $datos = $this->daoPost->getOne($id);
        return $this->daoPost->getOne($id);
    }

    function save($data){
        // private $id; -> autogenerado, BD -> autoincremental, !DB -> valor unico
        // private $name; -> es mi foto
        // private $createdAt; -> autogenerado/manual, DB -> current time como default, !DB -> lo hacemos por php
        // private $subtitle; -> ok en el form permitis generarlo
        // private $post; -> ok en el form permitis generarlo
        // private $autor; -> autogerado/manual, usuario logeado. Manual selector con los usuarios.
        // private $category; -> manual, selector de modelos
        // private $tag; -> manual, selector de talles
        // private $precio; -> ok en el form permitis generarlo
        $data['user'] = 5;
        return $this->daoPost->save($data);
        var_dump($data);
    }

    function delete($id){
        return $this->daoPost->delete($id);
    }
}

?>

