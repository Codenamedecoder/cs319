<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Unit 8 Lesson: Functions</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            
        $x = 10;
        $y = 15;
        
        if ($x > $y) {
            echo "<p>" . $x . " is greater than " . $y . "</p>";
        } elseif($x == $y) {
            echo "<p>" . $x . " is equal to " . $y . "</p>";
        } else {
            echo "<p>" . $x . " is less than " . $y . "</p>";
        }
        
        ?>
    </body>
</html>