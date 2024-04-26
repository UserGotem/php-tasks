<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Dancing+Script:wght@400..700&family=Jersey+10&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

<style>
.jersey-10-regular {
    background-color: RGB(248, 244, 253);
    width: 65%;
    border: 2px solid RGB(41, 20, 82);  
    font-weight: 500;
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
	
  </style>
		</head>
		<body>
        <div class="jersey-10-regular vari2">
        <?php
        $hedelmat = array("Mangoa", "Kiiviä", "Melonia", "Persikkaa", "Greippiä", "Ananasta");

        // Tulostetaan taulukon sisältö ja pituus
        echo "<div class='pun'>";
        echo "<h3>Hedelmiä</h3>";
        echo "<ul>";
        foreach ($hedelmat as $hedelma) {
            echo "<li>" . $hedelma . "</li>";
        }
        echo "</ul>";

        echo "<p>Taulukossa on " . count($hedelmat) . " hedelmää.</p>";
        echo "<p>Taulukon koko on " . sizeof($hedelmat) . " tavua.</p>";
        echo "</div>";
        ?>
   <div/div>
		</body>
	</html>