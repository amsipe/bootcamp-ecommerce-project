<?php
include("inc/queries.php");

$search = null;
if (isset($_GET["s"])) {
    $search = filter_input(INPUT_GET,"s",FILTER_SANITIZE_STRING);
  }
?>

<?php include("inc/header.php"); ?>
    <section>
        <form method="get" action="search.php" class="search-form">
            <label for="s">Search:</label>
            <input type="text" name="s" id="s" />
            <input type="submit" value="Search" />  
        </form>
        <div class="category-container">
            <ul class="category-list">
                <li>
                    <span class="cat-selector">All</span>
                </li>
                <li>
                    <span class="cat-selector">Ornaments</span>
                </li>
                <li>
                    <span class="cat-selector">Wreaths and Garland</span>
                </li>
                <li>
                    <span class="cat-selector">Outdoor Decorations</span>
                </li>
                <li>
                    <span class="cat-selector">Indoor Decorations</span>
                </li>
            </ul>
        </div>
    </section>
    <section>
        <div class="products">
            <ul class="item">
                
            <?php
                if(!empty($search)){
                    $products = searchProducts($search);
                }else {
                    $products = getAllProducts();
                }
                foreach($products as $product){
                    echo getProductHTML($product);
                };
    
            ?>
            </ul>
            
        </div>
    </section>
    <?php include("inc/footer.php"); ?>