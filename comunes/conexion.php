<?php 

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="adso1";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("No hay conexión: ".mysqli_connect_error());
}

?>