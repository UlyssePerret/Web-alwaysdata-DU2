<?php
	$url ="http://api.openweathermap.org/data/2.5/weather?q=Paris&lang=fr&units=metric&appid=951c2a2069e95bd7f99f1c6615433c13";

	$raw = file_get_contents($url);
	$json = json_decode($raw);
	var_dump($json);

	//nom de la vile
	$name = $json->name; 

	//Méteo 
	$weather = $json->weather[0]->main;
	$desc = $json->weather[0]->description;
	echo $weather." ".$desc;
	//Température
	$temp = $json->main->temp;
	$feel_like = $json->main->feels_like;

//vent
	$speed = $json->wind->speed;
	$deg = $json->wind->deg;
 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Bootstrap -->
		<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style2.css">

		<title>Méteo</title>
		</head>
	<body>
		<!-- http://api.openweathermap.org/data/2.5/weather?q=Paris&lang=fr&units=metric&appid=951c2a2069e95bd7f99f1c6615433c13

			http://ulysseperret.alwaysdata.net/du2/ProjetWebMeteov6/Site-web/VersionTest-Ulysse/testmeteo.php
		-->
		 <div class="container text-center py-5">
		 	<h1>Méteo du jour <strong><?php echo $name; ?></strong></h1>
		 	<div class="row justify-content-center align-items-center">
		 		<?php
		 			swich($weather)
		 			{
		 				case "Clear":
		 				?>
		 				<div class="icon sunny">
		 					<div class="sun">
		 						<div class="rays"></div>
		 					</div>
		 				</div>
		 			 <?php
		 			 break;

		 			 case 'Drizzle';
		 			 ?>
		 			 <div class="icon sun-shower">
		 			 	<div class="cloud"></div>
		 			 		<div class="sun">
		 			 			<div class="rays"></div>
		 			 		</div>
		 			 		<div class="rain"></div>
		 			 </div>
		 			 <?php
		 			 	break;

		 			 	case 'Rain':
		 			 ?>
		 			 <div class="icon rainy">
		 			 	<div class="cloud"></div>
		 			 	<div class="icon cloudy">
		 			 		<div class="cloud"></div>
		 			 		<div class="cloud"></div>
		 			 	</div>
		 			 </div>
		 			 <?php
		 			 break;

		 			 case 'Thunderstorm';
		 			 ?>
		 			 <div class="icon thunder-storm">
		 			 	<div class="cloud">
		 			 		<div class="lightning">
		 			 			<div class="bolt"></div>
		 			 			<div class="bolt"></div>
		 			 		</div>
		 			 	</div>
		 			 	<?php 
		 			 	break;

		 			 	case 'Snow';
		 			 	?>
		 			 	<div class="icon flurries">
		 			 		<div class="cloud">
		 			 			<div class="snow">
		 			 				<div class="flake"></div>
		 			 				<div class="flake"></div>
		 			 			</div>
		 			 		</div>	
		 			 	 <?php 
		 			 	 break;
		 		 }
		 		?>
		 		<div></div>
		 	</div>
		 </div>
	</body>
</html>