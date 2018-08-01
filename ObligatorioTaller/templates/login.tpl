<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        
        <!-- Boostrap -->
        <link href="Librerias/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Librerias/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        
     </head>
     <body>
    <div > 
         {include file="cabezal.tpl"}
        <h1></h1>
        <br>
        <form method="POST" action="procesoLogin.php" class="col-md-6 col-md-offset-3">
            
            <div class="form-group">
                <label for="txtUsuario">Usuario: </label> 
                <input type="text" id="txtUsuario" name="txtUsuario" class="form-control" value="{$usuario}"/> 
                <p class="" id="errorUser"> </p>
            </div>
            
            <div class="form-group">
                <label for="txtClave">Clave:</label> 
                 <input type="password" id="txtClave" name="txtClave" class="form-control" value=""/>
                <p class="" id="errorPassUser"> </p>
            </div>
            
            <br/>
           
            <input type="submit" value="Ingresar al Sistema" class="btn-primary btn-lg"/>
        </form>
        {if $mensaje neq "" }
            <div class="caja-azul">
                {$mensaje}
            </div>
        {/if}
        
    </div>
    </body>
</html>