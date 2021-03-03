<?php 



/**
         * trying to display a view
         */

        require ('view.php');

        $view = new View("home.php");
        $data = $view->displayView();

        ?>
        <div><?php echo $data  ?></div>

        <?php
?>