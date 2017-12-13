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
        <form method="POST" action="comments.php">
            <label for="firstName">FirstName</label>
            <input type="text" name="firstName">
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName">
            <label for="email">Email</label>
            <input type="text" name="email">
            <label for="phone">Phone #</label>
            <input type="text" name="phone">
            <label for="comment">Comments:</label>
            <textarea rows="3" cols="8" name="comment"></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        
    </footer>
    
</body>
</html>