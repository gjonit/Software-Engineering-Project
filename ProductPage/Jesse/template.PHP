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
    <link rel="stylesheet" href="prod_template_new.css">

</head>

<body>
    <table>
	<tr>
		<td>

	 	    <img src="images/<?php echo $num;?>.jpg"" alt="" id = "product">
		</td>

		<td>
	  	   <h1><?php echo $name ?></h1>
	  	   <p><?php echo $desc ?></p>
	  	   <p class = "price"><?php echo "$".$price ?></p>
		   <input placeholder = "quantity">
	  	   <p><button id = "add">Add to Cart</button></p>
		</td>
	</tr>
</table>
	
             

</body>

</html>