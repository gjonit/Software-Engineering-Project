<?php
//adds new product to the database.
include "config.php";
error_reporting(E_ERROR | E_PARSE);

// Check if image file is a actual image or fake image

$ProductID = $_POST['ProductID'];

$Name = $_POST['Name'];
$Name = "'{$Name}'";
$Manufacturer = $_POST['Manufacturer'];
$Manufacturer = "'{$Manufacturer}'";

$Price = $_POST['Price'];
$Description = $_POST['Description'];
$Description = "'{$Description}'";
$Stock = $_POST['Stock'];




$target_dir = "pics/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  $sql = "INSERT INTO products (ProductID, Namee, Manufacturer, Price, Descriptionn, Stock) 
  VALUES ($ProductID, $Name,$Manufacturer,$Price, $Description,$Stock)";
  if ($conn->query($sql) === TRUE) {
    echo "GOOD";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if (
  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"
) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="registerr.css" />
  <title>Add Product</title>
</head>

<body>
  <li class="header"><a href="adminnmodule.php" style="color:white; font-size:22px">Go Back</a>

    <div class="form-style-8">
      <h2>Add a new product to the system</h2>
      <form method="post" enctype="multipart/form-data">

        <input type="text" name="ProductID" id="ProductID" placeholder="ProductID" />

        <input type="text" name="Name" id="Name" placeholder="Name" />

        <input type="text" id="Manufacturer" name="Manufacturer" placeholder="Manufacturer" />

        <input type="text" name="Price" id="Price" placeholder="Price" />

        <input type="text" name="Description" id="Description" placeholder="Description" />

        <input type="text" name="Stock" id="Stock" placeholder="Stock" />

        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
      </form>
    </div>






    <div class="form-style-8">
      <h2>Delete a product!</h2>
      <form method="post">
        <input type="text" name="ProductIDD" id="ProductIDD" placeholder="ProductID" />
        <input type="submit" name="dele" value="Delete" />
      </form>
    </div>

    <?php

    $PID = $_POST['ProductIDD'];

    if (isset($_POST['dele'])) {
      $sqll = "DELETE FROM products WHERE ProductID = $PID ;";
      if ($conn->query($sqll) === TRUE) {
        echo "Deleted!";
      } else {
        echo "Error: " . $sqll . "<br>" . $conn->error;
      }
    }

    ?>

</body>

</html>