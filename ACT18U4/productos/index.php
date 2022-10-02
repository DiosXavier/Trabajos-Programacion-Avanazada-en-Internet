<?php 
    include '..\app\ProdController.php';
      $p = new ProdController();
      $data = $p->getTodo();
      $objetos = json_decode($data)->data;
      #print_r($objetos);
  ?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "../layouts/head.template.php"; ?>
    </head>
    <body>
        <!--NAVBAR-->
        <?php include "../layouts/nav.template.php"; ?>
        <!--CONTENEDOR-->
        <div id="Cuerpo" class="container">

            <div class="container-fluid">

                <div class="row m-2">

                    <div div class="col">
                        
                        <h4>Productos:</h4>
                    </div> 
                    <div class="col">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"class="btn btn-primary float-end">Agregar Producto.</a>
                </div>
                </div>


                    <div class="col-lg-14 col-sm-12">
                    <div class="row">
                    <?php foreach ($objetos as $producto):?> 
                    <div class="col md-6" >
                    <div class="card mb-1" style="width: 18rem;">
                    <img src="<?php echo $producto->cover; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $producto->name; ?></h5>
                    <p class="card-text"><?php echo $producto->description; ?></p>
                    <a href="#" onclick="edit(this)" class="btn btn-warning col-6">Editar</a>
                    <a href="#" onclick="remove(this)" class="btn btn-danger col-6">Eliminar</a>
                    <a href="../productos/detalles.php" class="btn btn-primary col-6">Detalles</a>
                    </div>
                    </div>
                    </div>
                    <?php endforeach;?>
                    </div>
                    </div>


            </div>
        </div>

        <script type="text/javascript">
            function remove(target){
                Swal.fire({
                icon: 'error',
                title: 'Eliminacion...',
                text: 'Se esta eliminando producto.'
                })
            }
            function edit(target){
                Swal.fire({
                title: 'Editar...',
                text: 'Usted selecciono editar.'
                })
            }
            function agregar(target){
                Swal.fire({
                title: 'Agregar...',
                text: 'Usted selecciono agregar.'
                })
            }
        </script>

        <!--SCRIPTS-->
        <?php include "../layouts/script.template.php"; ?>

        <!--SCRIPT DE MODAL-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> 
        
        <!---AÑADIR--->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Producto.</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form  method="POST" action="../app/ProdController.php" enctype="multipart/form-data" >       
            <div class="modal-body">
            <div class="input-group">
                <span class="input-group-text">Nombre del producto</span>
                <textarea name='name' class="form-control" aria-label="With textarea"></textarea>
            </div>
            <div class="input-group">
                <span class="input-group-text">Slug del producto</span>
                <textarea class="form-control" name="slug" aria-label="With textarea"></textarea>
            </div><div class="input-group">
                <span class="input-group-text">Caracteristicas del producto</span>
                <textarea class="form-control" name="features" aria-label="With textarea"></textarea>
            </div>

            <div class="input-group">
                <span class="input-group-text">Descripcion del producto</span>
                <textarea name='description' class="form-control" aria-label="With textarea"></textarea>
            </div>

            <div class="input-group">
                <span class="input-group-text">Marca ID (BRAND_ID)</span>
                <textarea name='brand_id' class="form-control" aria-label="With textarea"></textarea>
            </div><br>
            <div class="input-group">
         <h8>Subir imagen desde su dispositivo:</h8>
         <input name="uploadedfile" type="file" />
            </div>
            <input type="hidden" name="action" value="create">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        </div>
        </div>
        </div>

    </body>
</html>


<!--Link de POSTMAN para las acrtividades-->

<!--https://www.postman.com/universal-flare-897758/workspace/api-store-crud/collection/821718-5a5941b7-dd31-42b8-95f7-57d7d1f0c312?action=share&creator=821718-->