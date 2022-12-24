<?php
	require_once '/home/vboxuser/docker/www/config/db.php';
	require_once '/home/vboxuser/docker/www/config/functions.php';

	$games = json_decode(file_get_contents('https://www.freetogame.com/api/games'));

	deleteAll();

	foreach ($games as $game) {
		addGame($game);
	}

	header('location: ../index.php');