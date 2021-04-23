<?php
    include 'database.php';

    //Check if form submitted
    if(isset($_POST['submit'])) {
        $user = mysqli_real_escape_string($con, $_POST['user']);
        $message = mysqli_real_escape_string($con, $_POST['message']);

        //Set timezone

    }
?>