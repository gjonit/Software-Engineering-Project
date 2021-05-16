<?php
include "config.php";
session_start();
echo session_id();

$nam = $_SESSION['uname'];

$testnam = "'{$nam}'";


$num = $_GET['ProductID'];
$sql = 'SELECT *
		FROM products
		WHERE ProductID = ' . $num;

$result = $conn->query($sql);
// output data of each row
$row = $result->fetch_assoc();

$name = $row['Name'];
$testname = "'{$name}'";
$price = $row['Price'];
$desc = $row['Description'];
$man = $row['Manufacturer'];

if (isset($_POST['nw_update'])) {
    $quant = $_POST['quantity'];
    $allprice = $quant * $price;
    $sqll = "INSERT INTO cart (CartID, ProductID, Quantity, Price, PorductName, Total) VALUES ($testnam, $num, $quant, $price, $testname, $allprice)";

    if ($conn->query($sqll) === TRUE) {
        $smth = "123";
    } else {
        echo "Error: " . $sqll . "<br>" . $conn->error;
    }
}
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name ?></title>
    <link rel="stylesheet" href="prod_template_new.css">

</head>

<body>
    <a href="Products.php">Go Back</a>
    <table>
        <tr>
            <td>

                <img src="pics/<?php echo $name; ?>.jpg"" alt="" id = " product">
            </td>
            <form method="post">
                <td>
                    <h1><?php echo $name ?></h1>
                    <p><?php echo $desc ?></p>
                    <p class="price"><?php echo "$" . $price ?></p>
                    <input type="number" id="quantity" name="quantity" placeholder="Quantity">
                    <input type="submit" name="nw_update" value="Add to Cart" />
                </td>

            </form>

        </tr>
    </table>



</body>

</html>