<?php session_start();
require __DIR__ . '/../vendor/autoload.php';
use Utel\Config\Util;
use Utel\Sql\Usuario;

$imgdir = Util::DIRECTORIO_IMAGENES;
$errores = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dbcon = Util::getDBConnection();
    if(isset($dbcon)) {
        $sentencia = $dbcon->prepare(Usuario::SQL_SELECT_USUARIO_POR_CREDENCIALES);
        $sentencia->bindValue(1, $_POST['username']);
        $sentencia->bindValue(2, $_POST['password']);
        $sentencia->execute();
        $sentencia->setFetchMode(PDO::FETCH_CLASS, Usuario::class);
        $resultado = $sentencia->fetch();
        if($resultado) {
            $_SESSION['USUARIO_ACTUAL'] = $resultado->username;
            header('Location: index.php');
        } else {
            $errores .= "Nombre de usuario o contraseña incorrectos";
        }
        
    }
}

require Util::getView('login.view.php');
?>