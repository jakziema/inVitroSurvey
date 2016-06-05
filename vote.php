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






$sql = "INSERT INTO ankieta (pytanie1,pytanie2,pytanie3,pytanie4,pytanie5,pytanie6,pytanie7,pytanie8,pytanie9,pytanie10) VALUES ('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";

$sql2 = "SELECT answer,pytanie1,pytanie2, pytanie3, pytanie4, pytanie5, pytanie6, pytanie7, pytanie8, pytanie9, pytanie10 FROM ankieta";
$result2  = $conn->query($sql2);

// rozkład odpowiedzi osób wierzących na pytanie czy popierają invitro
$sqlBelievers = "SELECT (pytanie1) from ankieta WHERE pytanie4 = \"tak\" ";
$believersResult = $conn->query($sqlBelievers);

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

$counterBelievers = 0;
$counterNonBelievers = 0;

$counterBelieversYesInVitro = 0;
$counterBelieversNoInVitro = 0;
$counterBelieversNmInVitro = 0;

$numberOfSurveys = 0;




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

         switch ($row["pytanie4"]) {
            case 'tak':
            $counterBelievers += 1;
            break;
            case 'nie':
            $counterNonBelievers += 1;
            break;
         }
      }


   } else {
      echo "0 results";
   }

   if ($believersResult->num_rows > 0 ) {
      while ($row = $believersResult->fetch_assoc()) {
         switch ($row["pytanie1"]) {
            case 'tak':
            $counterBelieversYesInVitro += 1;
            break;
            case 'nie':
            $counterBelieversNoInVitro += 1;
            break;
            case 'nm':
            $counterBelieversNmInVitro += 1;
            break;
         }
      }
   }
   $numberOfSurveys = $counterMale + $counterFemale;



   echo "<html lang=\"en\">
   <head>
   <meta charset=\"utf-8\">
   <link rel=\"stylesheet\" href=\"css/main.css\" />
   <title>Ankieta na temat in vitro.  </title>

   <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
   <script type=\"text/javascript\">
   google.charts.load('current', {'packages':['corechart']});
   google.charts.setOnLoadCallback(drawPieChartSex);
   google.charts.setOnLoadCallback(drawPieChartBelievers);
   google.charts.setOnLoadCallback(drawPieChartBelieversInVitro);

   function drawPieChartBelieversInVitro() {

      var data = google.visualization.arrayToDataTable([
         ['Odpowiedz', 'Ilosc osob'],
         ['Tak', $counterBelieversYesInVitro],
         ['Nie',    $counterBelieversNoInVitro],
         ['Nie mam zdania', $counterBelieversNmInVitro]
      ]);

      var options = {
         title: 'Rozkład wierzących i niewierzących'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechartBelieversInVitro'));

      chart.draw(data, options);
   }

   function drawPieChartBelievers() {

      var data = google.visualization.arrayToDataTable([
         ['Wierzacy', 'Ilosc osob'],
         ['Wierzący', $counterBelievers],
         ['Niewierzący',    $counterNonBelievers]
      ]);

      var options = {
         title: 'Rozkład wierzących i niewierzących'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechartBelievers'));

      chart.draw(data, options);
   }

   function drawPieChartSex() {

      var data = google.visualization.arrayToDataTable([
         ['Plec', 'Ilosc osob'],
         ['Mężczyźni', $counterMale],
         ['Kobiety',    $counterFemale]
      ]);

      var options = {
         title: 'Rozkład płci ankietowanych'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechartSex'));

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
   </div>

   <div id=\"piechartSex\" style=\"width: 900px; height: 500px;\"></div>
   <div id=\"piechartBelievers\" style=\"width: 900px; height: 500px;\"></div>
   <div id=\"piechartBelieversInVitro\" style=\"width: 900px; height: 500px;\"></div>
   </body>
   </html>";

} else {
   echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();

?>
