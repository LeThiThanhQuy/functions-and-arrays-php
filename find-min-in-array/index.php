<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$nameArray = [2,8,1,4,7,9,222,99,44,55];
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

echo "Số nhỏ nhất trong mảng là: " . "  " . findMin($nameArray);
?>
</body>
</html>