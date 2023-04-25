<!doctype html>
<html>
	<body>
	<head>
		<?php
		echo"<h1>SZACHY PLANSZA</h1>";
		//DEKLRACJA ZMIENNYCH POD OBRAZKI FIGUR		
		$krol_b = "<img src='krol_b.png' alt = ''/>";
		$krolowa_b = "<img src='krolowa_b.png' alt = ''/>";
		$kon_b = "<img src='kon_b.png'  alt = ''/>";
		$pion_b = "<img src='pion_b.png'  alt = ''/>";
		$wieza_b = "<img src='wieza_b.png'  alt = ''/>";
		$goniec_b = "<img src='goniec_bnc.png'  alt = ''/>";

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
				if($i == 1){
					echo"<td $style>".$tab2[$i][$z].$pion_b."</td>";
				}
				elseif($i==6){
					echo"<td $style>".$tab2[$i][$z].$pion_b."</td>";
				}
				elseif($i==0){
					if($z==0 || $z == 7){
						echo"<td $style>".$tab2[$i][$z].$wieza_b."</td>";
					}
					elseif($z==1 || $z == 6){
						echo"<td $style>".$tab2[$i][$z].$kon_b."</td>";
					}
					elseif($z==2 || $z == 5){
						echo"<td $style>".$tab2[$i][$z].$goniec_b."</td>";
					}
					elseif($z==3){
						echo"<td $style>".$tab2[$i][$z].$krolowa_b."</td>";
					}
					elseif($z==4){
						echo"<td $style>".$tab2[$i][$z].$krol_b."</td>";
					}
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



