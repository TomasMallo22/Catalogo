<?php 
include_once('config.php');
$title = 'River Mania Store';
$subtitle = 'Tu lugar de confianza para conseguir la indumentaria del más grande';
$imagen = 'assets/img/home.jpg';

include(BASE_DIR.'inc/header.php'); ?>

<!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php foreach($bPost->getAll($_GET) as $post){?>
                    <div class="post-preview">
                        <a href="post.php?id=<?php echo $post->getId()?>">
                            <h2 class="post-title">
                               <img src=" <?php echo $post->getName()?>" alt="" srcset=""> 
                            </h2>
                            <h3 class="post-subtitle">
                                <?php echo $post->getSubtitle()?>
                            </h3>
                        </a>
                        <p class="post-meta">
                            <?php echo $post->getPrecio()?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <?php } ?>
                <!-- Pager-->
            
        </div>
        <?php include(BASE_DIR.'inc/sidebar.php'); ?>
<?php include(BASE_DIR.'inc/footer.php'); ?>
