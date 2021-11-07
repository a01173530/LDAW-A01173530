<?php 

//Controller
include_once(dirname(__FILE__) . "/controllers/EntriesController.class.php");

use Controllers\EntriesController as Controller;

//Ejecutar la función del controlador correspondiente a la vista
Controller::newEntry();

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Nuevo Ingreso/Egreso</title>

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

            <h2>Nuevo Ingreso/Egreso</h2>

            <form action="<?php echo($actionUrl) ?>" method="post" id="newEntryForm" class="mx-auto mt-sm-5">

                <?php if(isset($error)){ ?>

                    <div class="alert alert-danger" role="alert"><?php echo($error);?></div>
                
                <?php } ?>

                <div class="form-group mb-3">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Título del ingreso/egreso" required />
                </div>

                <div class="form-group mb-3">
                    <label for="qty">Cantidad</label>
                    <input type="number" class="form-control w-25" id="qty" name="qty" value="1.0" min="1.0" step="0.1" required />
                </div>

                <div class="form-group mb-3">
                    <label for="description">Descipción</label>
                    <textarea class="form-control" id="description" name="description" ></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="date">Fecha</label>
                    <input type="date" class="form-control w-25" id="date" name="date" required />
                </div>

                <div class="form-group mb-3">
                    <label for="category">Categoría</label>
                    <select class="form-control w-25" id="category" name="category" >

                        <?php foreach($categories as $category){ ?>

                            <option value="<?php echo($category->id); ?>"><?php echo($category->name); ?></option>

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