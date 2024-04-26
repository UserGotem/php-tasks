<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Dancing+Script:wght@400..700&family=Jersey+10&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

<style>
.jersey-10-regular {
    border: 2px solid RGB(41, 20, 82);  
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
    .table{
    border: 1.5px solid RGB(41, 20, 82);
}
.tbody{
    border: 1.5px solid RGB(41, 20, 82);
}
	
  </style>
		</head>
		<body>
        <div class="jersey-10-regular" >
        <?php
echo "<table> <tbody><tr>
</tr>";

$oppilaat = array(
    array("Matti Markkanen", 80, 75, 90, 85),
    array("Liisa Liikkanen", 95, 88, 92, 87),
    array("Pekka Peltonen", 72, 68, 75, 70),
    array("Maija Mustonen", 65, 62, 67, 64),
);

for ($rivi = 0; $rivi <= count($oppilaat) - 1; $rivi++) {
    echo "<tr>";
    for ($sarake = 0; $sarake <= 6; $sarake++) {
        if ($sarake == 0) {
            echo "<td>" . $oppilaat[$rivi][$sarake] . "</td>";
        } else if ($sarake < 6) {
            echo "<td>" . $oppilaat[$rivi][$sarake] . "</td>";
        } else {
            $yhteispisteet = 0;
            for ($i = 1; $i < 5; $i++) {
                $yhteispisteet += $oppilaat[$rivi][$i];
            }
            echo "<td>" . $yhteispisteet . "</td>";

            // Arvosanan laskeminen if-rakenteilla
            $arvosana = 0;
            if ($yhteispisteet < 120) {
                $arvosana = 0;
            } else if ($yhteispisteet >= 120 && $yhteispisteet < 176) {
                $arvosana = 1;
            } else if ($yhteispisteet >= 176 && $yhteispisteet < 232) {
                $arvosana = 2;
            } else if ($yhteispisteet >= 232 && $yhteispisteet < 288) {
                $arvosana = 3;
            } else if ($yhteispisteet >= 288 && $yhteispisteet < 344) {
                $arvosana = 4;
            } else if ($yhteispisteet >= 344) {
                $arvosana = 5;
            }
            echo "<td>" . $arvosana . "</td>";
        }
    }
    echo "</tr>";
}

echo "</tr></tbody></table>";
?>
  </div>
		</body>
	</html>