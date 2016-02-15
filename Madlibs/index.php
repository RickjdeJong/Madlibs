<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mad Libs - Er heerst paniek</title>
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
		<div class="content">
			<h2>Er heerst paniek...</h2>
			<table style="width:100%">
				<tr>
					<form action="actie.php" method="post" accept-charset="utf-8">
					<td>Welk dier zou je nooit als huisdier willen hebben???</td>
					<td><input type="text" name="pet"></td>
				</tr>
				<tr>
					<td>Wie is de belangrijkste persoon in je leven?</td>
					<td><input type="text" name="person"></td>
				</tr>
				<tr>
					<td>In welk land zou je graag willen wonen?</td>
					<td><input type="text" name="live"></td>
				</tr>
				<tr>
					<td>Wat doe je als je je verveelt</td>
					<td><input type="text" name="bored"></td>
				</tr>
				<tr>
					<td>Met welk speelgoed speelde je als kind het meest?</td>
					<td><input type="text" name="toy"></td>
				</tr>
				<tr>
					<td>Bij welke docent spijbel je het liefst?</td>
					<td><input type="text" name="teacher"></td>
				</tr>
				<tr>
					<td>Als je €100.000,- had, wat zou je dan kopen?</td>
					<td><input type="text" name="money"></td>
				</tr>
				<tr>
					<td>Wat is je favoriete bezigheid?</td>	
					<td><input type="text" name="hobby"></td>
					<td></td>
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