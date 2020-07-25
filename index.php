    <?php 
        $title = "Home page";
        include 'includes/header.php';
   
        echo "Hi Ehsan!";
        echo "<br/>";
        echo "New line";
        echo "<br/>";

        $name = "Ehsan Jamshidi";
        $age = 34;
        echo "<br/>";
        echo "<h1> My name is: ".$name."</h1>";
        echo "<h1> My age is: ".$age."</h1>";
    ?>
        <button typr="button" class="btn btn-dark">Click here</button>
    <?php
         require 'includes/footer.php' 
    ?> 
