<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="Librerias/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/registroPublicacion.js" type="text/javascript"></script>
        <!-- Boostrap -->
        <link href="Librerias/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Librerias/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="Librerias/Bootstrap/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>
        <script src="Librerias/Bootstrap/bootstrap-datepicker.min.js" type="text/javascript"></script>

        <title>Alta Publicacion</title>
    </head>
    <body>

        <div class="col-md-6 col-md-offset-3">  
            <h1> Alta Publicación</h1>
            <br><br>

            <form method="POST" action="guardarUsuario.php" id="formPublicacion" >

                <div class="form-group">
                    <label for="txtTituloPublicacion">Titulo:</label> 
                    <input type="text" id="txtTituloPublicacion" name="txtTituloPublicacion" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtTextoPublicacion">Texto:</label> 
                    <input type="text" id="txtTextoPublicacion" name="txtTextoPublicacion" value="" class="form-control">
                </div>

                <div class="form-group"> <!-- Date input -->
                    <label class="control-label" for="date">Fecha Publicacion:</label>
                    <input class="form-control" id="date" name="date" placeholder="DD/MM/AAAA" type="text"/>
                </div>


                <div class="form-group">
                    <label for="txtImagenPublicacion">Imagen:</label> 
                    <input type="text" id="txtImagenPublicacion" name="txtImagenPublicacion" value="" class="form-control">
                </div>


                <div class="form-group">
                    <label for="txtCategoriaPublicacion">Categoria:</label> 

                </div>
                <input type="button" value="Guardar" id="btnGrabarCategoria" class="btn-primary btn-lg">
                <input type="reset" value="Cancelar" id="btnCancelarCategoria" class="btn-primary btn-lg">
            </form>
        </div>
    </body>
</html>
