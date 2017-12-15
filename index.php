<?php
include("inc/queries.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holiday Decorations Store</title>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        
    </header>
    <section>
            <!-- carousel here -->
        <div class="carousel">
            <?php

                $products = getFeaturedProducts();
                foreach($products as $product){
                    echo '
                    <div>
                        <img src="' . $product["imgUrl"] . '" alt="' . $product["name"] . '">' .
                    '</div>';
                };
            ?>
        </div>
        <div class="carousel-nav">
            <?php
                foreach($products as $product){
                    echo '
                    <div>
                        <img src="' . $product["imgUrl"] . '" alt="' . $product["name"] . '">' .
                    '</div>';
                };
            ?>
        </div>
    </section>
    <footer>
        
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>