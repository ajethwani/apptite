<?php
require_once 'dbConnect.php';
session_start();
    class dbFunction {

        function __construct() {


            $db = new dbConnect();;

        }

        function __destruct(){

        }

        public function Login($userid, $password){
            $res = mysql_query("SELECT * FROM login WHERE user_id= '".$userid."' AND password = '".md5($password)."'");
            $user_data = mysql_fetch_array($res);
            //print_r($user_data);
            $no_rows = mysql_num_rows($res);

            if ($no_rows == 1)
            {

                $_SESSION['login'] = true;
                $_SESSION['uid'] = $user_data['user_id'];
                return TRUE;
            }
            else
            {
                return FALSE;
            }


        }


	}
?>
