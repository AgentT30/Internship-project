<?php
    if(isset($_POST['submit'])){
        $id = $_POST['logininid'];
        $pass = $_POST['password'];

        $username = 'admin123';
        $password = "admin123";

        if(($id == $username) && ($pass == $password)){
            header("Location:../adminHome.html");
        }
        else{
            echo '<script>alert("Wrong username or password!")</script>';
            echo '<form action="newsletter.php" method="GET">';
            echo '<button class="backbutton" name="goback">Click here to go back</button>';
            echo '</form>';
            if(isset($_GET['goback'])){
                header("Location:../index.html");
            }
        }
    }
    
   
?>