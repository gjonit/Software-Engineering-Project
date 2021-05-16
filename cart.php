<?php

include "config.php";

session_start();

$uname = $_SESSION['uname'];
$nome = "'{$uname}'";
$sessionid = session_id();
$idorder = "'{$uname}0000{$sessionid}'";



$sql = "select * 
		from cart
		where CartID = '" . $uname . "'";

$result = mysqli_query($conn, $sql);

if ($result !== FALSE) {
    echo ("table exists");
    echo ("<br>");
} else {
    echo ("does not exist");
    echo ("<br>");
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
    <a href="Products.php">Go Back</a>
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<th>Username</th>";
    echo "<th>ProductID</th>";
    echo "<th>Quantity</th>";
    echo "<th>Price</th>";
    echo "<th>Product Name</th> ";
    echo "<th>Total</th> ";
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
    <?php

    $query = "SELECT Total FROM cart";
    $query_run = mysqli_query($conn, $query);

    $qty = 0;
    while ($num = mysqli_fetch_assoc($query_run)) {
        $qty += $num['Total'];
    }

    ?>




    <h3>Total is: <?php echo $qty; ?> </h3>
    <form mform method="post">
        <button id="sendorder" name="sendorder" value="Submit Order">Submit Order!</button>
        <button id="deletecart" name="deletecart" value="Delete Cart">Delete Cart!</button>
    </form>

    <?php

    if (isset($_POST['sendorder'])) {
        $q1 = "SELECT PorductName, Quantity  FROM cart WHERE CARTID = $nome ";
        $query_run1 = mysqli_query($conn, $q1);
        $descriptionn = "  ";
        while ($roww = mysqli_fetch_assoc($query_run1)) {
            foreach ($roww as $value) {
                $descriptionn =  $descriptionn . "   "  . $value;
            }
        }
        $dd = "'{$descriptionn}'";
        $sqlll = "INSERT INTO ORDERS (ORDERID, DESCR, sttatus, price) VALUES ($idorder, $dd, 'GOOD', $qty)";

        if ($conn->query($sqlll) === TRUE) {
            echo "</br>";
            echo "Order ID is: ", $idorder;

            $sqllll = "DELETE FROM cart";


            if ($conn->query($sqllll) === TRUE) {
                echo "</br>";
                echo "Cart content Deleted!";
            } else {
                echo "Error: " . $sqllll . "<br>" . $conn->error;
            }
        }
    } else {
        echo "Error: " . $sqlll . "<br>" . $conn->error;
    }


    if (isset($_POST['deletecart'])) {
        $q2 = "DELETE FROM cart";
        $query_run2 = mysqli_query($conn, $q2);
        if ($conn->query($q2) === TRUE) {
            echo "</br>";
            echo "Cart content Deleted!";
        } else {
            echo "Error: " . $q2 . "<br>" . $conn->error;
        }
    }


    ?>


</body>

</html>