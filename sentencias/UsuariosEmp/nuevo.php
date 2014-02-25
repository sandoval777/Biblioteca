<?php
include $_SERVER["DOCUMENT_ROOT"] .'/Biblioteca/sentencias/Conexion.php';
$Id_Trabajador=$_POST['txtNumero_Trabajador'];
$Tipo = $_POST['Tipo_de_Empleado'];
$Nombre = $_POST['txtNombre'];
$APaterno = $_POST['txtApellido_Paterno'];
$AMaterno = $_POST['txtApellido_Materno'];
$Telefono = $_POST['txtTelefono'];
$Correo_Electronico = $_POST['txtCorreo'];
$Query1 = "Insert into personal values (".$Id_Trabajador.", ".$Tipo.");";
$Query2 = "Insert into persona values (".$Id_Trabajador.", '".$Nombre."', '".$APaterno."', '".$AMaterno."', '".$Telefono."', '".$Correo_Electronico."', 0, ".$Id_Trabajador.")";
if(trim($Id_Trabajador)==NULL){
    echo 'Por favor ingrese el numero de trabajador';
    echo '<a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
}  else {
    if (trim($Nombre)==NULL) {
    echo 'Por favor ingrese el nombre';    
    echo '<a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
    }else{
        if(trim($APaterno)==NULL){
            echo 'Por favor ingrese el apellido paterno';
            echo '<a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
        }else{
            if(trim($AMaterno)==NULL){
                echo'Por favor ingrese el apellido materno';
                echo '<a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
            }else{
                try {
                    if(mysql_query($Query1)){
                        if(mysql_query($Query2)){
                            echo 'El usuario ha sido creado';
                            echo '<br><a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
                        }else{
                            echo 'El numero de empleado ingresado ya existe 2</br>';        
        echo '<a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
                        }
                    }else{
                        echo 'El numero de empleado ingresado ya existe </br>';        
        echo '<a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
                    }
                } catch (Exception $exc) {
                    echo $exc->getMessage();
                    mysql_error();
                }
                        }
        }
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

