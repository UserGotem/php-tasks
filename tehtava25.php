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
  
       $taulu = array(
	                  array("Nimi", "Koe 1", "Koe 2", "Koe 3", "Koe 4", "Yht.", "Arvosana"),
				      array("Ykkönen Alli ", 30, 40, 50, 60, 0, 0),
				      array("Kakkonen Bertta", 40, 50, 60, 70, 0, 0),
				      array("Kolmonen Carita", 50, 60, 70, 80, 0, 0),
				     );
	
	   for($rivi = 0; $rivi < count($taulu); $rivi++) {
		   for($sarake = 0; $sarake <= 6; $sarake++) {
			   echo " " . $taulu[$rivi][$sarake] . " ";
		   }
		   echo "<br>";
	   }
     ?>
   </div>	
 </body>
</html>