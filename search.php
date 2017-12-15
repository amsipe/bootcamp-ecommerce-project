<?php
include("inc/queries.php");

$search = null;
if (isset($_GET["s"])) {
    $search = filter_input(INPUT_GET,"s",FILTER_SANITIZE_STRING);
  }
?>

<?php include("inc/header.php"); ?>
    <section>
        <form method="get" action="search.php">
            <label for="s">Search:</label>
            <input type="text" name="s" id="s" />
            <input type="submit" value="Search" />  
        </form>
    </section>
    <section>
        <div class="products">
            
        </div>
        <ul class="item">
            
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
    <?php include("inc/footer.php"); ?>