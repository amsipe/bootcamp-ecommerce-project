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

function searchProducts($search){
    try {
        $db = getDB();
        $sql = "SELECT
        *
        FROM
        products
        left join products_categories using (productID) 
        left join categories using (categoryID)
        where
        (products.name like ? 
        or products.description like ?
        or categories.category_name like ?)
        ";
        $results = $db->prepare($sql);
        $results->bindValue(1,"%".$search."%",PDO::PARAM_STR);
        $results->bindValue(2,"%".$search."%",PDO::PARAM_STR);
        $results->bindValue(3,"%".$search."%",PDO::PARAM_STR);
        $results->execute();
    }catch (Exception $e){
        echo "No Results";
        exit;
    }
    $products = $results->fetchAll();
    return $products;
}

function getOneProduct($id){
    try {
        $db = getDB();
        $sql = "SELECT * FROM products WHERE products.productID = ?";
        $results = $db->prepare($sql);
        $results->bindParam(1,$id,PDO::PARAM_INT);
        $results->execute();
    }catch (Exception $e){
        echo "Product not found.";
        exit;
    }
    $item = $results->fetch(PDO::FETCH_ASSOC);
    return $item;
}

