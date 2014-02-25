<?php
 $link=include_once 'sentencias/Conexion.php';
           $Query = "Select * from general;";            
                $Consulta = mysql_query($Query);
                try {                   
                        while( $row = mysql_fetch_array($Consulta) ){?>
        <form name="editaGeneral" action="sentencias/editageneral.php" method="post" accept-charset="utf-8">            
                        <label>Numero de Institucion</label><input type="text" name="txtId_Institucion" maxlength="4" value ="<?php echo "$row[0]";?>"><br>
                        <label>Direccion</label><input type="text" name="txtDireccion" maxlength="60" value ="<?php echo "$row[1]"?>"><br>
                        <label>Telefono</label><input type="text" name="txtTelefono" maxlength="20" value ="<?php echo "$row[2]";?>"><br>
                        <label>Encargado</label><input type="text" name="txtEncargado" maxlength="60" value ="<?php echo "$row[3]";?>"><br>
                        <label>Ciudad</label><input type="text" name="txtCiudad" maxlength="45" value ="<?php echo "$row[6]";?>"><br>
                        <label>Estado</label><input type="text" name="txtEstado" maxlength="45" value ="<?php echo "$row[5]";?>"><br>
                        <label>Cargo Diario</label><input type="text" name="txtCargo Diario" value ="<?php echo "$row[4]";?>">
                        <br>
                        <input type="submit" value="Edita">                        
        </form>
            <a href="vntPrincipal.php"><input type='submit' name='Volver' value='Volver'></a>
            <?php                   
                        }                        
                } catch (Exception $exc) {
                    echo 'Aqui'.$exc;
                }
                mysql_close($link);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
    <body>
        
        <form name="login" action="sentencias/editageneral.php" method="post" accept-charset="utf-8">
        
        </form>
        
    </body>
</head>
</html>

