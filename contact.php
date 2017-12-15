<?php
include("inc/queries.php");

?>

<?php include("inc/header.php"); ?>
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

    <?php include("inc/footer.php"); ?>