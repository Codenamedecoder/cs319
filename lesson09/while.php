<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Unit 9 Lesson: While Loops</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
        
        $first = $_REQUEST["start"];
        $second = $_REQUEST["end"];
        
        //echo "<p>" . $first . "</p>";
        //echo "<p>" . $second . "</p>";
        
        
        $counter = $_REQUEST["start"];
        while ($counter <$second){
            echo "<p>" . $counter . "</p>";
            $counter = $counter + 1;
        }
        
        ?>
    </body>
</html>