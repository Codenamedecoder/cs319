<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
        
        $first_name = $_REQUEST["firstName"];
        //echo $first_name;
        
        $last_name = $_REQUEST["lastName"];
        //echo $last_name;
        
        //echo "<p>Hello, " . $first_name . " " . $last_name . "!" . "</P>";
        
        function greet($first_name = "Unknown", $last_name = "Person") {
            return "Hello, " . $first_name . " " . $last_name . "!";
        }
        
        echo greet($first_name, $last_name);
        
        ?>
    </body>
</html>