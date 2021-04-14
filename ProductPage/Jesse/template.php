<?php
$servername = "localhost";
$username = "root";
$dbname = "ourstore";

// Create connection
$conn = new mysqli($servername, $username,"",$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$num = $_GET['ProductID'];
$sql = 'SELECT *
		FROM products
		WHERE ProductID = '.$num;
		
$result = $conn->query($sql);
  // output data of each row
$row = $result->fetch_assoc();

$name = $row['Name'];
$price = $row['Price'];
$desc = $row['Description'];
$man = $row['Manufacturer'];
  
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name ?></title>
    <link rel="stylesheet" href="prod_template.css">

</head>

<body>
    
	<h1><?php echo $name ?></h1>

	<div class = "product image">
	  <img src="images/<?php echo $num;?>.jpg"" alt="">
	</div>


	<div class ="product_details">
	  <p class = "Rating">0 Reviews</p>
	  <p class = "price"><?php echo "$".$price ?></p>
	  <p><?php echo $desc ?></p>
	  <p><button>Add to Cart</button></p>
	</div>


	

	
	
       

  
                 
                       

</body>

</html>