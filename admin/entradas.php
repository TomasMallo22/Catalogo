<?php 

require_once('../config.php');
include(BASE_DIR.'admin/inc/header.php'); 
//include(BASE_DIR.'admin/inc/sidebar.php');
require_once(BASE_DIR.'Business/PostBusiness.php');

$bPost = new PostBusiness();

if(isset($_GET['del'])){
  $bPost->delete($_GET['del']);
  Util::redirect(BASE_URL.'/admin/entradas.php');
}

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Entradas del blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>admin/index.php">Index</a></li>
              <li class="breadcrumb-item active">Entradas</li>
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
          <h3 class="card-title">Listado de entradas <a href="<?php echo BASE_URL?>admin/entradas-form.php"><button type="button" class="btn btn-success"><i class="fas fa-plus "></i></button></a></h3>

          
        
        </div>
        <div class="card-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Precio</th>
                      <th>Modelo</th>
                      <th>Talle</th>
                      <th>Título</th>
                      <th>Post</th>
                      <th>Borrado</th>
                      
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($bPost->getAll(array(), true) as $post) { ?>
                    <tr>
                      <td><?php echo $post->getId() ?></td>
                      <td><?php echo $post->getAutor()->getName() ?></td>
                      <td><?php echo $post->getPrecio() ?></td>
                      <td><?php echo $post->getCategory()->getName() ?></td>
                      <td><?php echo $post->getTag()->getName() ?></td>
                      <td><?php echo $post->getSubtitle() ?></td>
                      <td><?php echo $post->getPost() ?></td>
                      <td><?php echo ($post->getDeleted() == true)? 'Sí' : 'No' ?></td>
                      
                      <td>
                        <a href="<?php echo BASE_URL?>admin/entradas-form.php?edit=<?php echo $post->getId() ?>"><button type="button" class="btn"><i class="fas fa-edit "></i></button></a> 
                        - 
                        <a href="<?php echo BASE_URL?>admin/entradas.php?del=<?php echo $post->getId() ?>"><button type="button" class="btn"><i class="fas fa-trash "></i></button></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>

        
        <!-- /.card-body -->
        
      
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include (BASE_DIR.'/admin/inc/footer.php'); ?>