<!DOCTYPE html>



<?php

include "config.php";


if (isset($_POST['but_submit'])) {

    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if ($uname != "" && $password != "") {

        $sql_query = "select count(*) as cntUser from users where ID='" . $uname . "' and Password='" . $password . "'";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['uname'] = $uname;
            header('Location: Products.php');
        } else {
            echo "Invalid username and password";
        }
    }
}


if (isset($_POST['but_submitt'])) {

    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if ($uname != "" && $password != "") {

        $sql_query = "select count(*) as cntUser from Admin where ID='" . $uname . "' and pass='" . $password . "'";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['uname'] = $uname;
            header('Location: adminnmodule.php');
        } else {
            echo "Invalid username and password";
        }
    }
}




?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="medshoplogin.css">
</head>

<body>

    <nav>
        <li class="header"><a href="register.html">Register</a></li>
        <li class="header"><a href="about.html">About</a></li>
        <li class="header"><a href="contact.html">Contact</a></li>
    </nav>

    <hr>

    <!-- Slide Show -->
    <section>
        <div class="slideshow">
            <div class="Slide fade">
                <img src="image1.jpg" height="300" width="1000">
            </div>

            <div class="Slide fade">
                <img src="image2.jpg" height="300" width="1000">
            </div>
            <div class="Slide fade">
                <img src="image3.jpg" height="300" width="1000">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>


        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>


        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }


            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("Slide");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>
    </section>

    <div></div>

    <!-- Login Form -->


    <div id='wrapper' style='text-align:center;'>
        <div style='float:left;background-color:white;width:50%'>
            <h1>Login as User</h1>
            <form method="post" action="">
                <div>
                    <label for="username">Username: </label>
                    <input id="username" type="text" placeholder="Username" name="username" required>
                </div>
                <div>
                    <label for="password">Password: </label>
                    <input id="password" type="password" placeholder="Password" name="password" minlength="4" maxlength="20" required>
                </div>
                <div>

                    <input type="submit" value="Submit" name="but_submit" id="but_submit" />

                </div>
            </form>
        </div>


        <div style='float:right;background-color:white;width:50%'>
            <h1>Login as Admin</h1>
            <form method="post" action="">
                <div>
                    <label for="username">Username: </label>
                    <input id="username" type="text" placeholder="Username" name="username" required>
                </div>
                <div>
                    <label for="password">Password: </label>
                    <input id="password" type="password" placeholder="Password" name="password" minlength="4" maxlength="20" required>
                </div>
                <div>

                    <input type="submit" value="Submit" name="but_submitt" id="but_submitt" />

                </div>
            </form>
        </div>

    </div>








</body>

</html>