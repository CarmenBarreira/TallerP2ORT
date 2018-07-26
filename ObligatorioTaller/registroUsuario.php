<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <h1> Registro de usuario</h1>
            <br><br>

            <form method="POST" action="guardarUsuario.php" id="formUsuario" >

                <div class="form-group">
                    <label for="txtNombre">Nombre Completo:</label> 
                    <input type="text" id="txtNombre" name="txtNombre" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtEmail">Email:</label> 
                    <input type="text" id="txtEmail" name="txtEmail" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtPassword">Contraseña:</label> 
                    <input type="text" id="txtPassword" name="txtPassword" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtCorreo"> Administrador </label>
                    <input type="checkbox" id="chkAdmin" name="chkAdmin" value="S">
                </div>

                <input type="button" value="Guardar" id="btnGrabar" class="btn-primary btn-lg">
                <input type="reset" value="Cancelar" id="btnCancelar" class="btn-primary btn-lg">
            </form>
        </div>

    </body>
</html>

