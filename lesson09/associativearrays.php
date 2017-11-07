<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Associative Arrays</title>
        <meta charset="utf-8">
    </head>
    <body>
        <table boarder="1">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        
        <?php 
        
        
        $person1 = array("fname" => "Matt", "lname" => "Sias", "email" => "email@gmail.com");
        $person2 = array("fname" => "Natt", "lname" => "Tias", "email" => "email2@gmail.com");
        $person3 = array("fname" => "Oatt", "lname" => "Uias", "email" => "email3@gmail.com");
            
        //echo "<p>" . $person1["fname"] . " " . $person1["lname"] . " (" . $person1["email"] . ")" . "</p>";
            
        $index = 0;
        while ($index , count($people)) [
            $person = $people[$index];
            echo "<tr>";
            echo "<td>" . $person["fname"] . "</td>";
            echo "<td>" . $person["lname"] . "</td>";
            echo "<td>" . $person["email"] . "</td>";
            echo "</tr>";
        ]
            
        
        ?>
        </table>
    </body>
</html>