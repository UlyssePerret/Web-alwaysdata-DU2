<?php
	$url ="http://api.openweathermap.org/data/2.5/weather?q=Paris&lang=fr&units=metric&appid=951c2a2069e95bd7f99f1c6615433c13"
$raw = file_get_contents($url);
$json = json_decode($raw);
print_r($json);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
		</head>
	<body>
		<!-- http://api.openweathermap.org/data/2.5/weather?q=Paris&lang=fr&units=metric&appid=951c2a2069e95bd7f99f1c6615433c13
		-->
		 
	</body>
</html>