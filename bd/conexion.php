<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'mysql-csn.csn.svc.cluster.local');
        define('nombre_bd', 'login');
        define('usuario', 'root');
        define('password', 'XWN3tm4kTJmXkWqb');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}