<?php
/*$host="curytravez.mysql.database.azure.com";
$user="curytravez@curytravez";
$password="Atahualpacury1993";
$db="registrodb";
$con = new mysqli($host,$user,$password,$db);
*/


 // Initialize connection variables.
   // $host = "curytravez.postgres.database.azure.com";
    //$database = "registroDB";
    //$user = "curytravez@curytravez";
    //$password = "Atahualpacury1993";

    // Initialize connection object.
//self::$conexion = new PDO("pgsql:host=curytravez.postgres.database.azure.com" . self::$dbHost . ";port=5432;dbname=registroDB" . self::$dbName . ";user=curytravez@curytravez" . self::$dbUsername . ";password=Atahualpacury1993" . self::$dbUserPassword . ";sslmode=require");


class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=curyservidor.mysql.database.azure.com;dbname=myapp;charset=utf8', 'curytravez@curyservidor', 'Atahualpacury1993');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        return $pdo;
    }
}

?>
