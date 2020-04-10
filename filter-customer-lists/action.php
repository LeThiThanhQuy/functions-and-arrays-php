<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
$filtered_customers = [];
function searchByDate($customers, $from_date, $to_date) {
    if(empty($from_date) && empty($to_date)){
        return $customers;
    }

    foreach($customers as $customer){
        if(!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
            continue;
        if(!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
            continue;
        $filtered_customers[] = $customer;
    }

    return $filtered_customers;
}

$from_date = NULL;
$to_date = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from_date = $_POST["from"];
    $to_date = $_POST["to"];
    $filtered_customers = searchByDate($customer_list, $from_date, $to_date);
}

?>

<form method="post">
<table border="1">
    <caption><h1>Customer List</h1></caption>
    <tr>
        <th>No.</th>
        <th>Customer name</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Image</th>
    </tr>
    <?php if(count($filtered_customers) === 0):?>
        <tr>
            <td colspan="5" class="message">No customers found</td>
        </tr>
    <?php endif; ?>

    <?php foreach($filtered_customers as $index => $customer): ?>
        <tr>
            <td><?php echo $index;?></td>
            <td><?php echo $customer['name'];?></td>
            <td><?php echo $customer['day_of_birth'];?></td>
            <td><?php echo $customer['address'];?></td>
            <td><div><img src="<?php echo $customer['image'] ;?>"/></div> </td>

        </tr>
    <?php endforeach; ?>
</table>
</form>