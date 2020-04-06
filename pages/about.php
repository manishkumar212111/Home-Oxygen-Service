<?php require './../header.php' ?>

<?php

$servername = "127.0.0.1:3306";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<link rel="stylesheet" href="/../../static/css/contact.css">

<div class="body">
    <div class="content">
        <div class="product_page_banner" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../static/images/products.jpg');">
            <h2>About Us</h2>                     		
        </div>
    </div>

    <div class="shadow">
        <div class="row contact">
            
        </div>
    </div>
</div>

<?php require './../footer.php' ?>
