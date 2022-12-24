<?php
	require_once './db.php';
	require_once './functions.php';

	$games = json_decode(file_get_contents('https://www.freetogame.com/api/games'));

	deleteAll();

	foreach ($games as $game) {
		addGame($game);
	}

	header('location: ../index.php');