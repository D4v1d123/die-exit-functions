<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Die function</title>
</head>
<body>
    <h1>Hello world.</h1>
    <br>
    <?php 
    // die => It is a function that allow you to stop the execution of a program and display an optional error message.
    die("<p class='white-text'>Optional error message.</p>"); 

    // exit => It is a function that allow you to stop the execution of a program without displaying an error message.
    exit();
    ?>
    <p class="white-text">
        A “Hello, world!” program is traditionally used to introduce novice programmers
        to a programming language. “Hello, world!” is also traditionally used in a sanity
        test to make sure that a computer language is correctly installed, and that the
        operator understands how to use it.
    </p>
</body>
</html>