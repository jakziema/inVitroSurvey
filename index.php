


<!DOCTYPE html>
<html lang="en">
      <head>
         <meta charset="utf-8">
         <title>Ankieta na teamt in vitro</title>

         <link rel="stylesheet" href="css/main.css" />
      </head>
      <body>
         <div class="survey">
            <div class="question">
               Czy popiera Pan/Pani procedurę zapłodnień metodą in vitro?
            </div>
            <form name="form1" action="vote.php" method="post">
               <div class="answers">
                  <div class="option">
                     <input type="radio" name="popiera" value="tak" id="c1"/>
                     <label for="c1">TAK</label>
                  </div>
                  <div class="option">
                     <input type="radio" name="popiera" value="nie" id="c2"/>
                     <label for="c2">Nie</label>
                  </div>
                  <div class="option">
                     <input type="radio" name="popiera" value="nie mam zdania" id="c3"/>
                     <label for="c3">Nie mam zdania</label>
                  </div>
               </div>
               <input type="submit" value="Wyślij" />
               <input type="hidden" name="poll" value="1" />
            </form>
         </div>
      </body>
