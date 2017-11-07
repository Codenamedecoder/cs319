<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Unit 9 Lesson</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
        
       $counter = $_REQUEST["start"];
        $end = $_REQUEST["end"];
        
        while ($counter <= $end) {
        ?>
            <tr>
                <td><?php echo $counter; ?></td>
        </tr>
        <?php
            
            
            $counter = $counter + 1;
            
        }
        
        ?>
    </body>
</html>