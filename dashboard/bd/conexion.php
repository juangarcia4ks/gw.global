<?php
 class Conexion{
     public static function Conectar(){
         define('servidor', 'mysql.juan-garcia-dev.svc.cluster.local');
         define('nombre_bd', '$MYSQL_DATABASE');
         define('usuario', '$MYSQL_USER');
         define('password', '$MYSQL_PASSWORD');         
         $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
         
         try{
            $conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password, $opciones);             
            return $conexion; 
         }catch (Exception $e){
             die("El error de Conexión es :".$e->getMessage());
         }         
     }
     
 }
?>
