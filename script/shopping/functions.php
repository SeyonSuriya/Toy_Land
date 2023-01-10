<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
$server='localhost';
$user='root';
$pass='Sha@b991015';
$db='shopping';
    try {
    	return new PDO('mysql:host=' . $server . ';dbname=' . $db . ';charset=utf8', $user, $pass);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}

?>