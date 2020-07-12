<?php
    if(isset($_POST['submit-btn'])){
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $blood = $_POST['bloodgroup'];
        $last_date = $_POST['date'];
        $address = $_POST['address'];
        $pin_code = $_POST['pincode'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        // Testing purposes
        // echo $first_name.'<br>';
        // echo $last_name.'<br>';
        // echo $email.'<br>';
        // echo $phone.'<br>';
        // echo $blood.'<br>';
        // echo $last_date.'<br>';
        // echo $address.'<br>';
        // echo $pin_code.'<br>';
        // echo $age.'<br>';
        // echo $gender.'<br>';

        $ticket = "REQ100001";
        header("Location:../confirmations/donateconfirmation.php?ticket=$ticket");
    }
    else{
        echo '<h1 align="center">Please don\'t open this page directly.</h1>';
    } 
?>