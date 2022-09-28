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

                    <div class="container-fluid col-sd-10">
                    <div class="card mb-1" style="width: 18rem;">
                    <img src="https://tostitos.com.mx/storage/products/UtMxBgjkEJv3iXENvW3HUxXBcpL6nlnE5qDbPPsS.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Producto</h5>
                    <p class="card-text">Info</p>
                    <a href="#" onclick="edit(this)" class="btn btn-warning col-6">Editar</a>
                    <a href="#" onclick="remove(this)" class="btn btn-danger col-6">Eliminar</a>
                    <a href="http://localhost/Trabajos-Programacion-Avanazada-en-Internet/ACT8U4/productos/#" class="btn btn-primary col-6">Index</a>
                    </div>
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