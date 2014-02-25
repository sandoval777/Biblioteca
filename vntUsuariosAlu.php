<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuarios del Sistema</title>
        <script>
        function Reset(){
            document.Accion.txtMatricula.defaultValue="r";
            document.Accion.txtNombre.defaultValue="";
            document.Accion.txtApellidoPaterno.defaultValue="";
            document.Accion.txtApellidoMaterno.defaultValue="";
            
    }
        </script>       
    </head>
    <body>
        <form name="Accion" action="" method="Post">            
            <label>Matricula</label><input type="text" name="txtMatricula" maxlength="8"><br>
            <label>Nombre</label><input type="text" name="txtNombre" maxlength="20"><br>
            <label>Apellido Paterno</label><input type="text" name="txtApellidoPaterno" maxlength="20"><br>
            <label>Apellido Materno</label><input type="text" name="txtApellidoMaterno" maxlength="20"><br>
            <label>Telefono</label><input type="text" name="txtTelefono" maxlength="15"><br>
            <label>Correo Electronico </label><input type="text" name="txtCorreo_Electronico" maxlength="40"><br>               
            <label>Carrera</label>            
            <select name="Carrera">                
                <?php                
                try {
                    include_once 'sentencias/Conexion.php';
                    $Consulta = mysql_query("Select cve_carrera from carreras;");
                    while ($fila = mysql_fetch_row($Consulta)) {
                        echo "<option value ='" . $fila[0] . "'>" . $fila[0] . "</option>";
                    }
                } catch (Exception $exc) {
                    echo $exc->getMessage();
                }
                ?>
            </select><br>            
            <br>            
            <input type="submit" name="Buscar"  value="Buscar" onclick="Buscar(); "/>
            <div id="resultado"></div>
            <input type="submit" name="Guardar" value="Guardar"onclick="javascript: form.action = 'sentencias/UsuariosAlu/nuevo.php';"/>                        
            <input type="submit" name="Editar"  value="Editar" onclick="javascript: form.action = 'sentencias/UsuariosAlu/edita.php';"/>
            <input type="submit" name="Limpiar" value="Limpiar"onclick="Reset()"/>
            <input type="submit" name="Borrar"  value="Borrar" onclick="javascript: form.action = 'sentencias/UsuariosAlu/borra.php';"/>
            <input type="submit" name="Volver"  value="Volver" onclick="javascript: form.action = 'vntPrincipal.php';"/>
        </form>                
    </body>
</html>