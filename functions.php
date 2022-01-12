
<?php
//The functions.php file will contain all the functions we're going to use in our shopping cart system which includes the template header, template footer, and the database connection functions.
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
    // Get the amount of items in the shopping cart, this will be displayed in the header.
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <!-- Latest compiled and minified CSS -->
       


        
	</head>
	<body>
        <header>
            <div class="content-wrapper" style="margin:0 150px;">
                <img src="ksp.svg"/>
                <p><br><br></p>
                
                <nav>
                    <a href="index.php" style="margin:0 50px;">HOME</a>
                    <a href="index.php?page=equipments" style="margin:0 50px;">Equipments</a>
                    <a href="index.php?page=clothes" style="margin:0 50px;">Clothes</a>
                    <a href="index.php?page=other" style="margin:0 50px;">Others</a>
                    <style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>

<div class="dropdown style="margin:0 50px;"">
  <button class="dropbtn">BRANDS</button>
  <div class="dropdown-content">
    <a href="#">Nike</a>
    <a href="#">Adidas</a>
    <a href="#">UnderArmour</a>
    <a href="#">DKS</a>
    <a href="#">Puma</a>
    <a href="#">Skechers</a>
    <a href="#">Columbia Sportwear</a>
    <a href="#">ASICS</a>
    <a href="#">the North Face</a>
    <a href="#">Converse</a>

  </div>
</div>
                    <a href="index1.php" style="margin:0 50px;">LOGIN</a>
                    
                </nav>
                <div class="link-icons" style="margin:0 50px;">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
                        </a>
                        <span>$num_items_in_cart</span>
                    
                </div>
            </div>
        </header>
        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer class="footer">
        <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>SPORTS</h4>
                <ul>
                    <li><a href="#">Running</a></li>
                    <li><a href="#">Trining</a></li>
                    <li><a href="#">Bascketball</a></li>
                    <li><a href="#">Football</a></li>
                    <li><a href="#">Cricket</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Clothing</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
        <script src="script.js"></script>
    </body>
</html>

EOT;
}
?>