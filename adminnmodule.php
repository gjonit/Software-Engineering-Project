<!DOCTYPE html>

<?php
include "config.php";
//echo "Connected successfully";

// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: login.php');
}


?>

<html lang="en">

<head>

    <style>
        .btn-group button {
            background-color: white;
            border: 1px solid white;
            color: black;
            padding: 10px 24px;
            cursor: pointer;
            float: right;
            border-radius: 50px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="inventory_admin.css" />
    <title>Admins</title>
</head>

<body>
    <form method='post' action="">
        <input type="submit" value="Logout" name="but_logout">
    </form>

    <div class="btn-group">
        <a href="products.php">
            <button style="background-color:blue;color:white">Shop</button>
    </div>


    <div class="sidenav">

        <a href="viewProducts.php">
            <button style="background-color:blue;color:white;height: 100px; width: 350px;margin-left: 440px; margin-top: 300px; font-size: 25px; border-radius: 5px;">Product Entry</button>
            <a href="viewOrders.php">
                <button style="background-color:blue;color:white;height: 100px; width: 350px; margin-left: 200px; font-size: 25px;border-radius: 5px;">View Order</button>
                <a href="viewUsers.php">
                    <button style="background-color:blue;color:white;height: 100px; width: 350px ;margin-left: 440px;font-size: 25px;border-radius: 5px;">View User Details</button>

                    <a href="register.php">
                        <button style="background-color:blue;color:white;height: 100px; width: 350px;margin-left: 195px;font-size: 25px; margin-top: 200px; border-radius: 5px;">Register New User</button>
    </div>



</body>

</html>