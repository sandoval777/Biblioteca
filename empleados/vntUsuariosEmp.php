<html>
    <head></head>
    <body>
        <form name="Accion" action="" method="post">
        <label>Numero de trabajador</label>
        <input type="text" name="txtNumero_Trabajador"/>
        <label>Tipo de Empleado</label>
        <select name="Tipo_de_Empleado">
            <option value="0">Docente</option>
            <option value="1">Administrativo</option>
        </select>
        <label>Nombre</label><input type="text" name="txtNombre"/><br>
        <label>Apellido Paterno</label><input type="text" name="txtApellido_Paterno"/><br>
        <label>Apellido Materno</label><input type="text" name="txtApellido_Materno"/><br>
        <label>Telefono</label><input type="text" name="txtTelefono"/><br>
        <label>Correo Electronico</label><input type="text" name="txtCorreo"/><br>
        <br>
        <input type="submit" name="Buscar" value="Buscar" onclick="javascript: form.action = 'http://Localhost/Biblioteca/sentencias/UsuariosEmp/busca.php';"/>
        <input type="submit" name="Nuevo"  value="Nuevo"  onclick="javascript: form.action = 'http://Localhost/Biblioteca/sentencias/UsuariosEmp/nuevo.php';"/>
        <input type="submit" name="Editar" value="Editar" onclick="javascript: form.action = 'http://Localhost/Biblioteca/sentencias/UsuariosEmp/edita.php';"/>
        <input type="submit" name="Borrar" value="Borrar" onclick="javascript: form.action = 'http://Localhost/Biblioteca/sentencias/UsuariosEmp/borra.php';"/>
        <input type="submit" name="Volver" value="Volver" onclick="javascript: form.action = 'http://Localhost/Biblioteca/vntPrincipal.php';"/>
        </form>
    </body>
</html>
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor. 
 */

