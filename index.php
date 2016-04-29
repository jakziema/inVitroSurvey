


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
                     <input type="radio" name="popiera" value="tak" id="c1"/>
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
                        <input type="radio" name="zajscie" value="tak" id="c1"/>
                        <label for="c1">Tak</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="zajscie" value="nie" id="c2"/>
                        <label for="c2">Nie</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="zajscie" value="nm" id="c3"/>
                        <label for="c3">Nie mam zdania</label>
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
                        <input type="radio" name="zycie" value="polaczenie" id="c1"/>
                        <label for="c1">Od momentu zapłodnienia (połączenie komórki jajowej z plemnikiem)</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="zycie" value="serce" id="c2"/>
                        <label for="c2">Od momentu, kiedy zaczyna bić serce dziecka</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="zycie" value="narodzin" id="c3"/>
                        <label for="c3">Od momentu narodzin</label>
                     </div>

                     <div class="option">
                        <input type="radio" name="zycie" value="nm" id="c4"/>
                        <label for="c4">Nie mam zdania</label>
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
                        <input type="radio" name="wiara" value="tak" id="c1"/>
                        <label for="c1">Tak</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="wiara" value="nie" id="c2"/>
                        <label for="c2">Nie</label>
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
                        <input type="radio" name="plec" value="m" id="c1"/>
                        <label for="c1">Mężczyzna</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="plec" value="k" id="c2"/>
                        <label for="c2">Kobieta</label>
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
                        <input type="radio" name="wiek" value="<18" id="c1"/>
                        <label for="c1">ponizej 18</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="wiek" value="18-29" id="c2"/>
                        <label for="c2">18-29</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="wiek" value="30-39" id="c3"/>
                        <label for="c1">30-39</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="wiek" value="40-49" id="c4"/>
                        <label for="c2">40-49</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="wiek" value="50-59" id="c5"/>
                        <label for="c1">50-59</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="wiek" value=">60" id="c6"/>
                        <label for="c2">powyzej 60</label>
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
                        <input type="radio" name="zamieszkanie" value="wies" id="c1"/>
                        <label for="c1">wies</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="zamieszkanie" value="<50k" id="c2"/>
                        <label for="c2">miasto do 50 tys. mieszkańców</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="zamieszkanie" value="50-100k" id="c3"/>
                        <label for="c3">miasto 50-100 tys. mieszkańców</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="zamieszkanie" value=">100k" id="c4"/>
                        <label for="c4">miasto powyżej 100 tys. mieszkańców</label>
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
                        <input type="radio" name="wyksztalcenie" value="podstawowe" id="c1"/>
                        <label for="c1">podstawowe</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="wyksztalcenie" value="<zawodowe" id="c2"/>
                        <label for="c2">zawodowe</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="wyksztalcenie" value="srednie" id="c3"/>
                        <label for="c3">srednie</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="wyksztalcenie" value="wyzsze" id="c4"/>
                        <label for="c4">wyższe</label>
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
                        <input type="radio" name="dzieci" value="0" id="c1"/>
                        <label for="c1">nie mam</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="dzieci" value="1" id="c2"/>
                        <label for="c2">mam jedno</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="dzieci" value=">1" id="c3"/>
                        <label for="c3">mam więcej niż jedno</label>
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
                        <input type="radio" name="zwiazek" value="nie" id="c1"/>
                        <label for="c1">nie mam</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="zwiazek" value="tak_nf" id="c2"/>
                        <label for="c2">mam jedno</label>
                     </div>
                     <div class="option">
                        <input type="radio" name="zwiazek" value="tak_f" id="c3"/>
                        <label for="c3">mam więcej niż jedno</label>
                     </div>
                  </div>
               </div>








                  <input class ="btn" type="submit" value="Wyślij" />
                  <input type="hidden" name="poll" value="1" />

         </form>

         <div class="footer" footer>
  <p>Katarzyna Poniatowska & Jakub Ziemann </p>

</footer>
      </body>
