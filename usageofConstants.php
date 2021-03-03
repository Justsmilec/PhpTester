<?php  

 /**
  * Usage of CONSTANTS so we can access variables from a class to another
  */

  define("MY_CONSTANT","my constant value");   // we have a variable with name MY_CONSTANT and we can acces it everywhere.
  class UsageofConstants {
    //TODO
    //Add what needed in this class;

  }


  /**
   * use a static class so we dont have to create an object for this class to call the function
   */
class UsageofStaticClass{

     private static $var = 10;
     public static function getStaticValue(){
         return UsageofStaticClass::$var;  //return a static variable
     }

     public static function incrementStaticValue(){
         UsageofStaticClass::$var += 1;
     }
    
  }


?>