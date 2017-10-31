<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Unit 8 Lesson: Functions</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            //function greet() {
                //echo "Hello!";
                //return "Hello!";
            //}
        
        function greet($first_name = "Unknown", $last_name = "Person") {
            return "Hello, " . $first_name . " " . $last_name . "!";
        }
        
        echo greet("Lachlin", "Rajotte-Carlson");
        
        ?>
       
    </body>
</html>