
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
                    <button class="btn btn-info float-end">
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
        </script>

        <!--SCRIPTS-->
        <?php include "../layouts/script.template.php"; ?>

    </body>
</html>