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

            $product = getOneProduct(2);
            var_dump($product);

        ?>
        </ul>
    </section>
    <footer>
        
    </footer>
    
</body>
</html>