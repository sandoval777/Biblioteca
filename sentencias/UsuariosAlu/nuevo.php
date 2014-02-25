<?php
include_once $_SERVER["DOCUMENT_ROOT"] .'/Biblioteca/sentencias/Conexion.php';
$Matricula = $_POST['txtMatricula'];
$Nombre = $_POST['txtNombre'];
$APaterno=$_POST['txtApellidoPaterno'];
$AMaterno=$_POST['txtApellidoMaterno'];
$Telefono = $_POST['txtTelefono'];
$Correo_Electronico = $_POST['txtCorreo_Electronico'];
$Carrera = $_POST['Carrera'];
if(trim($Matricula)==NULL){
    echo 'La Matricula es Obligatoria';
    echo '<a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
}else{
    if(trim($Nombre)==NULL){
        echo 'El Nombre es Obligatorio';
        echo '<a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
    }else{
        if(trim($APaterno)==NULL){
            echo'El Apellido Paterno es obligatorio';
            echo '<a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
        }else{
            if(trim($AMaterno)==NULL){
                echo 'El Apellido Materno es obligatorio';
                echo '<a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
            }  else {
                 try {
    $Query2 = 'Insert into alumnos values ('.$Matricula.', (Select num_carrera from carreras where cve_carrera="'.$Carrera.'"));';
    $Query1 = "Insert into persona values (".$Matricula.", '".$Nombre."', '".$APaterno."', '".$AMaterno."','".$Telefono."', '".$Correo_Electronico."', ".$Matricula.", 0);";   
    if(mysql_query($Query1)){
    if(mysql_query($Query2)){
        echo 'El usuario ha sido creado';
        echo '<br><a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
    } else {
        echo 'La Matricula ingresada ya existe </br>';        
        echo '<a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
    } 
    }else{
        echo 'La Matricula ingresada ya existe </br>';        
        echo '<a href="http://localhost/Biblioteca/vntPrincipal.php"><input type="submit" value="Aceptar"></a>';
    }   
} catch (Exception $exc) {
    echo $exc->getMessage();
    mysqli_error();
}
            }
        }
    }

mysql_close($link);   
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

