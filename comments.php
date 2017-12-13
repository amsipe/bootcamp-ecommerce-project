<?php
include("inc/queries.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = trim(filter_input(INPUT_POST,"firstName",FILTER_SANITIZE_STRING));
    $lastName = trim(filter_input(INPUT_POST,"lastName",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $phone = trim(filter_input(INPUT_POST,"phone",FILTER_SANITIZE_NUMBER_INT));
    $comment = trim(filter_input(INPUT_POST,"comment",FILTER_SANITIZE_STRING));
    
    
    $result = addContactForm($firstName,$lastName,$email,$phone,$comment);
    if($result){
        header('location:comments.php');
    }
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
        <ul>
            
        <?php

            $comments = getAllComments();
            foreach($comments as $comment){
                echo '
                <li>
                    <ul>
                        <li>'. $comment["firstName"] . ' ' . $comment["lastName"] . ' Says: </li>
                        <li>' . $comment["commentText"] . '</li>
                        <li> On: ' . $comment["dateAdded"] . '</li>
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