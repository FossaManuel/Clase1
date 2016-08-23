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

		$numero = rand(0,10);
		//echo "<h2>$numero</h2>";
		$veces = 10;
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

		for ($veces=0; $veces <10 ; $veces++) { 
			$numero = rand(0,10);
			echo "$numero"."<br>";
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
					$cont5++;
					break;

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

		$por0 = ($cont0 * 10);
		$por1 = ($cont1 * 10);
		$por2 = ($cont2 * 10);
		$por3 = ($cont3 * 10);
		$por4 = ($cont4 * 10);
		$por5 = ($cont5 * 10);
		$por6 = ($cont6 * 10);
		$por7 = ($cont7 * 10);
		$por8 = ($cont8 * 10);
		$por9 = ($cont9 * 10);
		echo "<br>";
		echo "0 = %$por0<br>";
		echo "1 = %$por1<br>";
		echo "2 = %$por2<br>";
		echo "3 = %$por3<br>";
		echo "4 = %$por4<br>";
		echo "5 = %$por5<br>";
		echo "6 = %$por6<br>";
		echo "7 = %$por7<br>";
		echo "8 = %$por8<br>";
		echo "9 = %$por9<br>";


	?>
</body>
</html>