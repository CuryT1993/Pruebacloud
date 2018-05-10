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


 
 //dbname
// PHP Data Objects(PDO) Sample Code:
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "{curytravez.mysql.database.azure.com}", "{curytravez@curytravez}", {Atahualpacury1993}, {registroDB}, 3306);


?>
