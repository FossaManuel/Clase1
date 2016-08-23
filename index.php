<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hola Mundo</h1>
	<?php
		$nombre = "Manuel Fossa";
		echo "<h2>Hola PHP soy $nombre</h2>";
		echo '<h2>Hola PHP soy $nombre</h2>';
		echo "<h2>Hola PHP soy "."$nombre</h2>";
		echo "<br>";

		$numero = rand(0,100);
		//echo "<h2>$numero</h2>";
		$veces = 100;
		$cont0 = 0;
		$cont1 = 0;
		$cont2 = 0;
		$cont3 = 0;
		$cont4 = 0;
		$cont5 = 0;
		$cont6 = 0;
		$cont7 = 0;
		$cont8 = 0;
		$cont9 = 0;

		for ($i=0; $i < $veces ; $i++) { 
			$numero = rand(0,9);
			//echo "$numero"."<br>";
			switch ($numero) {
				case '0':
					$cont0++;
					break;
				
				case '1':
					$cont1++;
					break;

				case '2':
					$cont2++;
					break;

				case '3':
					$cont3++;
					break;

				case '4':
					$cont4++;
					break;

				case '5':
					if($cont5 < 5)
						$cont5++;
					else
					{
						$i--;						
					}
					continue;

				case '6':
					$cont6++;
					break;

				case '7':
					$cont7++;
					break;
				
				case '8':
					$cont8++;
					break;

				case '9':
					$cont9++;
					break;

				default:
					# code...
					break;
			}
		}

		
		echo "<br>";
		echo "0 = %$cont0<br>";
		echo "1 = %$cont1<br>";
		echo "2 = %$cont2<br>";
		echo "3 = %$cont3<br>";
		echo "4 = %$cont4<br>";
		echo "5 = %$cont5<br>";
		echo "6 = %$cont6<br>";
		echo "7 = %$cont7<br>";
		echo "8 = %$cont8<br>";
		echo "9 = %$cont9<br>";


	?>
</body>
</html>