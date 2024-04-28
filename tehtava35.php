<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet"> 
 </head>
 
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
 <body>
   <div class="jersey-10-regular vari2">
   <?php
    
     function kuukausi()
     {
	     $month = date("n");
	  
	     switch($month) {
		     case 1:
		       echo "tammikuu";
		       break;
		     case 2:
		       echo "helmikuu";
		       break;
		     case 3:
		       echo "maaliskuu";
		       break;
		     case 4:
		       echo "huhtikuu";
		       break;
		     case 5:
		       echo "toukokuu";
		       break;
		     case 6:
		       echo "kesäkuu";
		       break;
		     case 7:
		       echo "heinäkuu";
		       break;
		     case 8:
		       echo "elokuu";
		       break;
		     case 9:
		       echo "syyskuu";
		       break;
		     case 10:
		       echo "lokakuu";
		       break;
		     case 11:
		       echo "marraskuu";
		       break;
		     case 12:
		       echo "joulukuu";
               break;			
	     }
     }
  
     function päivä()
     {
	     $day = date("l");
	  
	     switch($day) {
		     case "Monday":
		       echo "maanantai";
		       break;
		     case "Tuesday":
		       echo "tiistai";
		       break;
		     case "Wednesday":
		       echo "keskiviikko";
		       break;
		     case "Thursday":
		       echo "torstai";
		       break;
		     case "Friday":
		       echo "perjantai";
		       break;
		     case "Saturday":
		       echo "lauantai";
		       break;
		     case "Sunday":
		       echo "sunnuntai";
		       break;
	     }
     }
  
     function tervehdys()
     {
	     $time = date("G:i");
	  
	     if($time >= 5.00 & $time <= 9.00)
		     echo "Hyvää huomenta!";
	     if($time > 9.00 & $time <= 14)
		     echo "Hyvää päivää!";
	     if($time > 14 & $time <= 18)
		     echo "Hyvää iltapäivää!";
	     if($time > 18 & $time <= 22)
		     echo "Hyvää iltaa!";
	     if($time > 22 & $time < 5)
		     echo "Rauhallista yötä";
     }

     tervehdys();
     echo "<br>";
     echo "Kello on " . date("H:i") . ", ";
     päivä();
     echo " " . date("d") . ". "; 
     kuukausi();
     echo " " . date("Y") . ".";
  
     ?>
   </div>
 </body>
</html>