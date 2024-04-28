<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet"> 
 </head>
 <style>
    @import "bootstrap/scss/bootstrap";
  .form{
    border: 1px solid green;
    padding: 30px 30px;
    margin: 20px;
  }
  .bckround {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  .proto {
    width: 400px;
    border: 1px solid green;
    padding: 30px 30px;
    margin: 20px;
  }
  #tulos{color: SlateBlue;font-weight: bold;}
 </style>
 </head>
 <body>  

 
 
 <div class="bckround proto">
 <?php
       $numero1 = $numero2 = $numero3 = "";

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $numero1 = test_input($_POST["numero1"]);
           $numero2 = test_input($_POST["numero2"]);
           $numero3 = test_input($_POST["numero3"]);
       }

       function test_input($data2) {
           $data2 = trim($data2);
           $data2 = stripslashes($data2);
           $data2 = htmlspecialchars($data2);
           return $data2;
       }
     ?>

     <h2>Mallin lomake</h2>
     <br>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
       R1: <input type="number" name="numero1" placeholder="Anna R1 arvo..">
       <br><br>
       R2: <input type="number" name="numero2" placeholder="Anna R2 arvo..">
       <br><br>
       R3: <input type="number" name="numero3" placeholder="Anna R3 arvo..">
       <br><br>
       <input class ="btn btn-primary" type="submit" name="sarjak" value="Laske sarja">
       <br><br>
       <input class ="btn btn-secondary" type="submit" name="rinnank" value="Laske rinnan">
     </form>

     <?php

       function rinnanfunktio($numero1, $numero2, $numero3) {
           $Rkok = 1 / ((1 / $numero1) + (1 / $numero2) + (1 / $numero3));
           $Rkok = number_format($Rkok, 2,',',' ');
	       echo "Rinnan-laskun tulos:<br><br>" . $Rkok;  
       }
  
       function sarjafunktio($numero1, $numero2, $numero3) {
	       $Rkok2 = $numero1 + $numero2 + $numero3;
	       $Rkok2 = number_format($Rkok2, 2,',',' ');
	       echo "Sarja-laskun tulos:<br><br>" . $Rkok2;
       }
  
       if(isset($_POST['sarjak'])) {
	       echo "<br>Sinun arvot ovat: <br><br>";
           echo "R1 = " . $numero1 . " Ω<br>";
           echo "R2 = " . $numero2 . " Ω<br>";
           echo "R3 = " . $numero3 . " Ω<br><br>";
           sarjafunktio($numero1, $numero2, $numero3);
       }  
  
       if(isset($_POST['rinnank'])) {
	       echo "<br>Sinun arvot ovat: <br><br>";
           echo "R1 = " . $numero1 . " Ω<br>";
           echo "R2 = " . $numero2 . " Ω<br>";
           echo "R3 = " . $numero3 . " Ω<br><br>";
           rinnanfunktio($numero1, $numero2, $numero3); echo " Ω";
       }
  
     ?>
</div>


</body>
</html>