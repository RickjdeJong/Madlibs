<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mad Libs - Onkunde</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="content-wrapper">
		<div class="header">	
			<h1 class="logo">Mad Libs - Onkunde</h1>
		</div>
		<div class="nav-wrapper">
			<div class="nav">
				<ul>
					<li><a href="index.php">Er heerst paniek...</a></li>
					<li><a href="onkunde.php">Onkunde</a></li>
				</ul>					
			</div>
		</div>
		<div class="content">
			<h2>Onkunde</h2>
			<table style="width:100%">
				<tr>
					<form action="action.php" method="post" accept-charset="utf-8">
					<td>Wat zou je graag willen kunnen? </td>
					<td><input type="text" name="kunnen"></td>
				</tr>
				<tr>
					<td>Met welke persoon kun je goed opschieten?</td>
					<td><input type="text" name="person"></td>
				</tr>
				<tr>
					<td>Wat is je favoriete getal?</td>
					<td><input type="text" name="getal"></td>
				</tr>
				<tr>
					<td>Wat heb je altijd bij je als je op vakantie gaat?</td>
					<td><input type="text" name="vakantie"></td>
				</tr>
				<tr>
					<td>Wat is je beste persoonlijke eigenschap?</td>
					<td><input type="text" name="beigenschap"></td>
				</tr>
				<tr>
					<td>Wat is je slechtste persoonlijke eigenschap?</td>
					<td><input type="text" name="seigenschap"></td>
				</tr>
				<tr>
					<td>Wat is het ergste dat je kan overkomen</td>
					<td><input type="text" name="ergste"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"/></td>
					</form>
				</tr>
			</table>
		</div>
	</div>		
</body>
</html>