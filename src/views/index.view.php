<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Blog</title>
</head>
<body>
    <?php require('navbar.php'); ?>
        
    <!--Main layout-->
    <main>
        
        <div class="container-fluid">
            
                <?php if(isset($_SESSION['USUARIO_ACTUAL'])): ?>
                    <div class="w-100 mx-auto">
                        <div class="row">
                            <?php for($i=0; $i < count($articulos); $i++): ?>
                                <?php $art = $articulos[$i]; ?>
                                <div class="col-4">
                                    <!--Card-->
                                    <div class="card mt-4">
                                        <a name="<?= $art->id ?>"></a>
                                        <!--Card image-->
                                        <img class="img-fluid" src="<?= $imgdir . $art->thumb ?>" alt="Card image cap">
                                        

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <h4 class="card-title"><?= $art->titulo ?></h4>
                                            <!--Text-->
                                            <p class="card-text"><?= $art->extracto ?></p>
                                            <a href="articulo.php?art=<?= $art->id ?>" class="btn green darken-1">Ver más&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                        </div>

                                        <!-- Card footer -->
                                        <div class="card-footer text-muted">
                                            <div class="row">
                                            <div class="col text-left">
                                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $art->autor ?>
                                            </div>
                                            <div class="col-8 text-right">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i> <?= $art->modificado ?>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- Card footer -->
                                    </div>
                                    <p></p>
                                    <!--/.Card-->  
                                    <?php if($i%3==0): ?>
                                        <div class="w-100 d-none d-md-block"></div>
                                    <?php endif; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="w-75 mx-auto">
                        <?php foreach ($articulos as $art): ?>
                            <!--Card-->
                            <div class="card mt-4">
                                <a name="<?= $art->id ?>"></a>
                                <!--Card image-->
                                <img class="img-fluid" src="<?= $imgdir . $art->thumb ?>" alt="Card image cap">
                                

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title"><?= $art->titulo ?></h4>
                                    <!--Text-->
                                    <p class="card-text"><?= $art->extracto ?></p>
                                    <a href="articulo.php?art=<?= $art->id ?>" class="btn green darken-1">Ver más&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>

                                <!-- Card footer -->
                                <div class="card-footer text-muted">
                                    <div class="row">
                                    <div class="col text-left">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $art->autor ?>
                                    </div>
                                    <div class="col text-right">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> <?= $art->modificado ?>
                                    </div>
                                    </div>
                                </div>
                                <!-- Card footer -->
                            </div>
                            <p></p>
                            <!--/.Card-->   
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>        
        </div>
        
    </main>
    <!--Main layout-->
</body>
</html>