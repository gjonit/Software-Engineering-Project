<?php

include "config.php";
//echo "Connected successfully";

// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: login.php');
}

session_start();
echo session_id();

$sql = 'SELECT *
        FROM products
        ORDER BY ProductID';
$result = mysqli_query($conn, $sql);
// output data of each row
$count = 0;

// $testname = $_SESSION['uname'];

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="medshop.css">
</head>

<body>




    <nav>
        <li class="header"><a href="adminnmodule.php" style="color:white; font-size:22px">Go Back</a>
        <li class="header"><a href="AddProduct.php" style="color:white; font-size:22px">Add/Delte Products</a>

    </nav>


    <h2>All Products</h2>

    <table>
        <tr>
            <?php while ($products = mysqli_fetch_assoc($result)) : ?>
                <form method="post">
                    <td>
                        <a href="template2.php?ProductID=<?php echo $products['ProductID']; ?>">
                            <img src="pics/<?php echo $products['Namee']; ?>.jpg" alt="" id="product">
                        </a>
                        <h3><?php echo $products['Namee']; ?> </h3>
                        <div class="price"><?php echo "$" . $products['Price']; ?></div>
                        <div class="price"><?php echo "There are: " . $products['Stock'] . " left"; ?></div>
                    </td>
                </form>
                <?php $count++ ?>
                <?php
                if ($count % 4 == 0) {
                    echo "</tr><tr>";
                } ?>

            <?php endwhile; ?>
        </tr>
    </table>


</body>

</html>