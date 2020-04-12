<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Min in Array</title>
</head>
<body>
<form method="post">
    Array:<input type="text" name="name" placeholder="a,b,c...">
    <button type="submit">Minimum</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $nameArray = (explode(",", $name));
    function findMin($arr)
    {
        $min = $arr[0];
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] < $min) {
                $min = $arr[$i];
            }
        }
        return $min;
    }

    echo "Min in Array " . $name . " is: " . "  " . findMin($nameArray);
}

?>
</body>
</html>