<?php
	function addGame(stdClass $game) {
		global $dao;

		$query = $dao->prepare("INSERT INTO games(id, title, thumbnail, short_description, game_url, genre, platform, publisher, developer, release_date) VALUES (:id, :title, :thumbnail, :short_description, :game_url, :genre, :platform, :publisher, :developer, :release_date)");
		$query->bindValue(':id', $game->id, PDO::PARAM_INT);
		$query->bindValue(':title', $game->title, PDO::PARAM_STR);
		$query->bindValue(':thumbnail', $game->thumbnail, PDO::PARAM_STR);
		$query->bindValue(':short_description', $game->short_description, PDO::PARAM_STR);
		$query->bindValue(':game_url', $game->game_url, PDO::PARAM_STR);
		$query->bindValue(':genre', $game->genre, PDO::PARAM_STR);
		$query->bindValue(':platform', $game->platform, PDO::PARAM_STR);
		$query->bindValue(':publisher', $game->publisher, PDO::PARAM_STR);
		$query->bindValue(':developer', $game->developer, PDO::PARAM_STR);
		$query->bindValue(':release_date', $game->release_date, PDO::PARAM_STR);
		$query->execute();
	}
	function deleteAll() {
		global $dao;

		$query = $dao->prepare("DELETE FROM games");
		$query->execute();
	}
	function allGames() {
		global $dao;
		
		$query = $dao->prepare("SELECT * FROM games");
		$query->execute();
		return $query->fetchAll();
	}