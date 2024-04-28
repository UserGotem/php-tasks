<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet"> 
 </head>
 
<style>
.jersey-10-regular {
    font-style: normal;
    box-shadow: 7px 7px 5px grey;
}

.vari2 {
  color: darkblue;
  font-size: 130%;
}
.tbody{
  border: 1.5px solid RGB(41, 20, 82);
}
.table {
  border: 1px solid black;
  border-collapse: collapse;
}
  </style>
 <body>
   <div class="jersey-10-regular vari2">
   <?php
  
  $R1 = 100;
  $R2 = 100;
  $R3 = 100;

  function laskeminen($R1, $R2, $R3) {

 $Rkok = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
 $Rkok = number_format($Rkok, 2,',',' ');
 return $Rkok;
}

echo "1 / ((1 / 100) + (1 / 100) + (1 / 100)) = " . laskeminen($R1, $R2, $R3) . " Ω";
?>
   </div>
 </body>
</html>