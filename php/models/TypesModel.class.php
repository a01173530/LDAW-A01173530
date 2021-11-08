<?php

/*
Métodos estáticos para la consulta de datos (ej. BD)

Métodos normales para representar lógica asociada a una instancia
*/

namespace Models;

//Importar la BD
require_once(dirname(__FILE__) . "/../utils/db.php");

use DB\DB as DB;


class TypesModel{

    /****************
        ATRIBUTOS
    *****************/

    public $id;
    public $name;
    public $description;
    

    /****************
        CONSTRUCTOR
    *****************/

    public function __construct($id, $name, $description){

        $this->id = $id;
        $this->name = $name;
        $this->description = $description;

    }



    /***********************
        MÉTODOS ESTÁTICOS
    ************************/

    public static function find($value, $field = "id"){

        //Obtener la instancia de la BD
        $db = DB::getDB();

        //Ejecutar la consulta
        $result = $db->query("SELECT * FROM types WHERE id=?", [$value]);

        if($result){

            $type = $result[0];

            //Crear una instancia de la clase con los datos recuperados de la BD y devolverla
            return new TypesModel(
                $type["id"],
                $type["name"],
                $type["description"]
            );
        }

        return null;
        
    }




    //Devuelve el listado de categorías ordenado por nombre
    public static function getTypes(){

        //Obtener la instancia de la clase BD
        $db = DB::getDB();

        //Ejecutar la consulta usando db
        $types = $db->query("SELECT * FROM types ORDER BY name ASC");

        $typesList = [];

        foreach($types as $type){

            $typesList[] = new TypesModel(
                $type["id"],
                $type["name"],
                $type["description"]
            );

        }

        return $typesList;

    }

}