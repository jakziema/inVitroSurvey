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


//rozkład odpowidzi osób wierzących na pytanie kiedy powstaje zycie
$sqlBelieversLife = "SELECT (pytanie3) from ankieta WHERE pytanie4 = \"tak\" ";
$believersResultLife = $conn->query($sqlBelieversLife);

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

$counterBelieversLifePolaczenie = 0;
$counterBelieversLifeSerce = 0;
$counterBelieversLifeNarodzin = 0;
$counterBelieversLifeNm = 0;

$numberOfSurveys = 0;

$advice = "";


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

   if ($believersResultLife->num_rows > 0 ) {
      while ($row = $believersResultLife->fetch_assoc()) {
         switch ($row["pytanie3"]) {
            case 'polaczenie':
            $counterBelieversLifePolaczenie += 1;
            break;
            case 'narodzin':
            $counterBelieversLifeNarodzin += 1;
            break;
            case 'serce':
            $counterBelieversLifeSerce += 1;
            break;
            case 'nm':
            $counterBelieversLifeNm += 1;
            break;
         }
      }
   }

   switch ($a5) {
      case 'k':
      $advice = "<div class = \"advice\">

      <b>Wyregulowanie układu hormonalnego</b><br />
      Odpowiada on za prawidłowe funkcjonowanie całego organizmu. Dzięki hormonom produkowanym przez jajniki kontroluje przemianę materii, wzrost i rozwój człowieka, a także reguluje płodność kobiety.<br />
      <b>Regularny tryb życia</b><br />
      Hormony produkowane są w zależności od pory dnia: cześć w nocy, część w ciągu dnia. Oznacza to, że zaburzenia gospodarki hormonalnej, a przez to owulajci, mogą być spowodowane np. nieodborami snu.<br />
      <b>Ruch</b><br />
      Na poprawę płodności zaleca się aktywność fizyczną, by polepszyć ogólną kondycję ciała.<br />
      <b>Prawidłowe BMI</b><br />
      Stosunek masy ciała do wzrostu (BMI). Zbyt wysokie (powyżej 25.) lub zbyt niskie (poniżej 17,5.) może negatywnie wpływać na zdolności rozrodcze kobiety poprzez wywoływanie zmian hormonalnych.<br />
      <b>Witaminy z grupy B</b><br />
      Usprawniają działanie układu nerwowego. Wpływają na regularność cyklu miesiączkowego, zapewniają prawidłową produkcję żeńskich hormonów płciowych oraz prawidłowy przebieg owulacji i zagnieżdżania się komórek jajowych.
źródło: produkty pełnoziarniste, chude mięso, ryby, jaja.<br />
<b>Witamina E (witamina płodności)</b><br />
Jej niedobór zmniejsza wydzielanie hormonu gonadotropowego, przyczyniając się do zaburzeń w przebiegu ciąży.
źródło: oleje roślinne, orzechy laskowe, warzywa liściaste oraz pietruszka.<br /></div>
      ";
      break;
      case 'm':
      $advice = "<div class = \"advice\">

      <b>Aktywność fizyczna</b><br />
      Zbyt duża ilość tkanki tłuszczowej, w szczególności w okolicach pasa, może przyczynić się do obniżenia poziomu testosteronu i zwiększenia stężenia estrogenu w organizmie mężczyzny.<br />
      <b>Seks</b><br />
      Regularne aktywność seksualna poprawia jakość nasienia i pobudza jego produkcję.<br />
      <b>Kwas foliowy</b><br />
      Niski poziom kwasu foliowego w męskim organizmie może być przyczyną zaburzeń materiału genetycznego nasienia. Źródła:  soja, szpinak, brokuły, ryż, pomarańcze, banany, produkty zbożowe, kurza i wołowa wątróbka oraz jaja.<br />
      <b>Selen</b><br />
      Poprawia ruchliwość plemników oraz ich liczbę. Wspiera metabolizm testosteronu. Źródła: orzechy brazylijskie, nasiona słonecznika, owoce morza i ryby, drób, czosnek, cebula oraz ryż brązowy.<br /></div>
      ";
      break;

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
   google.charts.setOnLoadCallback(drawPieChartBelieversLife);

   function drawPieChartBelieversLife() {

      var data = google.visualization.arrayToDataTable([
         ['Odpowiedz', 'Ilosc osob'],
         ['Od momentu zapłodnienia', $counterBelieversLifePolaczenie],
         ['Od momemntu,kiedy zaczyna bić serce dziecka',    $counterBelieversLifeSerce],
         ['Od momentu narodzin', $counterBelieversLifeNarodzin],
         ['Nie mam zdania', $counterBelieversLifeNm]
      ]);

      var options = {
         title: 'Rozkład odpowiedzi osób wierzących na pytanie 4: \"Od kiedy według Pana/Pani zaczyna się życie człowieka?\"'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechartBelieversLife'));

      chart.draw(data, options);
   }

   function drawPieChartBelieversInVitro() {

      var data = google.visualization.arrayToDataTable([
         ['Odpowiedz', 'Ilosc osob'],
         ['Tak', $counterBelieversYesInVitro],
         ['Nie',    $counterBelieversNoInVitro],
         ['Nie mam zdania', $counterBelieversNmInVitro]
      ]);

      var options = {
         title: 'Rozkład odpowiedzi osób wierzących na pytanie 1 : \"Czy popiera Pan/Pani procedurę zapłodnień metodą in vitro?\"'
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
   <br />
   $result<br />
   <n>Co pozytywnie wpływa na Twoją płodność?</n>
   </div>
   $advice<br />
   </p>

   <div class = \"graphs\">
   <div id=\"piechartSex\" style=\"width: 1200px; height: 500px;\"></div>
   <div id=\"piechartBelievers\" style=\"width: 1200px; height: 500px;\"></div>
   <div id=\"piechartBelieversInVitro\" style=\"width: 1200px; height: 500px;\"></div>
   <div id=\"piechartBelieversLife\" style=\"width: 1200px; height: 500px;\"></div>
   </div>


   </div>


   </body>
   </html>";

} else {
   echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();

?>
