<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Find Max in 2 Dimensional Array</title>
</head>
<body>
<h2>Matrix</h2>
<form action="function.php" method="post">
    <table border="1">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $rows = $_GET["rows"];
            $cols = $_GET["cols"];
            for ($i = 0; $i < $rows; $i++) {
                echo '<tr>';
                for ($j = 0; $j < $cols; $j++) {
                    echo '<td>';
                    echo '<input type="text" name="item[]">';
                    echo ' </td>';
                }
                echo '</tr>';
            }
        }
        ?>
    </table>
    <button type="submit">Find Max</button>
</form>

</body>
</html>