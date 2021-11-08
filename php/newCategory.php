<?php 

//Controller
include_once(dirname(__FILE__) . "/controllers/CategoriesController.class.php");

use Controllers\CategoriesController as Controller;

//Ejecutar la función del controlador correspondiente a la vista
Controller::newCategory();

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Nueva Categoria</title>

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
        <link rel="stylesheet" href="./css/newEntry.css" />
            
    </head>

    <body>

        <!-- Incluir el header -->
        <?php include_once(dirname(__FILE__) . "/partials/header.php"); ?>

        <!-- Incluir el la navegación -->
        <?php include_once(dirname(__FILE__) . "/partials/mainNav.php"); ?>

        <!-- Contenido principal -->
        <main class="container-fluid">

            <h2>Nueva Categoria</h2>

            <form action="<?php echo($actionUrl) ?>" method="post" id="newCategoryForm" class="mx-auto mt-sm-5">

                <?php if(isset($error)){ ?>

                    <div class="alert alert-danger" role="alert"><?php echo($error);?></div>
                
                <?php } ?>

                <div class="form-group mb-3">
                    <label for="nombre">Nombre de la categoria</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la categoria" required />
                </div>


                <div class="form-group mb-3">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" id="description" name="description" ></textarea>
                </div>


                <div class="form-group mb-3">
                    <label for="type">Tipo</label>
                    <select class="form-control w-25" id="type" name="type" >
                        
                        <?php foreach($types as $type){ ?>

                            <option value="<?php echo($type->id); ?>"><?php echo($type->name); ?></option>

                        <?php } ?>
                       
                    </select>
                </div>

                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary mt-4">Guardar</button>
                </div>

            </form>

        </main>

        <!-- Incluir el footer -->
        <?php include_once(dirname(__FILE__) . "/partials/footer.php"); ?>
        
    </body>

    <!--
    *******************************
            JAVASCRIPT
    *******************************
    -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</html>