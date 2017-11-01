<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>page Title</title>
    </head>
    <Body>
            <?php 
            $x = $_REQUEST["firstNumber"];
            $y = $_REQUEST["secondNumber"];
        
            $op = $_REQUEST["operation"];    
        
           //$add = "+";
            //$subtract = "-";
        
            
            function addition($x,$y) {
                $x + $y =$answer;
                return $answer;
            }
            
            function subtraction($x,$y) {
                $x - $y =$answer;
                return $answer;
            }
            
             if ($op == "add") {
                addition($x,$y);
             } elseif($op == "sub") {
                subtration($x,$y);
            }
            
            ?>
        <p><?php echo "Answer: " . $answer; ?> </p>
    </Body>
</html>