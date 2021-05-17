<?php

include "config.php";

session_start();
error_reporting(E_ERROR | E_PARSE);

$uname = $_SESSION['uname'];
$nome = "'{$uname}'";
$sessionid = session_id();




$sql = "select * 
		from ORDERS
		where Name = $nome";

$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();

$prodid = $row['ORDERID'];
$prodid = "'{$prodid}'";

$pdd = $_POST['pdd'];
$pdd = "'{$pdd}'";




?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="medshop.css">
</head>

<body>
    <a href="Products.php">Go Back</a>
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<th>Order ID</th>";
    echo "<th>Description</th>";
    echo "<th>Status</th>";
    echo "<th>Price</th>";
    echo "<th>User</th>";

    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td> " . $value . " </td>";
        }
    }
    echo "</table>";



    ?>

    <form method="post">
        <input type="text" name="pdd" id="pdd" placeholder="Product ID" />
        <input type="submit" name="delord" value="Delete Order" />
    </form>


    <?php

    if (isset($_POST['delord'])) {
        $sql = "DELETE FROM ORDERS WHERE ORDERID = $pdd  ";
        if ($conn->query($sql) === TRUE) {
            echo "GOOD";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>