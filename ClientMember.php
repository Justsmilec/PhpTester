<?php   
    require ('user.php');
    use person\User as UserMember; //set as an alias of User class , we can simply let it as use user\User
    use person\Admin as AdminMember;
    use const person\MY_VALUE;
    //use function person\Admin\returnAdmin as admin;

    /**
     * ClientMember class to be tested in index.php
     * create instance in index.php using   require ('clientMember.php') and create object   using $objectname = new ClientMember();
     * use $objectname->getName to return name (can use $objectname->clientname  directly too since its public)
     */
    class ClientMember{

        public $clientname;  //class attributes

        function ClientMember(){
            $user = new UserMember();//create instance of that alias
            echo "ClientMember object created";
            $user->setName("Yess! PHP looks cool");
            echo "<br>This is user name from namespace: ".$user->getName();

            echo "<br>----------------------------------------------<br>";
            /**
             * Calling class from another class using 'use' namespace;
             */
            $admin = new AdminMember();
            echo "Admin called using namespace func: ". $admin->returnAdmin();

            //return const value from user.php class
            echo "<br>MY_VALUE : ".MY_VALUE;
            $this->clientname = "X-A12";  
        }

        //if attribute is private use this to return $clientname
        public function getName(){
            return $this->clientname;
        }


    }
?>