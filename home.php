<?php  
  require_once ('view.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    html,body{
        margin:0;
        width:100%;
        height:100%;
        
    }

    .container{
        width:100%;
        height:100%;
        background-color:brown;
    }
</style>
<body>
    
        <div class="container">
            <?php  
               $data = View::getData();
               //echo json_decode($data[0]->getName());           
            ?>
        </div>
</body>
</html>