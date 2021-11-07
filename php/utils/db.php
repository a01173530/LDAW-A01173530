<?php

namespace DB;

//Importar la configuración
include_once(dirname(__FILE__) . "/../config/config.php");

use const Config\DB_USER as USER, Config\DB_PASSWORD as PASSWORD, Config\DB_NAME as DB_NAME, Config\DB_HOST as HOST;

//Importar PDO para conectarse al BD
use PDO;


class DB{


    /*****************
        PROPIEDADES
    ******************/

    private static $db = null;
    private $conn = null;

    /*****************
        CONSTRUCTOR
    ******************/

    private function __construct(){
        
        $this->conn = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME . ";charset=UTF8", USER, PASSWORD);
    
    }

    /*****************
    MÉTODOS ESTÁTICOS
    ******************/

    public static function getDB(){

        if(self::$db === null){
            self::$db = new DB();

            return self::$db;
        }

        return self::$db;

    }

    /*************************
        MÉTODOS DE LA CLASE
    **************************/

    public function query($query, $params = []){

        //Crear el statement de la consulta
        $statement = $this->conn->prepare($query);

        //Ejecutar la consulta pasándole los parámetros
        if($statement->execute($params)){
            //Devolver el resultado en un arreglo
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        return false;

    }

    public function insert($query, $params = []){

        //Crear el statement de la consulta
        $statement = $this->conn->prepare($query);

        //Ejecutar la consulta pasándole los parámetros
        if($statement->execute($params)){
            //Devolver el id
            return $this->conn->lastInsertId();
        }

        return false;

    }


}