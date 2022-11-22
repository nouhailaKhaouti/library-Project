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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Karla:ital,wght@0,300;1,200;1,300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>library</title>
</head>

<body>
    <header class="d-flex justify-content-between">
        <img src="" alt="">
        <?php if (isset($_SESSION['user_id'])) : ?>

            <ul class="list-unstyled text-decoration-none d-flex justify-content-around pt-3 pe-3 ">
                <li><a class="btn button2 " href="http://localhost/library-project/home.php?action=Home"> Home</a> </li>
                &nbsp;
                &nbsp;
                <li><a class="btn button2 " href="http://localhost/library-project/books.php">Books</a> </li>
                &nbsp;
                &nbsp;
                <li><a class="btn button2 " href="http://localhost/library-project/home.php?action=library">My library</a> </li>

            </ul>
            <ul class="list-unstyled text-decoration-none d-flex justify-content-around pt-3 pe-3 ">
                <li><?= 'hello  ' . $_SESSION['user_name'] ?></li>
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
    <img src="image/line1.png" alt="" height="20" width="1250">
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
            <!-- <strong>Success!</strong> -->
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
        </div>
    <?php endif ?>