<?php
include("inc/queries.php");
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