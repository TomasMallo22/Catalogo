<!-- elementos que tengo en la pagina -->

<div class="col-lg-4 col-md-4 mx-auto">
                <div class="post-preview">
                    <h2 class="post-title">
                        Modelos 
                    </h2>
                </div>
                <br>
                <?php 
                    $categorias = $bCategory->getAll();
                    foreach ($categorias as $cat){?>
                        <div class="post-preview">
                            <a href="index.php?cat=<?php echo $cat->getId(); ?>">
                                <h4 class="post-subtitle">
                                   <?php echo $cat->getName(); ?>
                                </h4>
                            </a>
                        </div>
                <?php } ?>
                <div class="post-preview">
                            <a href="index.php?cat=">
                                <h4 class="post-subtitle">
                                    Todos
                                </h4>
                            </a>
                        </div>
                <br>
                <div class="post-preview">
                    <h2 class="post-title">
                        Talles 
                    </h2>
                </div>
                <br>
                <div class="post-preview">
                    <?php foreach($bTag->getAll() as $tag){?>  
                        <a href="index.php?tag=<?php echo $tag->getId();?>">
                          <h4 class="post-subtitle">
                              <?php echo $tag->getName();?>
                          </h4>    
                        </a>
                    <?php } ?>  
                        <a href="index.php?tag=">
                            <h4 class="post-subtitle">
                                Todos
                            </h4>
                        </a>
                </div>
                <br>
            </div>
        </div>
 </div>