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
</head>
<body>
    <header>
        
    </header>
    <section>
            <!-- carousel here -->
        <ul>
        <?php

            $products = getFeaturedProducts();
            foreach($products as $product){
                echo '
                <li>
                    <img style="width:auto;height:300px;" src="' . $product["imgUrl"] . '" alt="' . $product["name"] . '">' .
                '</li>';
            };
        ?>
        </ul>
    </section>
    <footer>
        
    </footer>
    
</body>
</html>