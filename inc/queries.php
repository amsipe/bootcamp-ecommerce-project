<?php 

include("database.php");
function getAllProducts()
 {
    try {
        $db = getDB();
        $sql = "SELECT * FROM products";
        $results = $db->query($sql);
        // $results = $stmt->execute();
    }catch (Exception $e)
    {
        echo "Invalid Query";
        exit;
    }

    $products = $results->fetchAll();
    return $products;
}

function getAllComments(){
    try {
        $db = getDB();
        $sql = "SELECT * FROM comments ORDER BY comments.dateAdded DESC";
        $results = $db->query($sql);
    }catch(Exception $e){
        echo "Invalid Query";
        exit;
    }

    $comments = $results->fetchAll();
    return $comments;
}

function getFeaturedProducts(){
    try {
        $db = getDB();
        $sql = "SELECT * FROM products WHERE products.featured = 1 ORDER BY RAND()";
        $results = $db->query($sql);
    }catch(Exception $e){
        echo "Invalid Query";
        exit;
    }

    $products = $results->fetchAll();
    return $products;
}





