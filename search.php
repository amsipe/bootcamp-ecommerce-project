<?php
include("inc/queries.php");

$search = null;
if (isset($_GET["s"])) {
    $search = filter_input(INPUT_GET,"s",FILTER_SANITIZE_STRING);
  }
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
        <form method="get" action="search.php">
            <label for="s">Search:</label>
            <input type="text" name="s" id="s" />
            <input type="submit" value="Search" />  
        </form>
    </section>
    <section>
        <ul>
            
        <?php
            if(!empty($search)){
                $products = searchProducts($search);
            }else {
                $products = getAllProducts();
            }
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