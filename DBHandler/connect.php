<?php 

    class DBHandler{

        private static $host = "localhost:3307";
        private static $root = "root";
        private static $password = "";
        private static $dbname = "phpdb";
        private static $conn;

        public static function connect(){
            self::$conn = new mysqli(self::$host,self::$root,self::$password,self::$dbname);
            if(self::$conn->connect_error){
                die("Connection is not established: ". self::$conn->connect_error);
            }
            echo "<br> Connected Successfully";            
        }

        public static function insert($name,$location){
            self::connect();
            $insertQueryString = "insert into php_table (name,location) values('".$name."','".$location."')";
            $insertExecute = mysqli_query(self::$conn,$insertQueryString);

            if($insertExecute)
            {
                echo "Inserted successfully";
            }
            else{
                echo "ERROR ";
            }
        }
    }

?>