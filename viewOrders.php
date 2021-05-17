<?php

include "config.php";
error_reporting(E_ERROR | E_PARSE);

session_start();

$uname = $_SESSION['uname'];
$nome = "'{$uname}'";
$sessionid = session_id();
$idorder = "'{$uname}0000{$sessionid}'";



$pdd = $_POST['pdd'];
$pdd = "'{$pdd}'";





$sql = "select * from `orders`";

$result = mysqli_query($conn, $sql);

if ($result !== FALSE) {
    echo ("table exists");
    echo ("<br>");
} else {
    echo ("does not exist");
    echo ("<br>");
}



if (isset($_POST['deleteorders'])) {
    $q2 = "DELETE FROM ORDERS";
    $query_run2 = mysqli_query($conn, $q2);
    if ($conn->query($q2) === TRUE) {
        echo "</br>";
        echo "Deleted!";
    } else {
        echo "Error: " . $q2 . "<br>" . $conn->error;
    }
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="medshop.css">
</head>

<body>
    <a href="adminnmodule.php">Go Back</a>


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
        echo "</tr>";
    }
    echo "</table>";



    ?>
    <form method="post">
        <button id="deleteorders" name="deleteorders" value="Delete All Orders">Delete Orders</button>
    </form>
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

</html>