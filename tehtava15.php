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
  $luku1 = 50; 
  $luku2 = 100;

  if ($luku1 >= 50 AND $luku2 <= 100) {
    echo "Luku 1 on 50 tai pienempi kuin 100". "
";
	}
	if ($luku2 >= 100 AND $luku2 == 100) {
    echo "Luku 2 on suurempi kuin 100";
  }
 ?>
  </div>
		</body>
	</html>