<?php 
        $title = "String Manipulation page";
        include 'includes/header.php';
    ?>
    <h1>String Manipulation</h1>
    <?php 
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock"; 
        $name = "ehsan jamshidi";
        echo $phrase1." | ".$phrase2;
        echo "<br />";
        echo "<hr />";
        echo "Uppercase first letter: ".ucfirst($name)."<br/>";
        echo "Uppercase first letter of each word: ".ucwords($name)."<br/>";
        echo "Upper case: ".strtoupper($name)."<br/>";
        echo "Upper case: ".strtolower("EHSAN JAMSHIDI")."<br/>";
        echo "<hr />";
        echo "Repeast String:  ".str_repeat("a",10)."<br/>"; // repeat a ten times
        echo "Repeast Upper Case String:  ".strtoupper(str_repeat("a",10))."<br/>";
        echo "Get a substring:" .substr($name,5,10)."<br/>";
        echo "<hr />";
        echo "Get position of string ( j ): ".strpos($name,'j')."<br/>";
        echo "Get position of string ( a ): ".strpos($name,'a')."<br/>";
        echo "<hr />";
        echo "Find character 'E':".strchr($name,"E")."<br/>";
        echo "Find character 'e':".strchr($name,"e")."<br/>";
        echo "Find character 'j':".strchr($name,"j")."<br/>";
        echo "<hr />";
        echo "Find Length of String: ".strlen($name)."<br/>";
        echo "Without Trim: "."A"." B C D "."E"."<br/>";
        echo "Without Trim: "."A".trim(" B C D ")."E"."<br/>";
        echo "Without Trim: "."A".ltrim(" B C D ")."E"."<br/>";
        echo "Without Trim: "."A".rtrim(" B C D ")."E"."<br/>";
        echo "Replace string with another: ".str_replace("stand","salt",$phrase2)."<br/>";

    ?>
<?php require 'includes/footer.php' ?> 