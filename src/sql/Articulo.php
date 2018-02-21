<?php
namespace Utel\Sql;
class Articulo {

    private $id;
    private $titulo, $extracto;
    private $fecha, $modificado, $texto;
    private $thumb, $autor;

    public const SQL_SELECT_ARTICULOS = "SELECT * FROM articulo ORDER BY fecha DESC";
    public const SQL_SELECT_ARTICULO_POR_ID = "SELECT * FROM articulo WHERE id=?";
    public const SQL_SELECT_ARTICULOS_POR_AUTOR = "SELECT * FROM articulo WHERE autor=? ORDER BY fecha DESC";
    public const SQL_INSERT_ARTICULO = "INSERT INTO articulo(titulo, extracto, texto, thumb, autor) VALUES(?,?,?,?,?)";
    public const SQL_UPDATE_ARTICULO = "UPDATE articulo SET titulo=?, extracto=?, texto=?, thumb=?, autor=? WHERE id=?";
    public const SQL_DELETE_ARTICULO = "DELETE FROM articulo WHERE id=?";
    
    /**
     * Método mágico para sustituir los métodos get para todos los atributos de la clase
     *
     * @param String $nombre
     * @return void
     */
    public function __get($nombre) {
        switch($nombre) {
            case 'id': return $this->id;
            case 'titulo' : return $this->titulo;
            case 'extracto' : return $this->extracto;
            case 'fecha' : return $this->fecha;
            case 'modificado' : return $this->modificado;
            case 'texto' : return $this->texto;
            case 'thumb' : return $this->thumb;
            case 'autor' : return $this->autor;
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
            case 'id': $this->id = (int) $valor; break;
            case 'titulo' :  $this->titulo = $valor; break;
            case 'extracto' :  $this->extracto = $valor; break;
            case 'fecha' : $this->fecha = $valor; break;
            case 'modificado' : $this->modificado = $valor; break;
            case 'texto' : $this->texto = $valor; break;
            case 'thumb' : $this->thumb = $valor; break;
            case 'autor' : $this->autor = $valor; break;
        }
    }

}
?>