<?php 
include_once('config.php');

include_once(BASE_DIR.'inc/head.php'); 
$post = $bPost->getOne($_GET['id']);
?>
        
<!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                            <img src="<?php echo $post->getName() ?>" alt="" srcset=""> 
                            <h2 class="subheading"><?php echo $post->getSubtitle() ?></h2>
                            <span class="meta">
                                <br>
                                <?php echo $post->getPrecio()?>
                            </span>
                        </div>
                       <p> <?php echo $post->getPost() ?> </p>
                    </div>
                </div>
            </div>
        </article>
<?php include_once(BASE_DIR.'inc/footer.php'); ?>
