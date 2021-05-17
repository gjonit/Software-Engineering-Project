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
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
        <li class="header"><a href="CostumerOrder.php" style="color:white;font-size:22px">Orders</a></li>
        <li class="header"><a href="contact.html" style="color:white;font-size:22px">Contact</a></li>
        <li class="header"><a href="cart.php" style="color:white;font-size:22px">Cart</a></li>

    </nav>

    <h1>Medical co Products</h1>


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



    <h2>All Products</h2>

    <table>
        <tr>
            <?php while ($products = mysqli_fetch_assoc($result)) : ?>
                <form method="post">
                    <td>
                        <a href="template.php?ProductID=<?php echo $products['ProductID']; ?>">
                            <img src="pics/<?php echo $products['Namee']; ?>.jpg" alt="" id="product">
                        </a>
                        <h3><?php echo $products['Namee']; ?> </h3>
                        <div class="price"><?php echo "$" . $products['Price']; ?></div>
                        <button id="cartadd" name="cartaddd" value="cartadd">View Product</button>
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