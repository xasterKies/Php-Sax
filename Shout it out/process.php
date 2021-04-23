<?php
    include 'database.php';

    //Check if form submitted
    if(isset($_POST['submit'])) {
        $user = mysqli_real_escape_string($con, $_POST['user']);
        $message = mysqli_real_escape_string($con, $_POST['message']);

        //Set timezone
        date_default_timezone_set('America/New_York');
        $time = data('h:i:s:a', time());

        //Validate input
        if(!isset($user) || $user == '' || !isset($message) || $message == ''){
            echo 'bad'
        } else {
            echo 'good'
        }
    }
?>