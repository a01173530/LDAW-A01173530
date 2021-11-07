<?php

/*
Métodos estáticos para la consulta de datos (ej. BD)

Métodos normales para representar lógica asociada a una instancia
*/

namespace Models;

//Importar la BD
require_once(dirname(__FILE__) . "/../utils/db.php");

use DB\DB as DB;

//Importar la clase CategoriesModel
require_once(dirname(__FILE__) . "/CategoriesModel.class.php");

use Models\CategoriesModel as Categories;

//Importar utils
require_once(dirname(__FILE__) . "/../utils/utils.php");
use function Utils\formatDate as formatDate, Utils\moneyFormat as moneyFormat;


class EntriesModel{

    /****************
        ATRIBUTOS
    *****************/
    
    public $id;
    public $date;
    public $title;
    public $description;
    public $qty;
    public $category;

    /*******************
        CONSTRUCTOR
    ********************/

    public function __construct($id, $date, $title, $description, $qty, $category){
        
        $this->id = $id;
        $this->date = $date;
        $this->title = $title;
        $this->description = $description;
        $this->qty = $qty;
        $this->category = $category;

    }

    //Devuelve la fecha formateada
    public function getFormattedDate(){

        return formatDate($this->date);

    }

    //Devuelve la cantidad en formato de moneda
    public function getMoneyQty(){

        return moneyFormat($this->qty);

    }

    //Guarda un objeto en la BD
    public function save(){

        //Obtener la instancia de la clase BD
        $db = DB::getDB();

        //Ejecutar la consulta usando db
        $id = $db->insert(
            "INSERT INTO entries(title,description,qty,date,category_id) VALUES(?,?,?,?,?)",
            [$this->title, $this->description, $this->qty, $this->date, $this->category->id]
        );

        return $id;

    }


    /************************
        MÉTODOS ESTÁTICOS
    *************************/

    public static function getEntries(){

        //Obtener la instancia de la clase BD
        $db = DB::getDB();

        //Ejecutar la consulta usando db
        $entries = $db->query("SELECT * FROM entries");

        $entriesList = [];

        foreach($entries as $entry){

            $entriesList[] = new EntriesModel(
                $entry["id"],
                $entry["date"],
                $entry["title"],
                $entry["description"],
                $entry["qty"],
                Categories::find($entry["category_id"])
            );

        }

        return $entriesList;

    }


}