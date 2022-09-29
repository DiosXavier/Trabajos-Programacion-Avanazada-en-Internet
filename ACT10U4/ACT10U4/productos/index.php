
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
                    <button class="btn btn-info float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Añadir producto
                    </button>
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
                    <a href="http://localhost/ACT9U4/productos/detalles.php" class="btn btn-primary col-6">Detalles</a>
                    </div>
                    </div>
                    </div>
                    <?php endforeach;?>
                    </div>
                    </div>


            </div>
        </div>
        


        <input type="buton" value="create">

        <form methods="post" action="">

        </form>

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
        <!---AÑADIR--->
        
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Productos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form methods="post" action="create">
                <div class="col-med-3">
                <fieldset>
                    <label >
                        Nombre de producto:
                    </label>
                    <input type="name" v-model="name" name="name" value=""><br>
                    <br>
                    <label>
                        Slug:
                    </label>
                    <input type="slug" v-model="slug" name="slug" value=""><br>
                    <label>
                        Descripcion:
                    </label>
                    <input type="description" v-model="description" name="description" value=""><br>
                    <label>
                        Features:
                    </label>
                    <input type="feature" v-model="feature" name="feature" value=""><br>
                    <label>
                        Id de Marca:
                    </label>
                    <input type="brand_id" v-model="brand_id" name="brand_id" value=""><br>
                </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
            </div>
        </div>
        </div>

        <!--SCRIPTS-->
        <?php include "../layouts/script.template.php"; ?>

    </body>
</html>