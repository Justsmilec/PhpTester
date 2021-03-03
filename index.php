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

        require ('ClientMember.php');
        echo "Here is my PHP";
        $client = new ClientMember();
        echo "<br>";
        echo "This is the client:".$client->getName();
    ?>
</body>
</html>