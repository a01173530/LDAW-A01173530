<nav class="container-fluid navbar navbar-expand-md navbar-light">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand d-md-none" href="#">Menu</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav w-100 justify-content-center">

            <li class="nav-item <?php echo( ($pageName === "index") ? "active" : "" );  ?>">
                <a class="nav-link" href="./index.php">Listado</a>
            </li>
            <li class="nav-item <?php echo( ($pageName === "newEntry") ? "active" : "" );  ?>">
                <a class="nav-link" href="./newEntry.php">Crear Entrada</a>
            </li>
            <li class="nav-item <?php echo( ($pageName === "newEntry") ? "active" : "" );  ?>">
                <a class="nav-link" href="./newEntry.php"> Categoria</a>
            </li>

            <li class="nav-item <?php echo( ($pageName === "newEntry") ? "active" : "" );  ?>">
                <a class="nav-link" href="./newEntry.php">Crear Categoria</a>
            </li>
            
        </ul>

    </div>

</nav>