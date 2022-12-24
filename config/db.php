<?php
	$dao = new PDO('mysql:host=localhost;dbname=games;charset=utf8','user','root');
	$dao->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);