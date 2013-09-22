<?php
	
	require_once 'db_config.php';

	/**
	 * 
	 */
	
	class tiso_mysqli extends mysqli {
		public function __construct() {
			parent::__construct(DBHOST, DBUSER, DBPASSWORD, DBNAME);

			if (mysqli_connect_error()) {
				die('Error connecting');
			}
		}
	}

