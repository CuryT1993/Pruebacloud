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
try {
    $conn = new PDO("sqlsrv:server = tcp:curytravez.database.windows.net,1433; Database = registroDB", "curytravez", "{Atahualpacury1993}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "curytravez@curytravez", "pwd" => "{Atahualpacury1993}", "Database" => "registroDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:curytravez.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);




?>
