<?php 

require ('user.php');
use person\User;
    class View{

        /**
         * render to be displayed
         */
        private $render = FALSE;
        private static $data = "Ademi";
        private static $arrayofData = [];
        public function View($renderPath){
           // "aaa";
            try{
                $file = $renderPath;
                if(file_exists($file)){

                    for($i = 0;$i<4;$i++){
                        $usr = new User();
                        $usr->setName("Adem ".$i);
                        $usr->setPass("12345");
                        //array_push(self::$arrayofData,$usr);
                        self::$arrayofData[] = $usr;
                    }

                    
                    $this->render = $file;
                } else {
                    echo "Not found";
                }

            }
            catch(customException $e){
                echo "Error";
            }

        }

        public function displayView(){
            
            include($this->render);
            //return $this->data;
        }

        public static function getData(){
            return json_encode(self::$arrayofData);
        }
    }
?>