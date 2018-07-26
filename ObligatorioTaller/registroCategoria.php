<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="Librerias/js/jquery-3.3.1.min.js" type="text/javascript"></script>

        <!-- Boostrap -->
        <link href="Librerias/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Librerias/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>

        <title></title>
    </head>
    <body>

        <div class="col-md-6 col-md-offset-3">  
            <h1> Alta Categoria</h1>
            <br><br>

            <form method="POST" action="guardarUsuario.php" id="formUsuario" >

                <div class="form-group">
                    <label for="txtIdCategoria">Id:</label> 
                    <input type="text" id="txtIdCategoria" name="txtIdCategoria" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtNombreCategoria">Nombre:</label> 
                    <input type="text" id="txtNombreCategoria" name="txtNombreCategoria" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="chkCategoriaEliminada"> Eliminada </label>
                    <input type="checkbox" id="chkCategoriaEliminada" name="chkCategoriaEliminada" value="S">
                </div>

                <input type="button" value="Guardar" id="btnGrabarCategoria" class="btn-primary btn-lg">
                <input type="reset" value="Cancelar" id="btnCancelarCategoria" class="btn-primary btn-lg">
            </form>
        </div>
    </body>
</html>
