<?php
    class dbConnect {
        function __construct() {
          //  require_once('config.php');
          define("DB_HOST", 'localhost');
          define("DB_USER", 'root');
          define("DB_PASSWORD", 'abc');
          define("DB_DATABSE", 'funshoppers');  
            $conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
            mysql_select_db(DB_DATABSE, $conn);
            if(!$conn)// testing the connection
            {
                die ("Cannot connect to the database");
            }
            return $conn;
        }
        public function Close(){
            mysql_close();
        }
    }
?>
