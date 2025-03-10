<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'expences';

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
    die("lidhja deshtoi: " . $conn->connect_error);
}

?>