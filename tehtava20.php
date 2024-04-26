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
.table {
  border: 1px solid black;
  border-collapse: collapse;
}
  </style>
		</head>
		<body>
        <div class="jersey-10-regular vari2">
    <?php
    $tulos = 567;

    switch ($tulos) {
    case 123:
        echo "Tulos on 123";
        break;
        case 234:
            echo "Tulos on 234";
            case 456:
                echo "Tulos on 456";
                case 567:
                    echo "Tulos on 567";
                    break;
                    default:
                    echo "Tulos ei ole vasta";
    }
    ?>
</div>
</div>
		</body>
	</html>