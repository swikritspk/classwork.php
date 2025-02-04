<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="factorialForm" method="post">
   <fieldset> <h1>Factorial Calculator</h1>
    <table border="1" cellpadding="5">
        <tr>
            <td>
                Enter a number: <input type="number" name="number"> <br>
                <input type="submit" value="Calculate Factorial">
            </td>
        </tr>
    </table> </fieldset>
</form>

<?php

        $number = $_POST['number'];
            $factorial = 1;
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }
        echo "Factorial of $number is: " .$factorial;
?>

</body>
</html>