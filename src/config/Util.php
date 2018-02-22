<?php
namespace Utel\Config;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use \PDO; // PHP Database Objects

class Util {

    public const POST_POR_PAGINA = 2;
    public const DIRECTORIO_IMAGENES = 'imagenes/';

    public static function getDBConnection() {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=miblog;charset=utf8', 'root', '');
            return $conexion;
        } catch(\PDOException $ex) {
            Util::getLogger()->error($ex->getMessage());
        }
    }

    private static function getBaseDir(): String {
        $dir = \dirname(__DIR__, 2);
        return $dir;
    }

    public static function getView(String $archivo): String {
        return Util::getBaseDir() . "/src/views/$archivo";
    }

    public static function getLogger(): Logger {
        $log = new Logger('MiBlog');
        $logFile = Util::getBaseDir() . '/logs/error.log';
        $log->pushHandler(new StreamHandler($logFile, Logger::DEBUG));
        return $log;
    }

}


?>