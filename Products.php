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
$sql = 'SELECT *
        FROM products
        ORDER BY ProductID';
$result = mysqli_query($conn, $sql);
  // output data of each row
$count = 0;
  
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
        <li class="header"><a href="register.html">Register</a></li>
        <li class="header"><a href="About">About</a></li>
        <li class="header"><a href="Contact">Contact</a></li>

        <select name="menu" id="menu" class="menu">
            <option value="">Menu</option>
            <option value="Cart">Cart</option>
            <option value="Log out">Log out</option>
            <option value="Settings">Settings</option>
        </select>
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
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
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

    <form action="/search" class="search">
        <button>Sort By: </button>
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Brand">
        <input type="text" placeholder="Type">

    </form>

    <h2>All Products</h2>

    <table>
        
        <tr>
		<?php  while($products = mysqli_fetch_assoc($result)) :?>
			
            <td>
                <a href="template.php?ProductID=<?php echo $products['ProductID'];?>">
                    <img src="images/<?php echo $products['ProductID'];?>.jpg" alt="" id="product">
                </a>
                <h3><?php echo $products['Name'];?> </h3>
                <div class="price"><?php echo "$".$products['Price'];?></div>
                <button id="cartadd">Add to Cart</button>
            </td>
		<?php $count++ ?>
		<?php 
			if($count%4 ==0){
				echo "</tr><tr>";
			}?>
			
		<?php endwhile; ?>
		</tr>
	</table>

 
</body>

</html>