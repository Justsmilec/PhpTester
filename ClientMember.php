<?php   
    /**
     * ClientMember class to be tested in index.php
     * create instance in index.php using   require ('clientMember.php') and create object   using $objectname = new ClientMember();
     * use $objectname->getName to return name (can use $objectname->clientname  directly too since its public)
     */
    class ClientMember{

        public $clientname;  //class attributes

        function ClientMember(){
            echo "ClientMember object created";
            $this->clientname = "X-A12";  
        }

        //if attribute is private use this to return $clientname
        public function getName(){
            return $this->clientname;
        }

    }
?>