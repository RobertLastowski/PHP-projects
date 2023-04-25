<!doctype html>
<html>
	<body>
	<head>
		<?php
		echo"<h1>CHECKERS BOARD</h1>";
		//DEKLRACJA ZMIENNYCH POD OBRAZKI FIGUR		
		$czarny = "<img src='czarny.png' alt = ''/>";
		$czerwony = "<img src='czerwony.png' alt = ''/>";

		//TWORZENIE TABLICY DO PLANSZY
		for($i=0;$i<8;$i++){
			for($j=0;$j<8;$j++){
			$tab2[$i][$j]=" ";
			}
		}

		//RYSOWANIE PLANSZY
		echo"<table>";
		for($i=0;$i<8;$i++){
			echo"<tr>";
			for($z=0;$z<8;$z++){
				if($i%2==0){
					if($z%2==0){
						$style ="style ='background-color:rgb(255,255,255)'";
					}
					else{
						$style ="style ='background-color:rgb(0,0,0)'";
					}
				}
				else{
					if($z%2==0){
						$style ="style ='background-color:rgb(0,0,0)'";
					}
					else{
						$style ="style ='background-color:rgb(255,255,255)'";
					}
				}
				//WSTAWIANIE PIONKÓW
				if($i < 3  && $style == "style ='background-color:rgb(0,0,0)'"){
					echo"<td $style>".$tab2[$i][$z].$czarny."</td>";
				}
				elseif($i >= 5 && $style =="style ='background-color:rgb(0,0,0)'"){
					echo"<td $style>".$tab2[$i][$z].$czerwony."</td>";
				}
				else{
					echo"<td $style>".$tab2[$i][$z]."</td>";
				}

			}
			echo"</tr>";
		}
		echo"</table>";

		?>
	</head>

	</body>
	
	<style> 
	td { 
		border: 1px solid black; 
		width: 40px; 
		height: 40px;
	} 
	table {border: 2px solid black;}

	img{
		border-radius: 90%;
		width: 40px; 
		height: 40px;
	}
	</style>

</html>



