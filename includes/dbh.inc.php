
<?php
//This file is created for connection of database of login page
 //The below line gives the server name of local databse xampp php my admin
 $dbServername = "localhost";
 //The below line gives the username of my local database xampp
 $dbUsername = "root";
 //The below line says, for xampp local databse default password is nothing...
 $dbPassword = "";
 //The below line gives name of database...
$dbName = "database";


//for running the database connection,Here I am using MYSQLi to connect to databse
$conn = mysqli_connect($dbServername, $dbUsername,  $dbPassword, $dbName);