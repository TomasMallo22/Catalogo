<?php 

require_once('../config.php');
include(BASE_DIR.'admin/inc/header.php'); 
include(BASE_DIR.'admin/inc/sidebar.php'); 
include(BASE_DIR.'Business/PostBusiness.php'); 
include(BASE_DIR.'Business/CategoryBusiness.php'); 
include(BASE_DIR.'Business/TagBusiness.php'); 



$bCategogy = new CategoryBusiness(); 
$bTag = new TagBusiness(); 
$bPost = new PostBusiness(); 

if(isset($_POST['guardar'])){
  unset($_POST['guardar']);
  $bPost->save($_POST);
  Util::redirect(BASE_URL.'/admin/entradas.php');
}

$id = 0;
if(isset($_GET['edit'])){
  $id = $_GET['edit'];
}
$post = $bPost->getOne($id);


 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario de entradas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>admin/index.php">Index</a></li>
              <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>admin/entradas.php">Entradas</a></li>
              <li class="breadcrumb-item active">Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Nueva entrada</h3>



    <!-- 
      private $id; -> autogenerado, BD -> autoincremental, !DB -> valor unico
      private $name; -> es mi foto
      private $createdAt; -> autogenerado/manual, DB -> current time como default, !DB -> lo hacemos por php
      private $subtitle; -> ok en el form permitis generarlo
      private $post; -> ok en el form permitis generarlo
      private $autor; -> autogerado/manual, usuario logeado. Manual selector con los usuarios.
      private $category; -> manual, selector de modelos
      private $tag; -> manual, selector de talles
      private $precio; -> ok en el form permitis generarlo
    -->
        </div>
        <div class="card-body">
         <!-- Horizontal Form -->
         <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" >
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputId" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" name="id" class="form-control" id="inputId" placeholder="ID" value="<?php echo $post->getId() ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputUsuario" class="col-sm-2 col-form-label">Usuario</label>
                    <div class="col-sm-10">
                      <input type="text" name="user" class="form-control" id="inputUsuario" placeholder="Usuario" value="<?php echo $post->getAutor()->getName()?> ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                      <input type="number" name="precio" class="form-control" id="inputPrecio" placeholder="Precio" value="<?php echo $post->getPrecio() ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputModelo" class="col-sm-2 col-form-label">Modelos</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="category">
                          <option>Seleccione un modelo</option>
                          <?php foreach($bCategogy->getAll() as $cat){?>
                            <option value="<?php echo $cat->getId()?>" <?php echo ($post->getCategory()->getId() == $cat->getId())?'selected = "selected"':''; ?>> <?php echo $cat->getName()?> </option>
                          <?php }?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputUsuario" class="col-sm-2 col-form-label">Talles</label>
                      <div class="col-sm-10">
                          <select class="custom-select" name="tag">
                              <option>Seleccione un talle</option>
                            <?php foreach($bTag->getAll() as $tag){?>
                              <option value="<?php echo $tag->getId()?>" <?php echo ($post->getTag()->getId() == $tag->getId())?'selected = "selected"':''; ?>><?php echo $tag->getName()?></option>
                            <?php }?>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputTitulo" class="col-sm-2 col-form-label">Título</label>
                    <div class="col-sm-10">
                    <input type="text" name="subtitle" class="form-control" id="inputTitulo" placeholder="Título" value="<?php echo $post->getSubtitle() ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPost" class="col-sm-2 col-form-label">Post</label>
                    <div class="col-sm-10">
                      <textarea name="post" class="form-control" id="textareaPost" rows="10" placeholder="Post"> <?php echo $post->getPost() ?> </textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputImagen" class="col-sm-2 col-form-label">Imagen</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputUsuario" placeholder="Imagen">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="guardar" class="btn btn-info">Guardar</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
        </div>
        
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include (BASE_DIR.'/admin/inc/footer.php'); ?>