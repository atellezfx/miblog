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
            <div class="w-75 mx-auto">

                    <?php if(isset($articulo)): ?>
                        <!--Card-->
                        <div class="card mt-4">
                            <!--Card image-->
                            <img class="img-fluid" src="<?= $imgdir . $articulo->thumb ?>" alt="Card image cap">

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title"><?= $articulo->titulo ?></h4>
                                <!--Text-->
                                <p class="card-text"><?= $articulo->texto ?></p>
                                <div class="row">
                                    <div class="col text-left">
                                        <a href="/index.php#<?= $articulo->id ?>" class="btn green darken-1"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;REGRESAR</a>
                                    </div>
                                    <?php if(isset($usuarioActual) and ($usuarioActual->username == $articulo->autor)): ?>
                                        <div class="col text-right">
                                        <a href="/editar.php?art=<?= $articulo->id ?>" class="btn elegant-color"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;EDITAR</a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer text-muted">
                                <div class="row">
                                <div class="col text-left">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $articulo->autor ?>
                                </div>
                                <div class="col text-right">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i> <?= $articulo->modificado ?>
                                </div>
                                </div>
                            </div>
                            <!-- Card footer -->
                        </div>
                        <p></p>
                        <!--/.Card-->
                    <?php endif; ?>
            </div>        
        </div>
        
    </main>
    <!--Main layout-->
</body>
</html>