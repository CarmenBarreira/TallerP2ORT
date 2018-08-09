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
        <script src="js/registroUsuario.js" type="text/javascript"></script>

        <!-- Boostrap -->
        <link href="Librerias/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Librerias/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    <div class="col-md-6 col-md-offset-3">  
                        <h1> Registro de usuario</h1>

                        <form method="POST" action="guardarUsuario.php" id="formUsuario" >

                            <div class="form-group">
                                <label for="txtEmailUsuario">Email:</label> 
                                <input type="text" id="txtEmailUsuario" name="txtEmailUsuario" value="" class="form-control mx-sm-3">
                                <div id="errorEmailU" name="errorEmailU" class="">   </div>

                            </div>

                            <div class="form-group">
                                <label for="inputPassword6">Password</label>
                                <input type="password" id="txtPassword" class="form-control mx-sm-3" >
                                <div id="errorPassword" class=""></div>
                                <small class="text-muted">
                                    <input type="checkbox" onclick="mostrarPassword()" class="form-check-input"> Mostrar Contraseña
                                </small>
                            </div>

                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlInline"  name="chkAdmin" value="1" />
                                <label class="custom-control-label" for="customControlInline">Administrador</label>
                            </div>
                            <input type="submit" value="Guardar" id="btnGrabarUsuario" class="btn-primary btn-lg">
                            <input type="reset" value="Cancelar" id="btnCancelarUsuario" class="btn-primary btn-lg">
                        </form>
                    </div>
                    <div class="col-sm">
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>

