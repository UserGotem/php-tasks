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
     margin: 20px;
     box-shadow: 7px 7px 5px grey;
  }
  .koodi{
     color: darkblue;
	 font-size: 130%;
  }
	 </style>
		</head>
		<body>
			<div class="esimerkki koodi">
  <?php

	$teksti1 = "<h3>Heidän isänsä oli kuollut karhunmetsästyksessä, ja äiti, joka oli heikko ja sairas, ei jaksanut pitää kurissa villiä poikajoukkoa. Niinpä he kasvoivat kuin metsän villieläimet, oppimatta lukemaan eikä kirjoittamaan, eikä muitakaan tapoja kuin mitä metsä ja luonto heille opettivat.</h3>";

	$teksti2 = "<h3>Heillä oli omat tapansa ja sääntönsä, joita he noudattivat tarkasti. He olivat luonteeltaan ylpeitä ja itsenäisiä, eivätkä he tahtoneet alistua kenenkään käskyvaltaan. He pitivät itseään parempina kuin muut ihmiset, ja heillä oli tapana pilkata ja halveksua muita.</h3>";

	$otsikko1 = "Veljesten lapsuus";
	$otsikko2 = "Veljesten luonne";
	print "" . $teksti1 . "<br>";
    print "" . $teksti2 . "<br>";
    print "" . $otsikko1 . "<br>";
	print "" . $otsikko2 . "<br>";
?>
			</div>
		</body>
	</html>
