<?php include 'includes/header.php'; ?>
    <h1>Date and Time Manipulation</h1>
    <?php 
        $datenow = getdate();
        echo "Today's Date <br/>";
        echo "<p>".$datenow["mday" ]."</p>";
        echo "<p>".$datenow["mon" ]."</p>";
        echo "<p>".$datenow["year" ]."</p>";
        echo "Today's Date: ".$datenow["mday" ]."/".$datenow["mon" ]."/".$datenow["year" ];
        echo "<br/>".time();
        echo "<br/>";
        print date("m/d/y G:i:s<br>", time())."<br/>";
        print "Today is ";
        print date("j F Y, \a\\t g:i a", time());

    ?>
<?php require 'includes/footer.php' ?> 