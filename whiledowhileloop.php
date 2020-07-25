    <?php 
        $title = "While do page";
        include 'includes/header.php';
    ?>
    <h1>While do</h1>
    <?php 
        $grade = 0;
        while($grade < 10){
            echo "<p>I am less than 10 / $grade</p>";
            $grade++;
        }

    ?>

    <h1>While loop</h1>
    <?php 
        $grade = 0;
        do{
            echo "<p>I am less than 10 / $grade</p>";
            $grade++;
        }while($grade < 10);
    ?>
    <?php require 'includes/footer.php' ?> 