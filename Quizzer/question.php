<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="current">
                Question 1 of 5
                <p class="question">
                    What does PHP stand for?
                </p>
                <form method="post" action="process.php">
                    <ul class="choices">
                        <li><input name="choice" type="radio" value="1">PHP: Hypertext Processor</li>
                        <li><input name="choice" type="radio" value="1">Private Home Page</li>
                        <li><input name="choice" type="radio" value="1">Personal Home Page</li>
                        <li><input name="choice" type="radio" value="1">Personal Hypertext</li>

                    </ul>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
             Copywright &copy; 2021, PHP Quizzer       
         </div>
    </footer>
</body>
</html>