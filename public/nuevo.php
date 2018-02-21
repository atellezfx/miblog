<?php session_start();
require __DIR__ . '/../vendor/autoload.php';
use Utel\Config\Util;
use Utel\Sql\Articulo;

$errores = "";

if(isset($_SESSION['USUARIO_ACTUAL']) && $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['thumb']['tmp_name']);
    if($check !== false) {
        $archivo_subido = Util::DIRECTORIO_IMAGENES . $_FILES['thumb']['name'];
        move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
        $dbcon = Util::getDBConnection();
        $statement = $dbcon->prepare(Articulo::SQL_INSERT_ARTICULO);
        $statement->bindValue(1, $_POST['titulo']);
        $statement->bindValue(2, $_POST['extracto']);
        $statement->bindValue(3, $_POST['texto']);      
        $statement->bindValue(4, $_FILES['thumb']['name']);
        $statement->bindParam(5, $_SESSION['USUARIO_ACTUAL']);
        $statement->execute();
        header('Location: index.php');
    } else {
      $error = "El archivo no es una imagen o el archivo es muy pesado";
    }
  }

require Util::getView('nuevo.view.php');
?>