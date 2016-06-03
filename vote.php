<?php
$user = 'kasiakuba';
$password = 'invitro';
$dbname = 'in_vitro_pz_cba_pl';
$host = 'mysql.cba.pl';

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error) {
   die("Connection failed: " .$conn->connect_error);
}

$a1 = mysql_real_escape_string($_POST['popiera']);
$a2 = mysql_real_escape_string($_POST['zajscie']);
$a3 = mysql_real_escape_string($_POST['zycie']);
$a4 = mysql_real_escape_string($_POST['wiara']);
$a5 = mysql_real_escape_string($_POST['plec']);
$a6 = mysql_real_escape_string($_POST['wiek']);
$a7 = mysql_real_escape_string($_POST['zamieszkanie']);
$a8 = mysql_real_escape_string($_POST['wyksztalcenie']);
$a9 = mysql_real_escape_string($_POST['dzieci']);
$a10 = mysql_real_escape_string($_POST['zwiazek']);

$a11 = $_POST['tyton'];
$a12 = $_POST['alkohol'];
$a13 = $_POST['telefon'];
$a14 = $_POST['promieniowanie'];
$a15 = $_POST['stres'];

$suma = $a11 + $a12 + $a13 + $a14 + $a15;



$sql = "INSERT INTO ankieta (pytanie1,pytanie2,pytanie3,pytanie4,pytanie5,pytanie6,pytanie7,pytanie8,pytanie9,pytanie10) VALUES ('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";

$result = "";

switch ($suma) {
   // 0 - 3  Jesteś w świetnej formie. Nie musisz obawiać sie o swoją płodność.
    case ($suma <= 3):
        $result = "Jesteś w świetnej formie. Nie musisz obawiać sie o swoją płodność.";
        break;
   // 4 - 10 Twoj styl życia powininem ulec drobnej zmianie, abyś w przyłości nie był narażony na problemy z płodnością.
    case ($suma <= 10):
        $result = "Twoj styl życia powininem ulec drobnej zmianie, abyś w przyłości nie był narażony na problemy z płodnością.";
        break;
   // 10 - 16 Nie jest dobrze. Stan twojej płodności jest zagrożony.
    case ($suma > 11):
        $result = "Nie jest dobrze. Stan twojej płodności jest zagrożony.";
        break;
}





if($conn->query($sql) === TRUE) {
   echo "<html lang=\"en\">
   <head>
   <meta charset=\"utf-8\">
   <title>Ankieta na temat in vitro.  </title>

   <link rel=\"stylesheet\" href=\"css/main.css\" />
   </head>
   <body>
   <div class = title>
   <p>
   $result
   </p>
   </div>
   </body>
   </html>";

} else {
   echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();

?>
