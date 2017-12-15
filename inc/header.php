<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div class="header"> 
    <!-- https://image.ibb.co/m0BwX6/Pandy_s_Christmas_Store_Header.png -->

    </div>
            <nav>
                <ul>
                    <li <?php if ($section == "home") { echo " on"; } ?>><a href="index.php">Home</a></li>
                    <li <?php if ($section == "products") { echo " on"; } ?>><a href="products.php">Products</a></li>
                    <li <?php if ($section == "search") { echo " on"; } ?>><a href="search.php">Search</a></li>
                    <li <?php if ($section == "contact") { echo " on"; } ?>><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

    
</body>

	<div id="content">
</html>