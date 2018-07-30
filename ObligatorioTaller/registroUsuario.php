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
        <script src="registroUsuario.js" type="text/javascript"></script>

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
                    <label for="txtNombreUsuario">Nombre Completo:</label> 
                    <input type="text" id="txtNombreUsuario" nametxtNombreUsuario value="" class="form-control">
                    <p class="" id="errorNombreU"> </p>
                </div>
                <div class="form-group">
                    <label for="txtEmailUsuario">Email:</label> 
                    <input type="text" id="txtEmailUsuario" name="txtEmailUsuario" value="" class="form-control">
                     <p class="" id="errorEmailU"> </p>
                </div>
                <div class="form-group">
                    <label for="txtPassword">Contraseña:</label> 
                    <br>
                    <input type="password" id="txtPassword" name="txtPassword" value="" class="col-xs-8">
                    <input type="checkbox" onclick="mostrarPassword()" class="col-xs-1"> Mostrar Contraseña
                    <p class="" id="errorPasswordU"> </p>
                </div>
                <div class="form-group">
                    <label for="chkAdmin"> Administrador </label>
                    <input type="checkbox" id="chkAdmin" name="chkAdmin" value="S">
                </div>

                <input type="button" value="Guardar" id="btnGrabarUsuario" class="btn-primary btn-lg">
                <input type="reset" value="Cancelar" id="btnCancelarUsuario" class="btn-primary btn-lg">
            </form>
        </div>

    </body>
</html>

