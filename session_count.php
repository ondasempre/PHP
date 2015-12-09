<?php

	session_start();

	if( !isset($_SESSION['contatore']) )
	{
		$_SESSION['contatore'] = 1;
	} else {
		$_SESSION['contatore'] += 1;
	}



?>


<html>
<head>
	<title>Read/Write in session - PHP</title>
</head>
<body>

	<?php

		print("<h3>Contatore memorizzato in sessione:</h3> \n");
		print("<h3>Valore contatore: " . $_SESSION['contatore'] . " </h3>\n");
	?>

</body>
</html>
