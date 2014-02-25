<?php
$Servidor = "127.0.0.1:3308";
            $Usuario = "root";
            $Password = "246810";
            $Conectar = mysql_connect($Servidor, $Usuario, $Password);
            if (!($link=$Conectar)) {
                die("".mysql_error());
                exit();
            } 
            if(!( mysql_select_db("biblioteca", $Conectar))){
                echo 'Error al seleccionar Base de datos';
                exit();
            }
            return $link;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

