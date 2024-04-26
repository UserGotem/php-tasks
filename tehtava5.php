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
   $R1 = 70.8;
   $R2 = 120.9; 
   $R3 = 80.2;  

   $Rkok = 1/($R1+1 / $R2+ 1/$R3);
   echo "$R1 <br>";
   echo "$R2 <br>";
   echo "$R3 <br>";
   echo "$Rkok <br>";
  ?>
  </div>
		</body>
	</html>