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
                    <a class="cat-selector" href="#">All</a>
                </li>
                <li>
                    <a class="cat-selector" href="#">Ornaments</a>
                </li>
                <li>
                    <a class="cat-selector" href="#">Wreaths and Garland</a>
                </li>
                <li>
                    <a class="cat-selector" href="#">Outdoor Decorations</a>
                </li>
                <li>
                    <a class="cat-selector" href="#">Indoor Decorations</a>
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
                    echo '
                    <li class="search-result-item" data-category="'. $product["category_name"]. '">
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
            
        </div>
    </section>
    <?php include("inc/footer.php"); ?>