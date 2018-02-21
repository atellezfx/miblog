<?php
namespace Utel\Sql;
class Usuario {

    private $username, $password;
    private $nombre, $apellidos;
    private $email, $rol;

    public const SQL_SELECT_USUARIOS = "SELECT * FROM usuario";
    public const SQL_SELECT_USUARIO_POR_ID = "SELECT * FROM usuario WHERE username=?";
    public const SQL_SELECT_USUARIO_POR_CREDENCIALES = "SELECT * FROM usuario WHERE username=? AND password=md5(?)";
    public const SQL_INSERT_USUARIO = "INSERT INTO usuario(username, password, nombre, apellidos, email, rol) VALUES(?,?,?,?,?,?)";
    public const SQL_UPDATE_USUARIO = "UPDATE usuario SET password=?, nombre=?, apellidos=?, email=?, rol=? WHERE username=?";
    public const SQL_DELETE_USUARIO = "DELETE FROM usuario WHERE username=?";
    
    /**
     * Método mágico para sustituir los métodos get para todos los atributos de la clase
     *
     * @param String $nombre
     * @return void
     */
    public function __get($nombre) {
        switch($nombre) {
            case 'username': return $this->username;
            case 'password' : return $this->password;
            case 'nombre' : return $this-nombre;
            case 'apellidos' : return $this-apellidos;
            case 'email' : return $this->email;
            case 'rol' : return $this->rol;
            default: return null;
        }
    }

    /**
     * Métodos mágico para sustituir los métodos set para todos los atributos de la clase
     *
     * @param String $nombre
     * @param Mixed $valor
     */
    public function __set($nombre, $valor) {
        switch($nombre) {
            case 'username': $this->username = $valor; break;
            case 'password' :  $this->password = $valor; break;
            case 'nombre' :  $this->nombre = $valor; break;
            case 'apellidos' : $this->apellidos = $valor; break;
            case 'email' : $this->email = $valor; break;
            case 'rol' : $this->rol = $valor; break;
        }
    }

}
?>