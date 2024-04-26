<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<style>
.esimerkki {
    background-color: RGB(248, 244, 253);
    width: 50%;
    border: 1px solid RGB(41, 20, 82);
    padding: 20px;
    margin: 50px;
    box-shadow: 7px 7px 5px grey;
}

.vari2 {
  color: maroon;
  font-size: 130%;
}
	
  </style>
		</head>
		<body>
			<div class="esimerkki vari2">
  <?php
  $luku1 = 3;
  $luku2 = 7;
  $luku3 = 70;
  $summa = $luku1 + $luku2 + $luku3;

  // summa
  echo "Luku 1: $luku1<br>";
  echo "Luku 2: $luku2<br>";
  echo "Luku 3: $luku3<br>";
  echo "<br>";
  echo "Lukujen summa: $summa";
  ?>
			</div>
		</body>
	</html>