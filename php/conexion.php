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


 
 //dbname
// PHP Data Objects(PDO) Sample Code:
/*$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "{curytravez.mysql.database.azure.com}", "{curytravez@curytravez}", {Atahualpacury1993}, {registrodb}, 3306);
*/


//$con=mysqli_init(); [mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL);] mysqli_real_connect($con, "curytravez.postgres.database.azure.com","curytravez@curytravez", "Atahualpacury1993", "registrodb", "3306");


    // Ejemplo de conexión a base de datos MySQL con PHP.
    //
    // Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
    
    // Datos de la base de datos
    $usuario = "curytravez@curytravez";
    $password = "Atahualpacury1993";
    $servidor = "curytravez.postgres.database.azure.com";
    $basededatos = "registrodb";
    
    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
    
    // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    // establecer y realizar consulta. guardamos en variable.

    mysqli_close( $conexion );

?>
