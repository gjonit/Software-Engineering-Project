<?php

include "config.php";

session_start();

$_SESSION['uname'] = "userName";
$uname = $_SESSION['uname'];
$nome = "'{$uname}'";
$sessionid = session_id();
$idorder = "'{$uname}0000{$sessionid}'";



$sql = "select * from `users`";


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
    <a href="adminnmodule.php">Go Back</a>
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Birthdate</th>";
    echo "<th>Phone Number</th>";
    echo "<th>Email</th>";
    echo "<th>Address</th> ";
    echo "</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            if ($value != $row['Pass']) echo "<td> " . $value . " </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>


</body>

</html>