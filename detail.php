<?php
include("inc/queries.php");

$id = null;
if (isset($_GET["id"])) {
    $id = $_GET["id"];
  }
?>

<?php include("inc/header.php"); ?>
    <section>
        <ul>
            
        <?php

            $product = getOneProduct($id);
            echo getViewDetailsHTML($product);

        ?>
        </ul>
    </section>
    <?php include("inc/footer.php"); ?>