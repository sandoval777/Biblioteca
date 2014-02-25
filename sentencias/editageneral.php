<?php
$link = include_once 'Conexion.php';
$Institucion = $_POST['txtId_Institucion'];
$Direccion = $_POST['txtDireccion'];
$Telefono = $_POST['txtTelefono'];
$Encargado = $_POST['txtEncargado'];
$Ciudad = $_POST['txtCiudad'];
$Estado = $_POST['txtEstado'];
$Cargo_Diario = $_POST['txtCargo_Diario'];
if (intval($Institucion)>0) {
    if (doubleval($Cargo_Diario)>0) {
        $result = mysql_query("update general set
        id_unidep='$Institucion',direccion='$Direccion',telefono='$Telefono', encargado='$Encargado', "
        . "ciudad= '$Ciudad', estado='$Estado', cargo_diario=$Cargo_Diario where id_unidep>0;");
        echo "<br><b>Los Datos generales han sido actualizados</b>";
        echo "<script language='javascript'>window.location='http://localhost/Biblioteca/vntPrincipal.php'</script>";
    } else {
        echo 'El cargo dario debe ser un numero decimal positivo';
    }
} else {
    echo 'El numero de institucion debe ser un entero positivo';
}
?>