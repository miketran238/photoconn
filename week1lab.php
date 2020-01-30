<!DOCTYPE html>
<html lang="en">
<head>
    <title> Week 1 Programming Lab </title>
</head>

<body>
<h1>Exercise 1</h1>
    <?php
    $x = 10;
    $y = 7;
    echo ("$x + $y = "); echo($x + $y); echo("<br>");
    echo ("$x - $y = "); echo($x - $y); echo("<br>");
    echo ("$x * $y = "); echo($x * $y); echo("<br>");
    echo ("$x / $y = "); echo($x / $y); echo("<br>");
    echo ("$x % $y = "); echo($x % $y); echo("<br>");
?>
<h1>Exercise 2</h1>
<?php 
if ( !isset ($_POST["bill"]) ) {
    echo (" <form action='week1lab.php' method='post'>
    Bill: <input type='text' name='bill'><br>
    <input type='submit'>
    </form> ");
}
else {
    $discount = false;
    if (date("m") >= 3 && date("m") <= 5) {
        echo "<p>It's spring, you got a 15% discount!</p>";
        $discount = true;
    }
    else {
        echo "<p>Unfortunately, you don't get the discount!</p>";
    }
    $z = $_POST['bill'];
    echo ("Your bill is $$z <br>");
    if ($discount) {
        echo("Discount 15% <br>");
        echo("Your new bill is $"); echo($z * 0.85);
    }
    echo("<br>Tax $"); echo($z * 0.07 );
    echo("<br>Gratuity $"); echo($z * 0.2 );
    echo("<br>Total $"); 
    if ($discount) {
        echo($z * 0.85 + $z * 0.27 );
    }
    else {
        echo($z * 1.27 );
    }
}

?>
</body>