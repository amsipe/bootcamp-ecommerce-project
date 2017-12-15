<?php
include("inc/queries.php");
?>

<?php include("inc/header.php"); ?>
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
    <?php include("inc/footer.php"); ?>