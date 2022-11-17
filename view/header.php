<?php
include "./php/user.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Karla:ital,wght@0,300;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>library</title>
</head>

<body>
    <header class="d-flex justify-content-between">
        <img src="" alt="">
        <?php if (isset($_SESSION['user_id'])) : ?>
            <ul class="list-unstyled text-decoration-none d-flex justify-content-around pt-3 pe-3 ">
                <li>home</li>
                &nbsp;
                &nbsp;
                <li> <a class="text-decoration-none" href="http://localhost/library-project/books.php">books</a> </li>
                &nbsp;
                &nbsp;
                <li>my library</li>
            </ul>
            <ul class="list-unstyled text-decoration-none d-flex justify-content-around pt-3 pe-3 ">
                <li><?='hello  '. $_SESSION['user_name'] ?></li>
                &nbsp;
                &nbsp;
               <li> <div type="" class="" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="image/user.png" alt="user" height="20" width="20">
                    </div>
                    <ul class="dropdown-menu cart">
                        <li class="py-3"><a class="text-decoration-none head " href="#"> profile</a> </li>
                        <li class="py-3"><a class="text-decoration-none head" href="#"> log Out</a> </li>
                    </ul>
                  </div>
                </li>
                <li ><a class="text-decoration-none btn button" href="./php/clearSession.php">log Out</a></li>
            </ul>
        <?php else : ?>
            <ul class="list-unstyled text-decoration-none d-flex justify-content-end pt-3 pe-3 ">
                <li ><button id="signIn" class="btn button" onclick="SignIn()" type="submit">Sign In</button></li>
                &nbsp;
                &nbsp;
                <li><button id="register" class="btn button" onclick="LogUp()" type="submit">Register</button></li>
            </ul>
        <?php endif ?>
    </header>
    <hr class="divider">
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