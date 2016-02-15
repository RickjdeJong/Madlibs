<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mab Libs - Verhaaltje</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="content-wrapper">
		<div class="header">	
			<h1 class="logo">Mad Libs</h1>
		</div>
		<div class="nav-wrapper">
			<div class="nav">
				<ul>
					<li><a href="index.php">Er heerst paniek...</a></li>
					<li><a href="onkunde.php">Onkunde</a></li>
				</ul>					
			</div>
		</div>
		<?php if($_POST){
			$pet = $_POST["pet"]; // schildpad
			$person = $_POST["person"]; // spinoza
			$live = $_POST["live"]; // gallifrey
			$bored = $_POST["bored"]; // mij vervelen
			$toy = $_POST["toy"]; // Lego
			$teacher = $_POST["teacher"]; // Egmond
			$money = $_POST["money"]; // Supercomputer
			$hobby = $_POST["hobby"]; // Programmeren
		}
		?>
		<div class="content">
			<h2>Er heerst paniek...</h2>
			<p>Er heerst paniek in het koninkrijk <?=$live?>.

			Koning <?=$teacher?> is ten einde raad en als koning <?=$teacher?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?=$person?>.

			<?=$person?>! Het is een ramp! Het is een schande!

			Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?

			Mijn <?=$pet?> is verdwenen! Zo maar, zonder waarschuwing.

			En ik had net een <?=$toy?> voor hem gekocht!

			Majesteit, uw <?=$pet?> komt vast vanzelf weer terug?

			Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?=$hobby?> leren?

			Maar Sire, daar kunt u toch uw <?=$money?> voor gebruiken.

			<?=$person?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.
			
			<?=$bored?>, Sire.
			</p>
		</div>
	</div>		
</body>
</html>