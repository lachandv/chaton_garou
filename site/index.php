<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Chaton garou : Que le chaton soit avec toi !!!</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<style type="text/css">
			html
			{
				background-color : black;
			}
			body>img
			{
				position: absolute;
				top: 10%;
				width:750px;
				height: 421.875px;
				left: -moz-calc(50% - 325px);
				left: -webkit-calc(50% - 325px);
				left: calc(50% - 325px);
				z-index: 3;
			}
			div
			{
				width: 750px;
				height: 421.875px;
				overflow: hidden;
				background-image: url("img/blue.jpg") no-repeat;
				background-position: 0% 50%;
				position: absolute;
				left: -moz-calc(50% - 325px);
				left: -webkit-calc(50% - 325px);
				left: calc(50% - 325px);
				top:10%;
				z-index: 2;
				/*-webkit-animation: blue 3s infinite;
				-moz-animation: blue 3s infinite;
				animation: blue 3s infinite;*/
			}

			@-webkit-keyframes blue {
				0% { background-position: 0% 0%;}
				100% { background-position: 100% 0%;}
			}
			@-moz-keyframes blue {
				0% { background-position: 0% 0%;}
				100% { background-position: 100% 0%;}
			}
			@keyframes blue {
				0% { background-position: 0% 0%;}
				100% { background-position: 100% 0%;}
			}
		</style>
	</head>
	<body>
		<img src="img/background2.png" alt="Chaton garou : Que le chaton soit avec toi !!!"/>
		<div><img src="img/blue.jpg" alt="Chaton garou : Que le chaton soit avec toi !!!"/></div>
	</body>
</html>

<?php
session_start();
        require_once("sql.php");
	connect();
?>


