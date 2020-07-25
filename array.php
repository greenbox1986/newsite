<?php 
    $title = "Array Page";
    include 'includes/header.php'; 
    ?>
    <h1>Array</h1>
    <?php
        $numbers = array(1,3,5,7,9);
        echo $numbers[0];
        echo "<br />";
        echo "last value is: ".$numbers[4];
        echo "<br />";
        $size = count($numbers);
        echo "array count size: $size";
        echo "<br />";
        echo "FULL ARRAY: ";
        for ($count=0;$count<$size;$count++){
            echo $numbers[$count];
        }
    ?>
<?php require 'includes/footer.php' ?> 