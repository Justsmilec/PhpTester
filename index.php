
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require ('clientMember.php');
        require_once('usageofConstants.php');
        require ('DBHandler/connect.php');
        //use const usageofConstants\
        $client = new ClientMember();  //object created
        echo "<br>";
        echo "This is the client:".$client->getName();
        echo "<br>";
        $usage = new UsageofConstants();
        echo "CONSTANT: ". MY_CONSTANT;  // call the constant name as set in usageofConstants class.
        echo "<br>";
        echo "Static variabe ".UsageofStaticClass::getStaticValue();   //UsageofStaticClass is under usageofConstant classpath;
        UsageofStaticClass::incrementStaticValue();
        echo "<br>";
        echo "Static variabe ".UsageofStaticClass::getStaticValue();   //after incrementing it will be 11; then if we call again it will be 12 and so on 

        //DBHandler::connect();

        //DBHandler::insert("Name_X","Location_Z");



    ?>
</body>
</html>