<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Chaton garou : Que le chaton soit avec toi !!!</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="shortcut icon" href="img/favicon.ico" />
	</head>
	<body>
		<?php include("header.php"); ?>
		<script>


function getLocation() {
var x = document.getElementById("demo");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
var x = document.getElementById("demo");
    x.innerHTML = '<iframe width="400" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://cartosm.eu/map?lon='+position.coords.longitude+'&lat='+ position.coords.latitude+'&zoom=18&width=400&height=350&mark=true&nav=true&pan=false&zb=inout&style=default&icon=down"></iframe>';	
}
</script>

<button onclick="getLocation()">vous localiser</button>
<p id="demo"></p>

	</body>
</html>
