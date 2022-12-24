<?php
	require_once __DIR__ . '/db.php';
	require_once __DIR__ . '/functions.php';

	$games = json_decode(file_get_contents('https://www.freetogame.com/api/games'));

	deleteAll();

	foreach ($games as $game) {
		addGame($game);
	}

	header('location: ../index.php');