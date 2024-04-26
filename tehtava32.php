<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="koodaukset.css">
  <link rel="stylesheet" href="phptaulukko.css">
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
      
       function etuNimi($nimi, $ika)
	   {
		  $vuosi = 2024; #esim. nykyinen vuosi
		  $svuosi = $vuosi - $ika; #lasketaan syntymäpäivän vuosi
          echo "$nimi Rupunen. Syntyi vuonna $svuosi. <br>";
       }
       etuNimi("Tuomas", "25");
       etuNimi("Henri", "27");
       etuNimi("Petteri", "30"); 	
	  
	 ?>
   </div>
 </body>
</html>