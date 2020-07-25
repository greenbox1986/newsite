    <?php 
        $title = "Switch Statement page";
        include 'includes/header.php';
    ?>
    <h1>Switch Statement</h1>
    <?php
        $grade = "B";

        switch($grade){
            case "A":
                echo "You are superstar!";
                break;
            case "B":
                echo "You did well!";
                break;
            default:
                echo "You have failed!";
                break;
        }
    ?>
    <?php require 'includes/footer.php' ?> 