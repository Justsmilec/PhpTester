<?php
    namespace person;

    const MY_VALUE = 100;
    class User{
        private $username = "";
        private $password = "";

        public function User(){

        }

        public function __constructor($username,$pass){
            $this->username = $username;
            $this->password = $pass;

        }
        public function setName($name){
            $this->username = $name;

        }
        public function getName(){
            return $this->username;
        }

        public function setPass($pass){
            $this->password = $pass;
        }

        public function getPass(){
            return $this->password;
        }
    }

    class Admin{
        private $name = "Admin here";

        public function Admin(){}
        public function returnAdmin(){
            return $this->name;
        }

    }

?>
