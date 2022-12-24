<?php
	$dao = new mysqli('db', 'user', 'password', 'games');
	if ($dao->connect_error) {
		die("Connection failed: " . $dao->connect_error);
	}