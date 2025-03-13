// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> database.php
// PHP code to access the database.
<?php
	class Database {
		private static $dbName = 'mseet_38465759_PraktikumPWIOT'; // Example: private static $dbName = 'myDB';
		private static $dbHost = '	sql109.hstn.me'; // Example: private static $dbHost = 'localhost';
		private static $dbUsername = 'REPLACE_WITH_YOUR_USERNAME'; // Example: private static $dbUsername = 'myUserName';
		private static $dbUserPassword = 'REPLACE_WITH_YOUR_PASSWORD'; // // Example: private static $dbUserPassword = 'myPassword';
		 
		private static $cont  = null;
		 
		public function __construct() {
			die('Init function is not allowed');
		}
		 
		public static function connect() {
      // One connection through whole application
      if ( null == self::$cont ) {     
        try {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
        } catch(PDOException $e) {
          die($e->getMessage()); 
        }
      }
      return self::$cont;
		}
		 
		public static function disconnect() {
			self::$cont = null;
		}
	}
?>
// <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

