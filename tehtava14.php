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
.tbody{
    border: 1.5px solid RGB(41, 20, 82);
}
	
  </style>
		</head>
		<body>
        <div class="jersey-10-regular vari2" >
 <?php
  $luku1 = 10;
  
  echo $luku1-- . "<br>"; 
  echo $luku1 . "<br>"; 
  echo ++$luku1;
 ?>
  </div>
		</body>
	</html>