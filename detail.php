<?php
include("inc/queries.php");
?>

<?php include("inc/header.php"); ?>
    <section>
        <ul>
            
        <?php

            $product = getOneProduct(2);
            var_dump($product);

        ?>
        </ul>
    </section>
    <?php include("inc/footer.php"); ?>