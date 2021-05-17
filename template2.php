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

$name = $row['Namee'];
$testname = "'{$name}'";
$price = $row['Price'];
$desc = $row['Descriptionn'];
$man = $row['Manufacturer'];
$stock = $row['Stock'];


if (isset($_POST['decrease'])) {
    $quant = $_POST['Quantityy'];
    $sqlll = "UPDATE products SET Stock = Stock - $quant WHERE ProductID = $num";
    if ($conn->query($sqlll) === TRUE) {
        echo "Decreased!";
    } else {
        echo "Did not decrease!: " . $sqlll . "<br>" . $conn->error;
    }
}


if (isset($_POST['increase'])) {
    $quant = $_POST['Quantity'];
    $sqlll = "UPDATE products SET Stock = Stock + $quant WHERE ProductID = $num";
    if ($conn->query($sqlll) === TRUE) {
        echo "Increased!";
    } else {
        echo "Did not increase!: " . $sqlll . "<br>" . $conn->error;
    }
}


if (isset($_POST['delete'])) {
    $quant = $_POST['Quantity'];
    $sqlll = "UPDATE products SET Stock = Stock - $stock WHERE ProductID = $num";
    if ($conn->query($sqlll) === TRUE) {
        echo "Its )!";
    } else {
        echo "Its not )! " . $sqlll . "<br>" . $conn->error;
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
    <a href="viewProducts.php">Go Back</a>
    <table>
        <tr>
            <td>

                <img src="pics/<?php echo $name; ?>.jpg"" width = 400px height = 400px alt="" id = " product">
            </td>
            <form method="post">
                <td>
                    <h1><?php echo $name ?></h1>
                    <p><?php echo $desc ?></p>
                    <p class="price"><?php echo "$" . $price ?></p>
                    <p class="price"><?php echo  $stock . " available" ?></p>


                    <input type="number" id="Quantityy" name="Quantityy" placeholder="Quantity">
                    <input type="submit" name="decrease" value="Decrease By" />
                    </br>
                    </br>
                    <input type="number" id="Quantity" name="Quantity" placeholder="Quantity">
                    <input type="submit" name="increase" value="Increase By" />
                    </br>
                    </br>

                    <input type="submit" name="delete" value="Delete All" />
                </td>

            </form>

        </tr>
    </table>



</body>

</html>