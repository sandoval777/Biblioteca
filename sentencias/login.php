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
        <?php
        ini_set("display_errors", "off");
        ini_set("display_startup_errors", "off");
        error_reporting(0);
        $User = $_POST['User'];
        $Pass = $_POST['Pass'];     
        
        include_once 'Conexion.php';        
        $Query = "Select * from usuarios_sistema where nombre= '" . $User . "' and pass = sha1('" . $Pass . "');";
        $Consulta = mysql_query($Query);
        try {
            if (mysql_result($Consulta, 0)) {
                echo "<script language='javascript'>window.location='http://localhost/Biblioteca/vntPrincipal.php'</script>";
            } else {
                echo 'Usuario o Contraseña invalidos';                
                echo "<script language='javascript'>window.location='http://localhost/Biblioteca/index.php'</script>";
            }
        } catch (Exception $exc) {
            echo '' . $exc;
        }
        mysql_close($link)
        ?>
    </body>
</html>
