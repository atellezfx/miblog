<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Blog | Login</title>
</head>
    <body class="elegant-color">
        <div class="card card-cascade w-50 mx-auto mt-5">
            
            <!--Card content-->
            <div class="card-body">
                <!-- Form login -->
                <form action="/login.php" method="POST">
                    <h4 class="h5 text-center card-title">Inicio de Sesión</h4>

                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" name="username" class="form-control" placeholder="Nombre de usuario" autofocus>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                    </div>

                    <div class="row">
                        <div class="col text-left"><a class="btn grey" href="/">Cancelar</a></div>
                        <div class="col text-right"><button class="btn btn-default">Acceder</button></div>
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