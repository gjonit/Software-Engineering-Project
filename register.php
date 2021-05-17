<?php

include "config.php";
error_reporting(E_ERROR | E_PARSE);

$username = $_POST['username'];
$username = "'{$username}'";

$birthdate = $_POST['birthdate'];
$birthdate = "'{$birthdate}'";
$phone = $_POST['phone'];
$email = $_POST['email'];
$email = "'{$email}'";

$addr = $_POST['addr'];
$addr = "'{$addr}'";
$password = $_POST['password'];
$password = "'{$password}'";





if (isset($_POST['sub'])) {
  $sql = "INSERT INTO users (ID, Birthdate, PhoneNr, Email, Addr, Pass) VALUES ($username, $birthdate,$phone,$email, $addr,HASHBYTES('SMA1',$password))";
  if ($conn->query($sql) === TRUE) {
    echo "GOOD";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="registerr.css" />
  <title>Document</title>
</head>

<body>

  <a href="login.php">Login</a>
  <div class="form-style-8">
    <h2>Register</h2>
    <form method="post">
      <input type="text" name="username" id="username" placeholder="User Name" />
      <input type="text" name="birthdate" id="birthdate" placeholder="Birthdate" />
      <input type="text" id="phone" name="phone" placeholder="Phone Number" />
      <input type="email" name="email" id="email" placeholder="Email" />
      <input type="text" name="addr" id="addr" placeholder="Address" />
      <input type="password" name="password" id="password" placeholder="Password" />
      <input type="password" name="password2" id="password2" placeholder="Repeat Password" />
      <input type="submit" name="sub" value="Register" />
    </form>
  </div>
</body>

</html>