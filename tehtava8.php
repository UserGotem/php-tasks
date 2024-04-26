<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Jersey+10&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
			<style>
.jersey-10-regular {
  font-family: "Jersey 10", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.vari2 {
  color: maroon;
  font-size: 130%;
}
	
  </style>
		</head>
		<body>
        <div class=".lora->uniquifier> vari2">
        <?php
// Määritetään aforismit taulukkoon
$aforismit = array(
    array("\"Lähes kaikki suuri on nuorten tekemää.\"", "Benjamin Franklin"),
    array("\"Nuoressa ei huilaaminen mene hukkaan.\"", "Suomalainen sananlasku"),
    array("\"Nuoret ovat säännöllisesti ajattelemattomia.\"", "Homeros"),
);

// Näytetään aforismit
echo "<h2>Aforismeja</h2>";
foreach ($aforismit as $aforismi) {
    echo "<div class='jersey-10-regular'>";
    echo "<blockquote>";
    echo $aforismi[0] . "<br>";
    echo "<footer>- " . $aforismi[1] . "</footer>";
    echo "</blockquote>";
    echo "</div>";
}
echo "</div>";
?>
  </div>
		</body>
	</html>