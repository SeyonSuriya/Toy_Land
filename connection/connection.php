<?php

$server = 'localhost:3308';
$username = 'root';
$password = 'admin';
$database = 'Toyslk.com';

$conn = new mysqli($server, $username, $password, $database);
if ($conn) {
    // echo ("Database connected successfully.");
}else{
    echo ("database connection error !");
}

?>