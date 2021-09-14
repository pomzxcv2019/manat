<?php
    define('DB_SERVER', 'localhost'); // Your hostname
    define('DB_USER', 'root'); // Database Username
    define('DB_PASS', ''); // Database Password
    define('DB_NAME', 'wshop_database'); // Database Name

    class DB_con {
        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        }
        public function registration($status, $first_name, $last_name, $username, $useremail, $password, $number_phone, $address){
            $reg = mysqli_query($this->dbcon, "INSERT INTO tk_tblusers ")
        }
?>