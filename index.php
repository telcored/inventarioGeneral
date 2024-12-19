<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="GustavoYanez-TelcoredLtda">
    <meta name="description" content ="Para llevar control de inventarios y precio de repuestos de bicicletas">
    <meta name="keywords" content="Taller, Inventario, Bicicletas">

    <!--titulo-->

    <title>Tareas de Telcored</title>
    
    <!--bootstrap-->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   


</head>
<body>

    <br/>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="imagenes/logo.png" class="img-fluid" alt="Imagen de Telcored, desarrollador del software">
            </div>

            <div class="col-lg-8 ">
                <h1 class="text-center "></h1>
            </div>

        </div>

    </div>





    <br/>
    <div class="container">

        <div class="row">
            
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" id="frm">

                            <div class="form-group">
                                <label for="">Codigo</label>

                                <input type="hidden" name="idp" id="idp" value="">

                                <input type="text" name="codigo" id="codigo" placeholder="codigo" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Producto</label>
                                <input type="text" name="producto" id="producto" placeholder="producto" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Precio</label>
                                <input type="text" name="precio" id="precio" placeholder="precio" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <input type="text" name="cantidad" id="cantidad" placeholder="cantidad" class="form-control">
                            </div>

                            <div class="form-group">
                                <br/>
                                <input type="button" value="Registrar" id="registrar" class="btn btn-primary btn-block">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">

                <div class="row">
                    <div class="col-lg-6 ml-auto">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="buscar"></label>
                                <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control">
                            </div>
                        </form>

                    </div>
                </div>

                <br/>
                <table class="table table-hover table-responsive table-striped table-bordered">
                    <thead class="table-secondary">
                        <tr>
                            <th>ID</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="resultado">

                    </tbody>

                </table>

            </div>
        </div>
    </div>
















<!--esto es de bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src ="script.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>


</body>
</html>