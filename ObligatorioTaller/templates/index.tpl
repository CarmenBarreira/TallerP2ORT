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
        <script src="index.js" type="text/javascript"></script>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        
        <!-- Boostrap -->
        <link href="Librerias/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Librerias/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        
        <title></title>
    </head>
    <body>
        {include file="cabezal.tpl"}
       
        <div class ="col-md-12">
            <div  id="seccionRecetas" class="container col-md-6 border thin solid black">
              <h3>Recetas</h3>
              {foreach from=$recetas item=receta} 
              <div class="panel panel-warning">
                  <div class="panel-heading">
                      <a class="panel-title" href="listadoPublicacionesTipo.php"><b>{$receta['titulo']}</b></a> 
                  </div>
                  <div class="panel-body">
                      <p>{$receta['texto']}</p>
                      <p><b>Fecha de publicacion:</b> {$receta['fecha']}</p>
                      <p><b>Categoria:</b> {$receta['nombre']}</p>
                      <p>{$receta['imagen']}</p>
                  </div>
                </div>
              {/foreach}

            </div>
            <div id="seccionNotas" class="container col-md-6 border thin solid black">
              <h3>Notas</h3>
              
              {foreach from=$notas item=nota} 
              <div class="panel panel-warning">
                  <div class="panel-heading">
                      <a class="panel-title" href="#"><b>{$nota['titulo']}</b></a> 
                  </div>
                  <div class="panel-body">
                      <p>{$nota['texto']}</p>
                      <p><b>Fecha de publicacion:</b> {$nota['fecha']}</p>
                      <p>{$nota['imagen']}</p>
                  </div>
                </div>
              {/foreach}
              
              
            </div>
        </div>
        
    </body>
</html>
