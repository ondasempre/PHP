<!DOCTYPE html>
<html>
<head>
	<title>Form REQUEST</title>
</head>
<body>

	<form action="form_request.php" method="post">
		
		Inserisci il tuo nome: <input type="text" name="yourname" />
		<input type="submit" />
	
	</form>

	<?php
		if($_REQUEST["yourname"])
		{
			echo "<br /> ";
			echo "<b>Benvenuto " . $_REQUEST["yourname"] . " !!</b>";
		}
	?>

</body>
</html>