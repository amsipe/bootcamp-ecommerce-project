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
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        
    </header>
    <section>
        <form id="contact-form" method="POST" action="comments.php">
            <p>
                <label for="firstName">FirstName</label>
                <input type="text" name="firstName">
            </p>
            <p>
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName">    
            </p>
            <p>
                <label for="email">Email</label>
                <input type="text" name="email">    
            </p>
            <p>
                <label for="phone">Phone #</label>
                <input type="text" name="phone">
            </p>
            <p>
                <label for="comment">Comments:</label>
                <textarea rows="4" cols="25" name="comment"></textarea>               
            </p>
            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/jquery.validate.min.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>