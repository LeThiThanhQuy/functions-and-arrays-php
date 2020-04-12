<?php
$arr = array(7, 8, 5, 8, 5, 65, 8, 12, 45, 1, 0);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Remove element from array</title>
</head>
<body>
<form method="post">
    Array: <?php foreach ($arr as $key => $value) {
        echo $value . ", ";
    } ?> <br>

    The Number need to delete:
    <input type="text" name="number">
    <button type="submit">Submit</button>
    <br>

    <?php
    foreach ($arr as $key => $value) {
        if (in_array($number, $arr)) {
            unset($arr[$key]);
        }

    }
    ?>

</form>
</body>
</html>