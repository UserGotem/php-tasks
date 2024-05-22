<!DOCTYPE HTML> 
<html lang="en-fi"> 
<head>
 <meta charset="UTF-8"> 
 <title>TESTISIVU</title>
 <style>
  body{
   background-color: #505050;
   color: yellow;
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
    $viestit = fopen("./viestit.txt","a")
              or die("Tuntematon tiedosto.");
    
    $uusi = "\nNimi: ".$_POST["nimi"].
            "\nEmail: ".$_POST["sahkoposti"].
		    "\nViesti: ".$_POST["kommentti"]."\n";
    fwrite($viestit,$uusi);
  
    fclose($viestit);	 	  
  ?>
  <div class="sisalto">
    <div class="ilmoitus">
      <p> Kiitos yhteydenotostasi.<br> Otamme pikaisesti yhteyttä sinuun.<br>
          (ilmoitus sulkeutuu automaattisesti 3 sekunnin kuluttua)</p>
    </div>
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