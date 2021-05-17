$ProductIDD = $_POST['ProductIDD'];

if (isset($_POST["delete"])) {

echo "Loololololool";
$sqlll = "DELETE FROM products WHERE ProductID = $ProductIDD";
if ($conn->query($sqlll) === TRUE) {
echo "Deleted!";
} else {

echo "Error! Not deleted!: " . $sqlll . "<br>" . $conn->error;
}
}




<div class="form-style-8" style="float:right; margin-right: 200px">
    <h2>Delete a product from the system</h2>
    <form method=" post" enctype="multipart/form-data">
        <input type="text" name="ProductIDD" id="ProductIDD" placeholder="ProductID" />
        <input type="submit" name="delete" value="Delete" />
</div>