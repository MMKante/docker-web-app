<?php
	function addGame(stdClass $game) {
		global $dao;

		foreach ($game as $key => $item) {
			$game->$key = str_replace("\"", " ", $game->$key);
		}

		$dao->query("INSERT INTO games(id, title, thumbnail, short_description, game_url, genre, platform, publisher, developer, release_date) VALUES (\"$game->id\", \"$game->title\", \"$game->thumbnail\", \"$game->short_description\", \"$game->game_url\", \"$game->genre\", \"$game->platform\", \"$game->publisher\", \"$game->developer\", \"$game->release_date\")");
	}
	function deleteAll() {
		global $dao;

		$dao->query("DELETE FROM games");
	}
	function allGames() {
		global $dao;
		
		$sql = 'SELECT * FROM games';

		$games = [];

		if ($result = $dao->query($sql)) {
			while ($data = $result->fetch_object()) {
				$games[] = $data;
			}
		}

		return $games;
	}
	function install() {
		$games = json_decode(file_get_contents('https://www.freetogame.com/api/games'));

		deleteAll();

		foreach ($games as $game) {
			addGame($game);
		}

		return allGames();
	}