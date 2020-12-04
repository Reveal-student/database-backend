<?php

include_once 'includes/dbh.inc.php';

//here we are accessing data given by user in the form and storing into variables for insertion into database
$name = mysqli_real_escape_string($conn, $_POST['name']);
$rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$branch = mysqli_real_escape_string($conn, $_POST['branch']);
$year = mysqli_real_escape_string($conn, $_POST['year']);
$cgpa = mysqli_real_escape_string($conn, $_POST['cgpa']);
$address = mysqli_real_escape_string($conn, $_POST['address']); 





// Here we are inserting data into database
$sql = "INSERT INTO students (name, rollno, email, gender, contact, dob, branch, year, cgpa, address) VALUES ($name, $rollno, $email,
$gender, $contact, $dob, $branch, $year, $cgpa, $address);";

mysqli_query($conn, $sql);

// The below line is helping us to go to main page.......using header function
header("Location: ../index.php?insert=success");

?>