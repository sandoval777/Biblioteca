<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <title></title>
    </head>
    <body>        	       
        <form action="sentencias/Tipo_Usuario.php" method="post" accept-charset="utf-8">
      <fieldset>
       <legend>Selecciona el tipo de Usuario</legend>
       <p align="center">
          <label>Escoge una Opcion</label>            
          <input type = "radio" name = "Tipo_Usuario" id = "Empleado" value = "/empleados/vntUsuariosEmp.php" checked="checked"/>
          <label for = "Empleado">Empleado</label>          
          <input type = "radio" name = "Tipo_Usuario" id = "Alumno" value = "vntUsuariosAlu.php" />
          <label for = "Alumno">Alumno</label>
        </p>       
      </fieldset> 
            <input type="submit" value="Aceptar">
    </form>
        <?php
        
        ?>
    </body>
</html>
