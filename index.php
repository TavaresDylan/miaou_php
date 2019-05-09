<?php 
$name = $_POST["pseudo"];
$content = $_POST["content"];
$date = date("d-m-Y");
setlocale(LC_TIME, "fr_FR");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Miaou chat PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/style/style.css">
</head>
<body>

	<div id="form_client">
		<form method="post" action="#">
			<input for="pseudo" id="inp_pseudo" type="text" name="pseudo" placeholder="votre pseudo">
			<textarea for="content" name="content"></textarea>
			<input id="sub" type="submit" name="poster" value="Poster">
		</form>
	</div>
	<div id="messages">
		<p>Bonjour <?php echo "$name" ?> et bienvenue dans le miaou tchat php !</p>
		<p>
			<?php
			if (!empty($_POST["pseudo"])) {
			 	echo "Le ".$date." à ",strftime("%H")+2,":", strftime("%M")," ".ucfirst($name)." "." dit : ".$content;
			 } else
			 {
			 	die();
			 }
			 ?>
			</p>
	</div>

</body>
</html>