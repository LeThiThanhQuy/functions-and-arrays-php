<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lọc danh sách khách hàng</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<form method="post">
    Từ: <input id = "from" type="text" name="from" placeholder="yyyy/mm/dd"/>
    Đến: <input id = "to" type="text" name="to" placeholder="yyyy/mm/dd" />
    <input type = "submit" id = "submit" value = "Search"/>


<table border="1">
    <caption><h1>Customer List</h1></caption>
    <tr>
        <th>No.</th>
        <th>Customer name</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Image</th>
    </tr>

    <?php
    $customer_list = array(
        "1" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "image" => "img/h01.jpg"),
        "2" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "image" => "img/h02.jpg"),
        "3" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "image" => "img/h03.jpg"),
        "4" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "image" => "img/h04.jpg"),
        "5" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội", "image" => "img/h05.jpg")
    );

    foreach ($customer_list as $key => $values) {
        echo "<tr>",
            "<td>" . $key . "</td>",
            "<td>" . $values['name'] . "</td>",
            "<td>" . $values['day_of_birth'] . "</td>",
            "<td>" . $values['address'] . "</td>",
            "<td><img src ='" . $values['image'] . "' width = '60px' height ='60px'/></td>",
        "</tr>";
    }

    include "action.php";
    ?>

</table>
</form>
</body>
</html>