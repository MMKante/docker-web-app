<?php
	$dao = new mysqli('localhost', 'root', '', 'games');
	if ($dao->connect_error) {
		die("Connection failed: " . $dao->connect_error);
	}