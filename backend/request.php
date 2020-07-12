<?php
    if(isset($_POST["submit-btn"]) && isset($_POST[])){
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $blood = $_POST['bloodgroup'];
        $amount = $_POST['amount'];
        $address = $_POST['address'];
        $pin_code = $_POST['pincode'];

        // Testing purposes
        // echo $first_name.'<br>';
        // echo $last_name.'<br>';
        // echo $email.'<br>';
        // echo $phone.'<br>';
        // echo $blood.'<br>';
        // echo $amount.'<br>';
        // echo $address.'<br>';
        // echo $pin_code.'<br>';


        $ticket = "REQ100001";
        header("Location:../confirmations/requestconfirmation.php?ticket=$ticket");
    }
    else{
        echo '<h1 align="center">Please don\'t open this page directly.</h1>';
    }    
?>