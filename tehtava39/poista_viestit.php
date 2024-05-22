<!DOCTYPE HTML> 
<html lang="en"> 
<html> 
<head>
 <meta charset="UTF-8"> 
 <title>TESTISIVU</title>
 <link rel="stylesheet" href="styles.css">
 <style>
  body{
   background-color: whitesmoke;
   color: yellow;
  }
  p{
    color: #000000;
    font-family: Arial;
    font-size: 18px;
  }
  h1{
    color: #000000;
    font-family: Arial;
    font-size: 30px;
  }
  .container {
    position: sisalto;
  }
  .ilmoitus {
	position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    font-size: 18px;	
  }
 </style>
</head>
<body>
 
<?php
        $viestit = fopen("./viestit.txt","w+")
                  or die("Tuntematon tiedosto.");

        $uusi = " ";
        fwrite($viestit,$uusi);
        fclose($viestit);
?>
<div class="sisalto">
    <div class="ilmoitus">
      <p> Kiitos yhteydenotostasi.<br> Otamme pikaisesti yhteyttä sinuun.<br>
          (ilmoitus sulkeutuu automaattisesti 3 sekunnin kuluttua)</p>
    </div>
  <script type="text/javascript">
    (function(){
      setTimeout(function(){
      window.location="demoviesti.php#paluu";
      },3000); /* 1000 = 1 second*/
    })();
  </script>
</body>
</html>