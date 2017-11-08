<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Exercise 9</title>
        <meta charset="utf-8">
        <h1>Magic 8 Ball</h1>
    </head>
    <body>
       <?php 
        
        $question = $_REQUEST["ask"];
        
        $answers = array("Don't count on it.", "My source says no.", "Outlook not so good.", "Most likely.", "You may rely on it.", "Yes.", "Better not tell you now.", "Concentrate and ask again.", "Cannot predict now.");
        
        $index = mt_rand(0,9)-1;
        
        while ($index <count($answers)) {
            echo "<p>" . $answers[$index] . "</p>";
        }
        
        
        ?>
    </body>
</html>