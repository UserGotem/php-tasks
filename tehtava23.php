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
        <div class="jersey-10-regular vari2">
        <?php
        $luvut = array("A","B","C","D","E","F","G","H",
        "I","J","K","L","M","N","O","P","Q","R","S","T",
        "U","V","W","X","Y","Z","Å","Ä","Ö");
        $taulukoko = count($luvut);
  
        for($rivi = 0; $rivi <  $taulukoko; $rivi++) {
          echo $luvut[$rivi];
          echo "<br>";
        }
      ?>    
    </div>
		</body>
	</html>