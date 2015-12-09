<!DOCTYPE html>
<html>
<head>
	<title>Stampa variabili d'ambiente su browser</title>
</head>
<body>

<?php
  function emu_getallheaders() 
  {
        foreach ($_SERVER as $name => $value)
       {
           if (substr($name, 0, 5) == 'HTTP_')
           {
               $name = str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))));
               $headers[$name] = $value;
           } else if ($name == "CONTENT_TYPE") {
               $headers["Content-Type"] = $value;
           } else if ($name == "CONTENT_LENGTH") {
               $headers["Content-Length"] = $value;
           }
       }
       return $headers;
    }
?> 

</body>
</html>