<?php include("inc/queries.php"); ?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>

<body> -->
    
<div>
    <?php include("inc/header.php"); ?>
</div>


    <div class="products">
        <ul class="item">
            <?php

                $products = getAllProducts();
                foreach($products as $product){
                    echo '
                    <li>
                        <ul><a>
                            <li><h2> '. $product["name"] . '</h2></li>
                            <li>' . $product["price"] . '</li>
                            <li class="container"><img src="' . $product["imgUrl"] . '" class="img"><div class="middle"><div class="text">View Details</div></div></li>
                        </ul></a>
                    </li>';
                };


            ?>

        </ul>
    </div>

<?php include("inc/footer.php"); ?>

    

