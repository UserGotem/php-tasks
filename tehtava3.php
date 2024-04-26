<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
			<title> TESTISIVU </title>
			<style>
.esimerkki {
    background-color: RGB(248, 244, 253);
    width: 50%;
    border: 1px solid RGB(41, 20, 82);
    padding: 20px;
    margin: 50px;
    box-shadow: 7px 7px 5px grey;
}

.koodi {
  color: darkblue;
  font-size: 130%;
}
	 </style>
		</head>
		<body>
			<div class="esimerkki koodi">
  <?php
    $teksti_1 = "<h3>Ympyrän ominaisuudet</h3>";
    $teksti_2 = "kehä";
    $sade = 10;
    $pii = 3.14;

    print "" . $teksti_1 . "<br>";
    print "Ympyrän " . $teksti_2 . " lasketaan kaavalla:<br>";
    print "Ala = 2 * π * säde<br><br>";
    print "Jos säde on " . $sade . ", " . $teksti_2 . " on ";
    print "" .  2 * $pii * $sade . "";

    $pintaAla = $pii * pow($sade, 2);
    print "<br>Ympyrän pinta-ala on " . $pintaAla . "";

    $tilavuus = (4/3) * $pii * pow($sade, 3);
    print "<br>Pallon tilavuus on " . $tilavuus . "";

    $pintaAlaPallo = 4 * $pii * pow($sade, 2);
    print "<br>Pallon pinta-ala on " . $pintaAlaPallo . "";
  ?>
			</div>
		</body>
	</html>
