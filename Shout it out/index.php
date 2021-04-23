<?php include 'database.php' ; ?>
<?php
    //Create select query
    $query = "SELECT *  FROM shouts";
    $shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Shout it</title>
</head>
<body>
    <div id="container">
        <header>
            <h1>Shout It Box</h1>
        </header>
        <div id="shouts">
            <ul>
                <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                    <li class="shout"><span> <?php echo $row['time'] ?>  -</span> <?php echo $row['user'] ?>  : <?php echo $row['message'] ?>  </li>
                 <?php endwhile ?>
                
            </ul>
        </div>
        <div id="input">
            <form action="process.php" method="post">
                <input type="text" name="user" placeholder="Enter Your Name" />
                <input type="text" name="message" placeholder="Enter a Message" />
                <br>
                <input class="shout-btn" type="submit" name="submit" value="Shout it"/>
            </form>
        </div>
    </div>

</body>
</html>