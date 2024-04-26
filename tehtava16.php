<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Dancing+Script:wght@400..700&family=Jersey+10&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

<style>
.jersey-10-regular {
    font-style: normal;
    box-shadow: 7px 7px 5px grey;
}

.vari2 {
  color: darkblue;
  font-size: 130%;
}
.h3{
    position: relative;
}
.tbody{
    border: 1.5px solid RGB(41, 20, 82);
}
	
  </style>
		</head>
		<body>
        <div class="jersey-10-regular vari2" >
        <?php
   $otsikko1 = "<h3>Helsingin</h3> ";
   $otsikko2 = "<h3>Maantiede.</h3> ";
   $teksti1 = "<p style='text-indent: 20px; text-align: justify;'> Vuonna 1946 toteutettiin suuri alueliitos, ja Helsingin alue kasvoi lähes kahdeksankertaiseksi.

Lounais-Sipoon liitoksen jälkeen Helsingin pinta-ala oli 1. tammikuuta 2022 maanmittauslaitoksen mittausten mukaan 715,48 km², josta 214,19 km² on maata, 0,89 km² sisävesialueita ja loput 500,40 km² merivesialueita..[10] ";
   $teksti2 = "<p style='text-indent: 20px; text-align: justify;'> Kaupungin maa-alueista on metsää 37,2 km², puistoja 9,9 km² ja maisemapeltoja tai niittyjä noin 8 km². Puistoalueita on yhteensä 6 020 hehtaaria. Puistot vaihtelevat klassisista muotopuistoista ydinkeskustasta alkavaan 10 km² laajuiseen Keskuspuistoon. Helsingin kaupunki omistaa lisäksi viheralueita muiden kuntien alueella 6 889 ha, muun muassa Sipoossa.";
 
   $kokoteksti = $otsikko1 . $teksti1 . $otsikko2 . $teksti2;
   echo $kokoteksti;
 ?>
  </div>
		</body>
	</html>