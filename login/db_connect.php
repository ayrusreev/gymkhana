<!-- Suryaveer -->
<?php
	class DB_connect
	{
		//connection to data base
		public function connect()
		{
			require_once 'config.php';
			$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
			mysql_select_db(DB_DATABASE); //selecting database
			return $con; //return database handler
		}
		//closing database
		public function close()
		{
			mysql_close();
		}
	}
?>