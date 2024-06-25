<?php
class Cconexion {
 function conexionBD(){
    $host = 'localhost';
    $dbname = 'dbprueba';
    $username = 'sserver';
    $password ='hola1234';
    $puerto = 1433;

    try{
        $conn = new PDO("sqlsrv:Server=$host,$puerto;Database=$dbname",$username,$password);
        echo "se conecto a la base de datos";

    }catch(PDOEc){


    }


 }

}

?>