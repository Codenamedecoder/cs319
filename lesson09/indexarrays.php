<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Index Arrays</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
        
        //$fruit1 = "Apple";
        //$fruit2 = "Orange";
        //$fruit3 = "Banana";
        //Echo "<p>" . $fruit1 . "</p>";
        //Echo "<p>" . $fruit2 . "</p>";
        //Echo "<p>" . $fruit3 . "</p>";
        
        $fruit = array("Apple", "Orange", "Banana");
        
        //echo "<p>" . $fruit[0] . "</p>";
        //echo "<p>" . $fruit[1] . "</p>";
        //echo "<p>" . $fruit[2] . "</p>";
        
        $index = 0;
        while ($index <count($fruit)) {
            echo "<p>" . $fruit[$index] . "</p>";
            $index = $index + 1;
        }
        
        
        ?>
    </body>
</html>