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
   $a4 = $_POST['wiara'];
   $a5 = $_POST['plec'];
   $a6 = $_POST['wiek'];
   $a7 = $_POST['zamieszkanie'];
   $a8 = $_POST['wyksztalcenie'];
   $a9 = $_POST['dzieci'];
   $a10 = $_POST['zwiazek'];



   $sql = "INSERT INTO ankieta (pytanie1,pytanie2,pytanie3,pytanie4,pytanie5,pytanie6,pytanie7,pytanie8,pytanie9,pytanie10) VALUES ('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";







   if($conn->query($sql) === TRUE) {
      echo "<html lang=\"en\">
            <head>
               <meta charset=\"utf-8\">
               <title>Ankieta na temat in vitro</title>

               <link rel=\"stylesheet\" href=\"css/main.css\" />
            </head>
            <body>
               <div class = title>
               <p>
                  Dziękujemy za wypełnienie ankiety
               </p>
               </div>
            </body>
      </html>";

   } else {
      echo "Error: " .$sql . "<br>" . $conn->error;
   }





$conn->close();

 ?>
