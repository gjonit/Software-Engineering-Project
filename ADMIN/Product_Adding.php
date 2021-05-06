<?php
	//$_POST is a special PHP variable that contains any data sent via POST from an HTML form. You can reference data by using HTML id value. So <text id="a"> can be accessed in PHP by getting the value of $_POST['a'];
	if($_POST['productadd']) // button is a boolean value. True or 1 is pressed, False or 0 is not.
	{
		//button pressed
		$_Post ['productadd'] = $x; //x will become the placeholder variable for the value entered in products page. 
		
		//$This part of the code will reference the SQL code. Right now I have a while loop set up to keep adding values. I need to change the variable names around so that it matches the names from our database. 
		
		$set = mysql_query('products;');
		while($db != $x)
			$db + 1;
		
		return $db;
	}
	else
	{
		//button not pressed
		return 0;
	}
	
	header('Location: Add_Product.php'); //this will redirect back to Add_Product.php
?>