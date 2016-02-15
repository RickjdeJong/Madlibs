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
			$kunnen = $_POST["kunnen"]; // tekenen
			$person = $_POST["person"]; // meneer Ronkes
			$getal = $_POST["getal"]; // tien
			$vakantie = $_POST["vakantie"]; // potlood
			$beigenschap = $_POST["beigenschap"]; // creativiteit
			$seigenschap = $_POST["seigenschap"]; // perfectionisme
			$ergste = $_POST["ergste"]; // verveling
		}
		?>
		<div class="content">
			<h2>Er heerst paniek...</h2>
			<p>Er zijn veel mensen die niet kunnen <?=$kunnen?>. Neem nou <?=$person?>.
			Zelfs met de hulp van een <?=$vakantie?> of zelfs <?=$getal?> kan <?=$person?> niet <?=$kunnen?>.
			Dat heeft niet te maken met een gebrek aan <?=$beigenschap?>, maar met een te veel aan <?=$seigenschap?>.
			Te veel <?=$seigenschap?> leidt tot <?=$ergste?> en dat is niet goed als je wilt <?=$kunnen?>.
			Helaas voor <?=$person?>.
			</p>
		</div>
	</div>		
	
</body>
</html>