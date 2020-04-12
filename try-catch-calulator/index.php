<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Calculator</title>
</head>
<body>
<div class="Calculation">
    <h3>Calculation</h3>
    <form action="" method="post">
        Number 1:
        <input type="text" name="x">
        <br>
        Calculation:
        <select id="" name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        Number 2:
        <input type="text" name="y"><br/>
        <button type="submit" style="background-color: burlywood">Result</button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "Calculator.php";

    define("ADDITION", "+");
    define("SUBTRACTION", "-");
    define("MULTIPLICATION", "*");
    define("DIVISION", "/");

    $x = $_REQUEST['x'];
    $y = $_REQUEST['y'];
    $operation = $_REQUEST['operation'];

    $calculator = new Calculation();

    switch ($operation) {
        case ADDITION:
            try {
                echo $calculator->sum($x, $y);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            break;
        case SUBTRACTION:
            try {
                echo $calculator->sub($x, $y);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            break;
        case MULTIPLICATION:
            try {
                echo $calculator->mult($x, $y);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            break;
        case DIVISION:
            try {
                echo $calculator->div($x, $y);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            break;

        default:
            echo 'by zero';
            break;
    }
}
?>

</body>
</html>