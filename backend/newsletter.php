<html>
    <head>
        <title>Sign up for Newsletter!</title>
    </head>
    <body>
        <?php
            if(isset($_POST['submit-btn'])){
                // Insert email to database.
               $email = $_POST['newsletter-email'];
               
            //    echo '<script>window.location.href = "../thankYou.html";</script>';
                header("Location:../confirmations/thankYou.html");
            }
            else {
                echo '<script>alert("Please dont open this page directly")</script>';
                // echo '<h1 align="center">Please don\'t open this page directly.</h1>';
                echo '<form action="newsletter.php" method="GET">';
                echo '<button class="backbutton" name="goback">Click here to go back</button>';
                echo '</form>';
                if(isset($_GET['goback'])){
                    header("Location:../index.html");
                }
            }
        ?>         
    </body>
</html>