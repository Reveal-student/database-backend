
<?php
include_once 'includes/dbh.inc.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Here I am creating a form to insert data into database 
      As In this project we are going to use python and tkinter,so adjust with those and make changes
      Here,I am using html form to insert data into database -->
      <form action="includes/insert.inc.php" method="POST">
      <input type="text" name="name" placeholder="Name">
      <br>
      <input type="text" name="rollno" placeholder="Roll No">
      <br>
      <input type="text" name="email" placeholder="Email">
      <br>
      <input type="text" name="gender" placeholder="gender">
      <br>
      <input type="text" name="contact" placeholder="Contact">
      <br>
      <input type="text" name="dob" placeholder="Date of birth">
      <br>
      <input type="text" name="branch" placeholder="Branch">
      <br>
      <input type="text" name="year" placeholder="Year">
      <br>
      <input type="text" name="cgpa" placeholder="CGPA">
      <br>
      <input type="text" name="address" placeholder="Address">
      <br>
      <button type="submit" name="submit">SignUp</button>
      </form>





    <?php
    //We are selecting data from database for admin
    //There are two semicolon where one is sql and other one is php.....
    //from table admin of database
    $sql = "SELECT * FROM admin;";
    //here we are fetching data from database
    $result = mysqli_query($conn, $sql);
    //we are checking that data is fecting correctly or not from database and displaying it
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "You are logged in with username ".$row["admin_uid"];
            echo "<br> with password ".$row["admin_pwd"];
        }
    }else{
        echo "Enter the correct Username or Password...";
    }

    //We are selecting data from database for students
    //data from admin table of database
    $sql = "SELECT * FROM students;";
    //here we are fetching data from database
    $result = mysqli_query($conn, $sql);
    //we are checking that data is fetching correctly or not from database and displaying it
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<br>Name of student = ".$row["name"];
            echo "<br>Roll no of student = ".$row["rollno"];
            echo "<br>Email of student = ".$row["email"];
            echo "<br>Gender of student = ".$row["gender"];
            echo "<br>Contact of student = ".$row["contact"];
            echo "<br>Date of birth of student = ".$row["dob"];
            echo "<br>Branch of student = ".$row["branch"];
            echo "<br>Year of student = ".$row["year"];
            echo "<br>CGPA of student = ".$row["cgpa"];
            echo "<br>Address of student = ".$row["address"];
        }
    }
    
    ?>
</body>
</html>
