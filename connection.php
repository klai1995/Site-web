<?php

$host = "localhost";
$user = "root";
$pass = "root";
$bdd = "siteweb";

$conn = new mysqli($host, $user, $pass, $bdd) ;
$db  = mysqli_select_db( $conn, $bdd ) ;
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>

