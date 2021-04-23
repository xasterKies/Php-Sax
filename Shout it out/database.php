<?php
//Connect to MySQL
$con = mysqli_connect("localhost", "root", "samuel01", "shoutit");

//test Connection
if(mysqli__connect_errno()) {
    echo "Failed to connect to MySQL: ".$mysqli_connect__error();
}
?>