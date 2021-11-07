<?php

/*
Métodos estáticos para cada vista de mi entidad (Entries), Ej. index, create, edit, delete, etc.
*/

namespace Controllers;

//Importar el modelo "Entries"
require_once(dirname(__FILE__) . "/../models/EntriesModel.class.php");

use Models\EntriesModel as Entries;

//Importar el modelo "Categories"
require_once(dirname(__FILE__) . "/../models/CategoriesModel.class.php");

use Models\CategoriesModel as Categories;


class EntriesController{

    public static function index(){

        //Nombre de la página
        $GLOBALS["pageName"] = "index";
        //Listado de entradas
        $GLOBALS["entries"] = Entries::getEntries();//entries;

    }

    //Maneja la creación de una nueva entrada
    public static function newEntry(){

        //Nombre de la página
        $GLOBALS["pageName"] = "newEntry";
        //URL para el formulario
        $GLOBALS["actionUrl"] = $_SERVER["PHP_SELF"];
        //Listado de entradas
        $GLOBALS["categories"] = Categories::getCategories();

        if(strtolower($_SERVER["REQUEST_METHOD"]) === "post"){

            //var_dump($_POST);
            //Crear un objeto de tipo EntriesModel
            $category = Categories::find($_POST["category"]);
            $entry = new Entries(null, $_POST["date"], $_POST["title"], $_POST["description"], $_POST["qty"], $category);

            //Mandar llamar
            $id = $entry->save();

            if($id){
                //Redirección de php
                header("Location: ./index.php");
            }
            else{
                $GLOBALS["error"] = "Ha ocurrido un error al guardar el ingreso/egreso.";
            }

        }

    }

}