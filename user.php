<?php
    namespace person;

    const MY_VALUE = 100;
    class User{
        private $username = "PHP seems to be cool";

        public function User(){

        }
        public function setName($name){
            $this->username = $name;

        }
        public function getName(){
            return $this->username;
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
