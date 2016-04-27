<?php
$user = 'root';
$password = 'root';
$dbname = 'invitro';
$host = 'localhost';

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error) {
   die("Connection failed: " .$conn->connect_error);
}




   $c1 = $_POST['popiera'];


   $sql = "INSERT INTO ankieta (pytanie1) VALUES ('$c1')";







   if($conn->query($sql) === TRUE) {
      echo "New record created successfully";
   } else {
      echo "Error: " .$sql . "<br>" . $conn->error;
   }





$conn->close();

 ?>
