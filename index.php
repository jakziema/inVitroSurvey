


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Ankieta na temat in vitro</title>

   <link rel="stylesheet" href="css/main.css" />
</head>
<body>
   <form name="form1" action="vote.php" method="post">
      <!-- Pytanie nr 1-->
      <div class="question_answer">
         <div class="question">
            Czy popiera Pan/Pani procedurę zapłodnień metodą in vitro?
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="popiera" value="tak" id="c1" checked/>
               <label for="c1">Tak</label>
            </div>
            <div class="option">
               <input type="radio" name="popiera" value="nie" id="c2"/>
               <label for="c2">Nie</label>
            </div>
            <div class="option">
               <input type="radio" name="popiera" value="nm" id="c3"/>
               <label for="c3">Nie mam zdania</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 2 -->
      <div class="question_answer">
         <div class="question">
            Gdyby nie istniała żadna inna możliwość zajścia w ciążę, czy zdecydowałaby się Pani/Pan na in vitro?
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="zajscie" value="tak" id="c21"checked/>
               <label for="c21">Tak</label>
            </div>
            <div class="option">
               <input type="radio" name="zajscie" value="nie" id="c22"/>
               <label for="c22">Nie</label>
            </div>
            <div class="option">
               <input type="radio" name="zajscie" value="nm" id="c23"/>
               <label for="c23">Nie mam zdania</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 3 -->
      <div class="question_answer">
         <div class="question">
            Od kiedy według Pana/Pani zaczyna się życie człowieka?
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="zycie" value="polaczenie" id="c31"checked/>
               <label for="c31">Od momentu zapłodnienia (połączenie komórki jajowej z plemnikiem)</label>
            </div>
            <div class="option">
               <input type="radio" name="zycie" value="serce" id="c32"/>
               <label for="c32">Od momentu, kiedy zaczyna bić serce dziecka</label>
            </div>
            <div class="option">
               <input type="radio" name="zycie" value="narodzin" id="c33"/>
               <label for="c33">Od momentu narodzin</label>
            </div>

            <div class="option">
               <input type="radio" name="zycie" value="nm" id="c34"/>
               <label for="c34">Nie mam zdania</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 4 -->
      <div class="question_answer">
         <div class="question">
            Czy jest Pan/Pani osobą wierzącą?
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="wiara" value="tak" id="c41"checked/>
               <label for="c41">Tak</label>
            </div>
            <div class="option">
               <input type="radio" name="wiara" value="nie" id="c42"/>
               <label for="c42">Nie</label>
            </div>

         </div>
      </div>

      <!-- Pytanie nr 5 -->
      <div class="question_answer">
         <div class="question">
            Płeć
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="plec" value="m" id="c51"checked/>
               <label for="c51">Mężczyzna</label>
            </div>
            <div class="option">
               <input type="radio" name="plec" value="k" id="c52"/>
               <label for="c52">Kobieta</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 6 -->
      <div class="question_answer">
         <div class="question">
            Wiek
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="wiek" value="<18" id="c61"checked/>
               <label for="c61">ponizej 18</label>
            </div>
            <div class="option">
               <input type="radio" name="wiek" value="18-29" id="c62"/>
               <label for="c62">18-29</label>
            </div>
            <div class="option">
               <input type="radio" name="wiek" value="30-39" id="c63"/>
               <label for="c63">30-39</label>
            </div>
            <div class="option">
               <input type="radio" name="wiek" value="40-49" id="c64"/>
               <label for="c64">40-49</label>
            </div>
            <div class="option">
               <input type="radio" name="wiek" value="50-59" id="c65"/>
               <label for="c65">50-59</label>
            </div>
            <div class="option">
               <input type="radio" name="wiek" value=">60" id="c66"/>
               <label for="c66">powyzej 60</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 7 -->
      <div class="question_answer">
         <div class="question">
            Miejsce zamieszkania
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="zamieszkanie" value="wies" id="c71"checked/>
               <label for="c71">wies</label>
            </div>
            <div class="option">
               <input type="radio" name="zamieszkanie" value="<50k" id="c72"/>
               <label for="c72">miasto do 50 tys. mieszkańców</label>
            </div>
            <div class="option">
               <input type="radio" name="zamieszkanie" value="50-100k" id="c73"/>
               <label for="c73">miasto 50-100 tys. mieszkańców</label>
            </div>
            <div class="option">
               <input type="radio" name="zamieszkanie" value=">100k" id="c74"/>
               <label for="c74">miasto powyżej 100 tys. mieszkańców</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 7 -->
      <div class="question_answer">
         <div class="question">
            Wykształcenie
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="wyksztalcenie" value="podstawowe" id="c81"checked/>
               <label for="c81">podstawowe</label>
            </div>
            <div class="option">
               <input type="radio" name="wyksztalcenie" value="<zawodowe" id="c82"/>
               <label for="c82">zawodowe</label>
            </div>
            <div class="option">
               <input type="radio" name="wyksztalcenie" value="srednie" id="c83"/>
               <label for="c83">srednie</label>
            </div>
            <div class="option">
               <input type="radio" name="wyksztalcenie" value="wyzsze" id="c84"/>
               <label for="c84">wyższe</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 9 -->
      <div class="question_answer">
         <div class="question">
            Czy ma Pan/Pani dzieci?
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="dzieci" value="0" id="c91"checked/>
               <label for="c1">nie mam</label>
            </div>
            <div class="option">
               <input type="radio" name="dzieci" value="1" id="c92"/>
               <label for="c92">mam jedno</label>
            </div>
            <div class="option">
               <input type="radio" name="dzieci" value=">1" id="c93"/>
               <label for="c93">mam więcej niż jedno</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 10 -->
      <div class="question_answer">
         <div class="question">
            Czy jest Pan/Pani w związku?
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="zwiazek" value="nie" id="c101"checked/>
               <label for="c101">Nie</label>
            </div>
            <div class="option">
               <input type="radio" name="zwiazek" value="tak_nf" id="c102"/>
               <label for="c102">Tak, w związku nieformalnym</label>
            </div>
            <div class="option">
               <input type="radio" name="zwiazek" value="tak_f" id="c103"/>
               <label for="c103">Tak, w związku formalnym.</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 11 -->
      <div class="question_answer_plodnosc">
         <div class="question">
            Czy palisz wyroby tytoniowe?
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="tyton" value="4" id="c111"checked/>
               <label for="c111">Tak, nałogowo</label>
            </div>
            <div class="option">
               <input type="radio" name="tyton" value="2" id="c112"/>
               <label for="c112">Tak, okazyjnie</label>
            </div>
            <div class="option">
               <input type="radio" name="tyton" value="0" id="c113"/>
               <label for="c113">Nie</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 12 -->
      <div class="question_answer_plodnosc">
         <div class="question">
            Czy pijesz alkohol?
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="alkohol" value="4" id="c121"checked/>
               <label for="c121">Tak, kilka razy w tygodniu</label>
            </div>
            <div class="option">
               <input type="radio" name="alkohol" value="2" id="c122"/>
               <label for="c122">Tak, kilka razy w miesiącu</label>
            </div>
            <div class="option">
               <input type="radio" name="alkohol" value="1" id="c123"/>
               <label for="c123">Sporadycznie</label>
            </div>

            <div class="option">
               <input type="radio" name="alkohol" value="0" id="c124"/>
               <label for="c124">Nie</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 13 -->
      <div class="question_answer_plodnosc">
         <div class="question">
            Czy nosisz telefon komórkowy w przedniej kieszeni spodni?
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="telefon" value="2" id="c131"checked/>
               <label for="c131">Tak</label>
            </div>
            <div class="option">
               <input type="radio" name="telefon" value="0" id="c132"/>
               <label for="c132">Nie</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 14 -->
      <div class="question_answer_plodnosc">
         <div class="question">
            Czy w pracy masz styczność z niebezpiecznymi substancjami lub promieniowaniem?
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="promieniowanie" value="3" id="c141" checked/>
               <label for="c141">Tak</label>
            </div>
            <div class="option">
               <input type="radio" name="promieniowanie" value="0" id="c142"/>
               <label for="c142">Nie</label>
            </div>
         </div>
      </div>

      <!-- Pytanie nr 15 -->
      <div class="question_answer_plodnosc">
         <div class="question">
            Czy jesteś często narażony na stres?
         </div>
         <div class="answers">
            <div class="option">
               <input type="radio" name="stres" value="3" id="c151" checked/>
               <label for="c151">Tak</label>
            </div>
            <div class="option">
               <input type="radio" name="stres" value="0" id="c152"/>
               <label for="c152">Nie</label>
            </div>
         </div>
      </div>


      <input class ="btn" type="submit" value="Wyślij" />
      <input type="hidden" name="survey" value="1" />


   </form>

   <div class="footer" footer>
      <p>Katarzyna Poniatowska & Jakub Ziemann </p>

   </footer>
</body>
