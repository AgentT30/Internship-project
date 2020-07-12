<html>
    <head>
        <title>Sign up for Newsletter!</title>
    </head>
    <body>
        <?php
            if(isset($_POST['submit-btn'])){
                // Insert email to database.
               $email = $_POST['newsletter-email'];
               
               echo '<script>window.location.href = "../thankYou.html";</script>';
            }
            else {
                echo '<script>alert("Plese dont open this page directly")</script>';
            }
        ?>         
    </body>
</html>