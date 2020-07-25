<?php 
        $title = "If statement page";
        include 'includes/header.php';
    ?>
    <?php 
        echo "<h2>If statement</h2>";
        $grade = 10;
        if($grade >= 50){
            echo "<h3 style='color:green;'>You have passed</h3>";
        }else{
            echo "<h3 style='color:red;'>You have failed</h3>";
        }

        // if-else if-else
        $grade ="B";
        if($grade == "A"){
            echo "<h3 style='color:green;'>You got A</h3>";
        }elseif($grade == "B"){
            echo "<h3 style='color:blue;'>You got B</h3>";
        }else{
            echo "<h3 style='color:red;'>You have failed</h3>";
        }
    ?>
<?php require 'includes/footer.php' ?> 