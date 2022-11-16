<?php

include('database.php');
    //CODE HERE
    unset($_SESSION["user_id"]);
    unset($_SESSION["user_name"]);
    //SQL DELETE
    $_SESSION['message'] = "you've loged out !";
    header('location:  http://localhost/library-project/index.php');