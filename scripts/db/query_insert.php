<?php

	require_once "db_config.php";
	require_once "connection.php";

	$db = new tiso_mysqli(DBHOST, DBUSER, DBPASSWORD, DBNAME);