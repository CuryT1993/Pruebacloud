<?php
/*$host="10.129.180.91";
$user="root";
$password="curytravez";
$db="registroDB";
$con = new mysqli($host,$user,$password,$db);
*/


 // Initialize connection variables.
   // $host = "curytravez.postgres.database.azure.com";
    //$database = "registroDB";
    //$user = "curytravez@curytravez";
    //$password = "Atahualpacury1993";

    // Initialize connection object.
//self::$conexion = new PDO("pgsql:host=curytravez.postgres.database.azure.com" . self::$dbHost . ";port=5432;dbname=registroDB" . self::$dbName . ";user=curytravez@curytravez" . self::$dbUsername . ";password=Atahualpacury1993" . self::$dbUserPassword . ";sslmode=require");

$host="curytravez.postgres.database.azure.com";
$port="5432";
$user="curytravez@curytravez";
$pass="Atahualpacury1993";
$dbname="registroDB";

$connect = pg_connect("host=$host, port=$port, user=$user, 
pass=$pass, dbname=$dbname");

if(!$connect)
echo "<p><i>No me conecte</i></p>";
else
echo "<p><i>Me conecte</i></p>";

pg_close($connect)

?>
