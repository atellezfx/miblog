<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Blog | Nuevo</title>
</head>
    <body class="elegant-color">
        <div class="card card-cascade w-50 mx-auto mt-5">
            
            <!--Card content-->
            <div class="card-body">
                <!-- Form login -->
                <form action="/nuevo.php" method="POST" enctype="multipart/form-data">
                    <h4 class="h5 text-center card-title">Nuevo Artículo</h4>

                    <div class="md-form">
                        <i class="fa fa-tag prefix grey-text"></i>
                        <input type="text" name="titulo" class="form-control" placeholder="Título" autofocus>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-commenting prefix grey-text"></i>
                        <input type="text" name="extracto" class="form-control" placeholder="Extracto">
                    </div>

                    <div class="md-form">
                        <i class="fa fa-pencil prefix grey-text"></i>
                        <textarea type="text" name="texto" class="md-textarea" placeholder="Texto"></textarea>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-file-photo-o prefix grey-text"></i>
                        <input type="file" name="thumb" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col text-left"><a class="btn grey" href="/">CANCELAR</a></div>
                        <div class="col text-right"><button class="btn btn-default">GUARDAR</button></div>
                    </div>

                    <?php if(isset($errores)): ?>
                        <hr>
                        <div class="text-center">
                            <span class="red-text"><?= $errores ?></span>
                        </div>
                    <?php endif; ?>
                        
                </form>
                <!-- Form login -->
                
            </div>
            <!--/.Card content-->

        </div>
    </body>
</html>