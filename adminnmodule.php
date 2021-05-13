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
            border-radius: 10px;
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
        <a href="AddProduct.html">
            <button style="background-color:blue;color:white;height: 30px; width: 150px;margin: 20px ;border-radius: 5px;">Product Entry</button>
            <a href="ViewOrder.html">
                <button style="background-color:blue;color:white;height: 30px; width: 150px;margin: 20px ;border-radius: 5px;">View Order</button>
                <a href="Viewuserdetails.html">
                    <button style="background-color:blue;color:white;height: 30px; width:150px;margin: 20px ;border-radius: 5px;">View User Details</button>

                    <a href="register.html">
                        <button style="background-color:blue;color:white;height: 30px; width:150px;margin: 20px ;border-radius: 5px;">Register New User</button>
    </div>

    <div id="banner">
        <div class="inline-block">
            <img src="pics/chart1.jpg" style="width:550px;height:300px;">
        </div>

        <div class="inline-block">
            <img src="pics/chart2.png" style="width:550px;height: 300px;">
        </div>

        <div class="inline-block">
            <img src="pics/chart3.jpg" style="width:550px;height:300px;">
        </div>
    </div>

</body>

</html>