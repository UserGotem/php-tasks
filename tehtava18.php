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
.table {
  border: 1px solid black;
  border-collapse: collapse;
}
  </style>
		</head>
		<body>
        <div class="jersey-10-regular vari2" >
<?php
$var = array(
  array("Matti", 20, 30, 40, 50, 60, 0, 0),
  array("Maija", 25, 35, 45, 55, 65, 0, 0),
  array("Ville", 16, 17, 18, 19, 20, 0, 0),
);
for ($i = 0; $i < count($var); $i++) {
  $sum = 0;
  for ($j = 1; $j < count($var[$i]); $j++) {
    $sum += $var[$i][$j];
  }
  $var[$i][6] = $sum;
  $arvosana = 0;
  if ($sum < 120) {
    $arvosana = 0;
  } elseif ($sum >= 120 && $sum < 176) {
    $arvosana = 1;
  } elseif ($sum >= 176 && $sum < 232) {
    $arvosana = 2;
  } elseif ($sum >= 232 && $sum < 288) {
    $arvosana = 3;
  } elseif ($sum >= 288 && $sum < 344) {
    $arvosana = 4;
  } elseif ($sum >= 344 && $sum <= 400) {
    $arvosana = 5;
  } elseif ($sum > 400) {
    $arvosana = 6;
  }
  $var[$i][7] = $arvosana;
}

echo '<table>';
echo '<tr>';
echo '<th></th>';
echo '<th></th>';
echo '<th></th>';
echo '<th></th>';
echo '<th></th>';
echo '<th></th>';
echo '<th></th>';
echo '<th></th>';
echo '</tr>';

for ($rivi = 0; $rivi < count($var); $rivi++) {
  echo '<tr>';
  for ($sarake = 0; $sarake < count($var[$rivi]); $sarake++) {
    echo '<td>' . $var[$rivi][$sarake] . '</td>';
  }
  echo '</tr>';
}

echo '</table>';
?>
</div>
		</body>
	</html>