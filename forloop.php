<?php 
    $title = "For Loops Page";
    include 'includes/header.php'; 
    ?>
    <?php
        echo "<h1>For loops</h1>";
        for($count=0; $count < 10; $count++){
            echo $count;
        }
    ?>
<?php require 'includes/footer.php' ?> 