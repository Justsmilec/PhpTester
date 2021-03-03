<?php   

    
    class ClientMember{

        public $clientname;
        function ClientMember(){
            //echo "This is ClientMember Constructor \r\n";
            $this->clientname = "Adem";
        }
        public function getName(){
            return $this->clientname;
        }

    //    function displayMessage(){
    //         echo "\nThis is from display message";
    //     }
    }


    $member = new ClientMember;
    //$member->displayMessage();
?>