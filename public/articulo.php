<?php session_start();
require __DIR__ . '/../vendor/autoload.php';
use Utel\Config\Util;
use Utel\Sql\Articulo;
use Utel\Sql\Usuario;

if(isset($_GET['art'])) {

    $dbcon = Util::getDBConnection();
    $imgdir = Util::DIRECTORIO_IMAGENES;

    if(isset($dbcon)) {
        $sentencia = $dbcon->prepare(Articulo::SQL_SELECT_ARTICULO_POR_ID);
        $sentencia->bindValue(1, $_GET['art']);
        $sentencia->execute();
        $sentencia->setFetchMode(PDO::FETCH_CLASS, Articulo::class);
        $articulo = $sentencia->fetch();
        if(isset($_SESSION['USUARIO_ACTUAL'])) {
            $sentencia = $dbcon->prepare(Usuario::SQL_SELECT_USUARIO_POR_ID);
            $sentencia->bindValue(1, $_SESSION['USUARIO_ACTUAL']);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_CLASS, Usuario::class);
            $usuarioActual = $sentencia->fetch();
        }
    }
}



require Util::getView('articulo.view.php');
?>