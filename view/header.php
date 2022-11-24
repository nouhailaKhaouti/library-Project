<?php
include "./php/user.php";

if (isset($_GET["action"]) && $_GET["action"] == "Home") {
    header("location: http://localhost/library-project/home.php ");
}
if (isset($_GET["action"]) && $_GET["action"] == "library") {
    header("location: http://localhost/library-project/mybook.php ");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Karla:ital,wght@0,300;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" defer></script>
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">

    <title>library</title>
</head>

<body style="width:100 vw;">
    <header class="d-flex justify-content-between">
        <img src="" alt="">
        <?php if (isset($_SESSION['user_id'])) : ?>
            <!-- <button class="btn btn-sm button1" onclick="click()"><i class="bi bi-list" ></i></button> -->
            <div id="click">
                <ul class="list-unstyled text-decoration-none d-flex justify-content-around pt-3 pe-3  ">
                    <li><a class="btn button2 " href="http://localhost/library-project/home.php?action=Home"> Home</a> </li>
                    &nbsp;
                    &nbsp;
                    <li><a class="btn button2 " href="http://localhost/library-project/books.php">Books</a> </li>
                    &nbsp;
                    &nbsp;
                    <li><a class="btn button2 " href="http://localhost/library-project/home.php?action=library">My library</a> </li>
                </ul>
            </div>
            <ul class="list-unstyled text-decoration-none d-flex justify-content-around pt-3 pe-3 ">
                <li class="d-none d-sm-inline"><?= 'hello  ' . $_SESSION['user_name'] ?></li>
                &nbsp;
                &nbsp;
                <li>
                    <a class="text-decoration-none" href="./user_Profile.php"><img src="image/user.png" alt="user" height="20" width="20"></a>
                </li>
                &nbsp;
                &nbsp;
                <li><a class="text-decoration-none" href="./php/clearSession.php"><i class="bi bi-box-arrow-right"></i></a></li>
            </ul>

        <?php else : ?>
            <ul class="list-unstyled text-decoration-none d-flex justify-content-end pt-3 pe-3 ">
                <li><button id="signIn" class="btn button" onclick="SignIn()" type="submit">Sign In</button></li>
                &nbsp;
                &nbsp;
                <li><button id="register" class="btn button" onclick="LogUp()" type="submit">Register</button></li>
            </ul>

        <?php endif ?>
    </header>
    <hr class="h-10">
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="alert alert-info alert-dismissible fade show">
            <!-- <strong>Success!</strong> -->
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
        </div>
    <?php endif ?>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
        </div>
    <?php endif ?>