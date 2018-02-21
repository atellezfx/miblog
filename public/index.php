<?php session_start();
require __DIR__ . '/../vendor/autoload.php';
use Utel\Config\Util;
use Utel\Sql\Articulo;

$dbcon = Util::getDBConnection();
$imgdir = Util::DIRECTORIO_IMAGENES;

if(isset($dbcon)) {
    if(isset($_SESSION['USUARIO_ACTUAL'])) {
        $sentencia = $dbcon->prepare(Articulo::SQL_SELECT_ARTICULOS_POR_AUTOR);
        $sentencia->bindValue(1, $_SESSION['USUARIO_ACTUAL']);
    } else {
        $sentencia = $dbcon->prepare(Articulo::SQL_SELECT_ARTICULOS);
    }
    $sentencia->execute();
    $articulos = $sentencia->fetchAll(PDO::FETCH_CLASS, Articulo::class);
}

require Util::getView('index.view.php');
?>