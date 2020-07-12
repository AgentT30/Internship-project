<?php
    if(isset($_GET['submit-btn'])){
        $type = $_GET['bloodtype'];
        $amount = $_GET['amount'];

        // Testing purposes
       echo $type;
       echo '<br>';
       echo $amount;

       $avail = "is";
        header("Location:../confirmations/enquiryDetails.php?type=$type&?avail=$avail");
    }
    else{
        echo '<h1 align="center">Please don\'t open this page directly.</h1>';
    } 
?>