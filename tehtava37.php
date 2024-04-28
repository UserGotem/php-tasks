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
  input[type=number].lomake, select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
  }
  input[type=text].lomake, select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type=submit].lomake {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type=submit].lomake:hover {
    background-color: #45a049;  
  }
  .tausta1 {
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
 <div class="tausta1 proto">
 <?php
       $R1 = 1;
	   $R2 = 1;
	   $R3 = 1;

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $R1 = test_input($_POST["R1"]);
          $R2 = test_input($_POST["R2"]);
          $R3 = test_input($_POST["R3"]);
       }

       function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
       }
     ?>
 <h2>Malli</h2>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
       R1: <input type="number" name="R1" placeholder="Anna R1 arvo..">
       <br><br>
       R2: <input type="number" name="R2" placeholder="Anna R2 arvo..">
       <br><br>
       R3: <input type="number" name="R3" placeholder="Anna R3 arvo..">
       <br>
       <br>
       <input class ="lomake" type="submit" name="submit" value="Lähetä">  
     </form>
     <?php
       $summa = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
       $summa = number_format($summa, 2,',',' ');
  
       echo "<br>Kolme sarjassa: <br><br>";
       echo "R1 = " . $R1 . " Ω<br>";
       echo "R2 = " . $R2 . " Ω<br>";
       echo "R3 = " . $R3 . " Ω<br><br>";
       echo "<br>Tuloksen arvo on: <br>";
       echo "Rkok = " . $summa . " Ω";
     ?>
</div>


</body>
</html>