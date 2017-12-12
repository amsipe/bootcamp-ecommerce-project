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
        <ul>
            
        <?php

            $products = getAllProducts();
            foreach($products as $product){
                echo '
                <li>
                    <ul>
                        <li> '. $product["name"] . '</li>
                        <li>' . $product["price"] . '</li>
                        <li><img style="width:200px;height:auto;" src="' . $product["imgUrl"] . '"></li>
                        <li>' . $product["description"] . '</li>
                    </ul>
                </li>';
            };


        ?>
        </ul>
    </section>
    <footer>
        
    </footer>
    
</body>
</html>