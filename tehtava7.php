<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Jersey+10&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
<style>
.jersey-10-regular {
    background-color: RGB(248, 244, 253);
    width: 50%;
    border: 1px solid RGB(41, 20, 82);  
    font-family: "Jersey 10", sans-serif;
    font-weight: 400;
    font-style: normal;
    box-shadow: 7px 7px 5px grey;
}

.vari2 {
  color: darkblue;
  font-size: 130%;
}
	
  </style>
		</head>
		<body>
    <div class="jersey-10-regular vari2">
<?php
  
$vast_arvot = array("70.8", "120.9", "80.2", "0");
  
$vast_arvot[3] = 1/((1/$vast_arvot[0])+(1/$vast_arvot[1])+(1/$vast_arvot[2]));  
$vast_arvot[3] = number_format($vast_arvot[3], 2,',',' ');

echo "R1 = ".$vast_arvot[0]." Ω <br>";
echo "R2 = ".$vast_arvot[1]." Ω <br>";
echo "R3 = ".$vast_arvot[2]." Ω <br>";
echo "Rkok = ".$vast_arvot[3]." Ω";
?>
</div> 
		</body>
	</html>