<?php
session_start();
if(isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] == true) {
    header('Location: authenticate.php');
    die();
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Di Violino</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/violinStudio.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </head>

    <body>    <nav class=" navbar navbar-expand-lg navbar-light bg-light "> <a class="navbar-brand" href="../index.php">De Violín</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item"> <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"><a class="nav-link" href="./philosophy.php">Philosophy</a> </li>
                <li class="nav-item"> <a class="nav-link" href="./events.php">Events</a> </li>
                <li class="nav-item"> <a class="nav-link" href="./resources.php">Resources</a> </li>
            </ul>
            <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item navbar-right"> <a class="nav-link" href="signIn.php">Sign In</a> </li>
            </ul>
        </div>
    </nav>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div>
                    <form method="post" action="authenticate.php">
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <input type="email" class="form-control" id="inputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email"> <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="pass" placeholder="Password"> </div>
                        <button type="submit" class="btn primary-color">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>