<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP All In One</title>
</head>
<body>

<h2>Simple PHP Program</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="a" required><br><br>

    Enter Second Number:
    <input type="number" name="b" required><br><br>

    Enter Your Name:
    <input type="text" name="name" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $name = $_POST['name'];

    echo "<h3>Hello $name</h3>";

    echo "Addition: " . ($a + $b) . "<br>";
    echo "Subtraction: " . ($a - $b) . "<br>";
    echo "Multiplication: " . ($a * $b) . "<br>";

    if ($b != 0)
        echo "Division: " . ($a / $b);
    else
        echo "Division not possible";
}
?>

</body>
</html>
