    <?php 
    $title = "Function Page";
    include 'includes/header.php'; 
    ?>
    <h1>Function</h1>
    <?php 
        function writeMessage(){
            echo "This is a message";
        }
        writeMessage(); 
        echo "<hr/>";

        function addFunction($num1, $num2){
            $sum = $num1+$num2;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }
        addFunction(10,5);
        addFunction(55,12);
        echo "<hr/>";
         
        $num = 10;
        function changeNum($num){
            $num = $num +10;
        }
        function changeNum1(&$num){
            $num = $num +10;
        }
        changeNum($num);
        echo $num."<br/>";
        changeNum1($num);
        echo $num."<br/>";
        echo "<hr/>";

        Function productReturn($num1, $num2){
            $prod = $num1*$num2;
            return $prod;
        }
        $return_value = productReturn(15,10);
        echo "return value: ".$return_value;
        
    ?>
<?php require 'includes/footer.php' ?> 