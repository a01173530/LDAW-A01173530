<?php

/*
Métodos estáticos para cada vista de mi entidad (Entries), Ej. index, create, edit, delete, etc.
*/

namespace Controllers;

//Importar el modelo "Categories"
require_once(dirname(__FILE__) . "/../models/CategoriesModel.class.php");

use Models\CategoriesModel as Categories;


//Importar el modelo "Types"
require_once(dirname(__FILE__) . "/../models/TypesModel.class.php");

use Models\TypesModel as Types;


class CategoriesController{

    public static function category(){

        //Nombre de la página
        $GLOBALS["pageName"] = "category";
        //Listado de entradas
        $GLOBALS["categories"] = Categories::getCategories();//entries;

    }

    //Maneja la creación de una nueva entrada
    public static function newCategory(){

        //Nombre de la página
        $GLOBALS["pageName"] = "newCategory";
        //URL para el formulario
        $GLOBALS["actionUrl"] = $_SERVER["PHP_SELF"];
        //Listado de entradas
        $GLOBALS["types"] = Types::getTypes();

        if(strtolower($_SERVER["REQUEST_METHOD"]) === "post"){

            //var_dump($_POST);
            //Crear un objeto de tipo EntriesModel
           $type = Types::find($_POST["type"]);
           $category = new Categories(null, $_POST["nombre"], $_POST["description"], $type);

            //Mandar llamar
            $id = $category->save();

            if($id){
                //Redirección de php
                header("Location: ./category.php");
            }
            else{
                $GLOBALS["error"] = "Ha ocurrido un error al guardar el ingreso/egreso.";
            }

        }

    }

}