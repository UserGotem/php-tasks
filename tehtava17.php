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
     $kok_pisteet = 222; 

     if ($kok_pisteet >= 0 && $kok_pisteet <= 118) {
       echo "Arvosana: 0";
     } elseif ($kok_pisteet >= 119 && $kok_pisteet <= 212) {
       echo "Arvosana: 1";
     } elseif ($kok_pisteet >= 213 && $kok_pisteet <= 305) {
       echo "Arvosana: 2";
     } elseif ($kok_pisteet >= 306 && $kok_pisteet <= 400) {
       echo "Arvosana: 3";
     } 
    ?> 
  </div>
		</body>
	</html>