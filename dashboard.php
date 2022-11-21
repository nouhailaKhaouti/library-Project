<?php
    include "./php/user.php";
    if (isset($_SESSION['user_id']) && $_SESSION['role'] == 0) {
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
        <div class="row flex-nowrap">
            <?php include './view/sideNave.php' ?>
            <div>
                <div>
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
                </div>
                <?php include './view/statistique.php' ?>
                <?php include './view/category_add.php' ?>
                <div id="book" name="pages" class="d-none">
                <?php include './view/book_display.php' ?>
                    </div>
                <?php include './view/profile.php' ?>
                <script>
                    function display(page) {
                        console.log(page);
                        var pages = document.getElementsByName("pages");
                        var i, cellule;
                        for (i = 0; i < pages.length; i++) {
                            cellule = pages[i].getAttribute("id");
                            console.log(cellule);
                            if (cellule == page) {
                                pages[i].classList.remove('d-none');
                            } else {
                                console.log("dkhal");
                                pages[i].classList.add('d-none');
                            }
                        }
                    }
                </script>
            </div>
        </div>
    <?php
        include "autoloader.php";
    } else {
        $_SESSION['error'] = "you need to register first if you want to see more";
        header("Location: http://localhost/library-project/index.php");
    }

    ?>