<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Calculator</title>
    </head>
    <Body>
        <form name="getEquation" id="getEquation" action="math.php" method="get" >
            <p>First Number: <input type="number" name="firstNumber" id="firstNumber"></p>
            <p>Operation<input type="select" name="operation" id="operation">
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
            </p>
            <p>Second Number: <input type="number" name="secondNumber" id="secondNumber"></p>
            <input type="submit" name="go" id="go" value="calculate">
        </form>
    </Body>
</html>