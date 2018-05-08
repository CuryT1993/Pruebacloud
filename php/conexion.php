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
 private $dbname = "registroDB";
 //host
 private $host = "curytravez.postgres.database.azure.com";
 //user database
 private $user = "curytravez@curytravez";
 //password user
 private $pass = 'Atahualpacury1993';
 //port
 private $port = 5432;
    //instance
 private $dbh;
 
 //connect with postgresql and pdo
 public function __construct()
 {
     try {
         $this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass");
     }
        catch(PDOException $e)
        {
         echo  $e->getMessage();
     }
 
 }
 
 //función para cerrar una conexión pdo
 public function close()
 {
    	$this->dbh = null;
 }
 



?>
