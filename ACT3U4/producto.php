<!DOCTYPE html>
<html>
    <head>
        <title>
            Prod
        </title>
        <link rel="stylesheet" href="Public\CSS\main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
            <img src="https://static.wikia.nocookie.net/memes-pedia/images/d/de/Gok%C5%AB_le_gana.jpg/revision/latest?cb=20210322171158&path-prefix=es" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="#">Barra de Navegacion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
                </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </div>
        </nav>

        <div id="Cuerpo" class="container">
            <div class="container-fluid">
                <div class="row m-2">
                    <div div class="col">
                        <h4>Productos:</h4>
                    </div> 
                    <div class="col">
                    <button class="btn btn-info float-end">
                        Añadir producto
                    </button>
                </div>
                </div>

                <?php for($i=0; $i <=12; $i++){
                    ?> 
                    <div class="container-fluid col-sd-10">
                    <div class="card mb-1" style="width: 18rem;">
                    <img src="https://static.wikia.nocookie.net/memes-pedia/images/d/de/Gok%C5%AB_le_gana.jpg/revision/latest?cb=20210322171158&path-prefix=es" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Producto</h5>
                    <p class="card-text">Info</p>
                    <a href="#" class="btn btn-warning col-6">Editar</a>
                    <a href="#" class="btn btn-danger col-6">Eliminar</a>
                    <a href="#" class="btn btn-primary col-6">Detalles</a>
                    </div>
                </div>
                </div><?php
                } ?>





            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>