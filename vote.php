<?php
$user = 'root';
$password = 'root';
$dbname = 'invitro';
$host = 'localhost';

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error) {
   die("Connection failed: " .$conn->connect_error);
}




   $a1 = $_POST['popiera'];
   $a2 = $_POST['zajscie'];
   $a3 = $_POST['zycie'];
   $a4 = $_POST['popiera'];
   $a5 = $_POST['zajscie'];
   $a6 = $_POST['zycie'];
   $a7 = $_POST['popiera'];
   $a8 = $_POST['zajscie'];
   $a9 = $_POST['zycie'];
   $a10 = $_POST['zycie'];



   $sql = "INSERT INTO ankieta (pytanie1,pytanie2,pytanie3) VALUES ('$a1','$a2','$a3')";







   if($conn->query($sql) === TRUE) {
      echo "New record created successfully";
   } else {
      echo "Error: " .$sql . "<br>" . $conn->error;
   }





$conn->close();

 ?>
