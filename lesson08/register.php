<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        
        $name = $_REQUEST["fullName"];
        $first_pass = $_REQUEST["firstPass"];
        $second_pass = $_REQUEST["secondPass"];
        
        //echo $name;
        //echo $first_pass;
        //echo $second_pass;
        
        if ($first_pass != $second_pass) {
            echo "<p>" . "Hey " . $name . " your passwords do not match!</p>";
        } else {
            echo "<p>Your account has been created!</p>";
        }
        
        ?>
    </body>
</html>