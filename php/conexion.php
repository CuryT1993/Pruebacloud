<?php
/*$host="10.129.180.91";
$user="root";
$password="curytravez";
$db="registroDB";
$con = new mysqli($host,$user,$password,$db);
*/


 // Initialize connection variables.
    $host = "curytravez.postgres.database.azure.com";
    $database = "registroDB";
    $user = "curytravez@curytravez";
    $password = "Atahualpacury1993";

    // Initialize connection object.
    $connection = pg_connect("host=$host dbname=$database user=$user password=$password")
                or die("Failed to create connection to database: ". pg_last_error(). ".<br/>");

    print "Successfully created connection to database. <br/>";



?>
