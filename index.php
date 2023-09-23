<?php
    declare(strict_types= 1);
    include "includes/autoloader.php";
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/calc.php" method="post">

        <p>My Calculator</p>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper" >
            <option value="add">Add</option>
            <option value="sub">Sub</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number"  name="num2" placeholder="Second Number">
        <input type="submit" name="submit" value="Calculate">
    </form>
</body>
</html>