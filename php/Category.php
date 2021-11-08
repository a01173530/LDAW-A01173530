<?php

require_once(dirname(__FILE__) . "/controllers/CategoriesController.class.php");

//Importar el controller
use Controllers\CategoriesController as Controller;

//Invocar la función de control de la vista
Controller::category();

//var_dump($entries);die();

// function find($value, $field = "id"){
//     //Código
// }

// find(2);



?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Lista de categorias</title>

        <!--
        ***********************************
                        CSS
        ***********************************
        -->
           
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        <!--Main CSS-->
        <link rel="stylesheet" href="./css/main.css" />

        <!-- Page CSS -->
        <link rel="stylesheet" href="./css/index.css" />
            
    </head>

    <body>

        <?php require_once(dirname(__FILE__) . "/partials/header.php"); ?>

        <?php require_once(dirname(__FILE__) . "/partials/mainNav.php"); ?>

        <main class="container-fluid">

            <h2>Lista de categorias</h2>

            <ul class="list-group mt-5" id="entries-list" >

                <?php 
                if(!empty($categories)){

                    foreach($categories as $category){

                       // $type = $category->type->getType();
                        
                        //var_dump($type["id"]);
                        
                        $class = "income";

                        /*if($type["id"] == 2){
                            $class = "outcome";
                        }*/
                        
                ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center <?php echo($class); ?>">
                            <div class="date me-2">
                            <p class="mb-0"><?php echo($category->id); ?></p>
                            </div>

                            <div class="ps-3 me-auto data">
                                <p class="fw-bold mb-0"><?php echo($category->name . " - " ); ?></p>
                                <p class="mb-0 mt-1 description"><?php echo($category->description); ?></p>
                            </div>
                            <span class="badge rounded-pill"></span>
                            

                        </li>
                
                <?php
                    }
                }
                else{
                    echo "<h3>No se encontraron registros</h3>";
                }
                ?>

                <!--

                <li class="list-group-item d-flex justify-content-between align-items-center outcome">
                  
                    <div class="date me-2">
                        <p class="mb-0">Jul 28, 2021</p>
                    </div>

                    <div class="ps-3 me-auto data">
                        <p class="fw-bold mb-0">Transporte - Carga de Gasolina</p>
                        <p class="mb-0 mt-1 description">45 litros de magna</p>
                    </div>
                    
                    <span class="badge rounded-pill">$950.75</span>
                
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center income">

                    <div class="date me-2">
                        <p class="mb-0">Ago 15, 2021</p>
                    </div>

                    <div class="ps-3 me-auto data">
                        <p class="fw-bold mb-0">Sueldo - pago de Quincena</p>
                        <p class="mb-0 mt-1 description">Primera quincena de agosto</p>
                    </div>
                    
                    <span class="badge rounded-pill align-self-center">$10,000.00</span>

                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center outcome">
                  
                    <div class="date me-2">
                        <p class="mb-0">Ago 10, 2021</p>
                    </div>

                    <div class="ps-3 me-auto data">
                        <p class="fw-bold mb-0">Viáticos - Comida en fondita</p>
                        <p class="mb-0 mt-1 description"></p>
                    </div>
                    
                    <span class="badge rounded-pill">70.00</span>
                
                </li>

                -->

            </ul>

        </main>

        <?php require_once(dirname(__FILE__) . "/partials/footer.php"); ?>
        
    </body>

    <!--
    *******************************
            JAVASCRIPT
    *******************************
    -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</html>