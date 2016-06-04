<?php
$user = 'kasiakuba';
$password = 'invitro';
$dbname = 'in_vitro_pz_cba_pl';
$host = 'mysql.cba.pl';

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

$a11 = $_POST['tyton'];
$a12 = $_POST['alkohol'];
$a13 = $_POST['telefon'];
$a14 = $_POST['promieniowanie'];
$a15 = $_POST['stres'];

$suma = $a11 + $a12 + $a13 + $a14 + $a15;
//wierzacy. niewierzacy za i przeciw
// podzial kobiet i mezczyzn
//wierzacy od kiedy zycie dziecka

$sql2 = "SELECT answer,pytanie1,pytanie2, pytanie3, pytanie4, pytanie5, pytanie6, pytanie7, pytanie8, pytanie9, pytanie10 FROM ankieta";
$result2  = $conn->query($sql2);




$sql = "INSERT INTO ankieta (pytanie1,pytanie2,pytanie3,pytanie4,pytanie5,pytanie6,pytanie7,pytanie8,pytanie9,pytanie10) VALUES ('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";

$numberOfSurveys = "SELECT COUNT(answer) from ankieta";

$result3 = mysql_query($numberOfSurveys ,$conn);


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



$counterMale = 0;
$counterFemale = 0;
$numberOfSurveys = 0;
$strCounterMale = strval($counterMale);
$strCounterFemale = strval($counterFemale);
$strNumberOfSurveys = strval($numberOfSurveys);



if( $conn->query($sql) ) {




   if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {

        switch ($row["pytanie5"]) {
           case 'm':
              $counterMale += 1;
              break;
              case 'k':
                 $counterFemale += 1;
                 break;

        }
    }


} else {
    echo "0 results";
}

$numberOfSurveys = $counterMale + $counterFemale;



   echo "<html lang=\"en\">
   <head>
   <meta charset=\"utf-8\">
   <title>Ankieta na temat in vitro.  </title>

   <link rel=\"stylesheet\" href=\"css/main.css\" />

   <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
    <script type=\"text/javascript\">

    google.load('visualization', '1', {'packages':['corechart']});

    google.setOnLoadCallback(drawChart);
    var counter = $strNumberOfSurveys;
    var counter1 = $strCounterFemale;
    function drawChart() {

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable([

             ['Kobiet',  counter1 * 100],
             ['Mężczyzn',(counter - counter1) * 100],

      ]);
      var options = {
           title: 'My Weekly Plan',
          is3D: 'true',
          width: 800,
          height: 600
        };
      // Instantiate and draw our chart, passing in some options.
      // Do not forget to check your div ID
      var chart = new google.visualization.PieChart(document.getElementById(\"chart_div\"));
      chart.draw(data, options);
    }
    </script>

   </head>

   <body>

   <div class = \"title\">
   <p>
   Dziękujemy za wypełnienie ankiety<br>
   $result
   </p>
   <p>

   </div>

   <div id=\"chart_div\"></div>
   </body>



   </html>";

} else {
   echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();

?>
