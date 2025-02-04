<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<FORM name="12" method="post" action="area.php">
<h1>Area of Rectangle</h1>
<table border="1">
<tr>
<td>
Enter length: <input type="number" name="l"> <br>
Enter breadth: <input type="number" name="b"> <br>
 <input type="submit" value="Calculate Area" >
</td>
</tr>
</table>
</FORM>

    <?php
    $l=$_POST['l'];
    $b=$_POST['b'];
$a=$b*$l;
echo "Area of rectangle is=".$a;
?>
</body>
</html>