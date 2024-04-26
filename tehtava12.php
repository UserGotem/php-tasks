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
    .table{
    border: 1.5px solid RGB(41, 20, 82);
}
.tbody{
    border: 1.5px solid RGB(41, 20, 82);
}
	
  </style>
		</head>
		<body>
        <div class="jersey-10-regular" >
        <div class="tbody">
  <?php
    class arvio {
        public $koe1;
        public $koe2;
        public $koe3;
        public $yhteispisteet;

        function __construct($koe1, $koe2, $koe3) {
            $this->koe1 = $koe1;
            $this->koe2 = $koe2;
            $this->koe3 = $koe3;
            $this->laskeYhteispisteet();
        }

        function laskeYhteispisteet() {
            $this->yhteispisteet = $this->koe1 + $this->koe2 + $this->koe3;
        }
    }

    $arvio = new arvio(20, 30, 40);

    echo "Koe 1: " . $arvio->koe1 . "<br>";
    echo "Koe 2: " . $arvio->koe2 . "<br>";
    echo "Koe 3: " . $arvio->koe3 . "<br>";
    echo "Yhteispisteet: " . $arvio->yhteispisteet;
  ?>
</div> 
  </div>
		</body>
	</html>