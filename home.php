<?php
include './view/header.php';
if (isset($_SESSION['user_id'])) {
?>

    <div class="d-flex justify-content-around align-item-center">
        <div class="mt-5 d-none d-md-block">
            <img src="./image/5.png" alt="5" width="600" height="400" class="mt-5">
        </div>
        <section class="pt-5 pb-5">
            <div class="container d-flex justify-content-center align-item-center">
                <a href="#carouselExampleIndicators2" class="mt-5 pt-5" role="button" data-slide="prev">
                    <img src="image/left-fleche.png" class="mt-5" alt="user" height="50" width="50">
                </a>
                <div class="row">
                    <div class="col-12 text-center d-flex justify-content-around">
                        <h3 class="mb-3">ART Category </h3>
                        <img class="position-absolute end-0 left" src="image/arrow.png" alt="left-arrow">
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                display_book("Art");
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#carouselExampleIndicators2" class="mt-5 pt-5" role="button" data-slide="next">
                    <img src="image/right-fleche.png" class="mt-5" alt="user" height="50" width="50">
                </a>
            </div>
        </section>
    </div>
    <div class="d-flex justify-content-around align-item-center">
        <section class="pt-5 pb-5">
            <div class="container d-flex justify-content-center align-item-center">
                <a href="#carouselExampleIndicators2" class="mt-5 pt-5" role="button" data-slide="prev">
                    <img src="image/left-fleche.png" class="mt-5" alt="user" height="50" width="50">
                </a>
                <div class="row">
                    <div class="col-12 text-center d-flex justify-content-around">
                    <img class="position-absolute start-0" src="image/arrow.png" alt="right-arrow">
                        <h3 class="mb-3">Classic Category </h3>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                
                            <?php
                                display_book("Classic");
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#carouselExampleIndicators2" class="mt-5 pt-5" role="button" data-slide="next">
                    <img src="image/right-fleche.png" class="mt-5" alt="user" height="50" width="50">
                </a>
            </div>
        </section>
        <div class="mt-5 d-none d-md-block" style="margin-top:8rem;">
            <img src="./image/6.png" alt="6" width="400" height="300" class="mt-5">
        </div>
    </div>
    <div class="d-flex justify-content-around align-item-center">
        <div class="mt-5 d-none d-md-block">
            <img src="./image/7.png" alt="7" width="600" height="500" class="mt-5">
        </div>
        <section class="pt-5 pb-5">
            <div class="container d-flex justify-content-center align-item-center">
                <a href="#carouselExampleIndicators2" class="mt-5 pt-5" role="button" data-slide="prev">
                    <img src="image/left-fleche.png" class="mt-5" alt="user" height="50" width="50">
                </a>
                <div class="row">
                    <div class="col-12 text-center d-flex justify-content-around">
                        <h3 class="mb-3">SCience Category </h3>
                        <img class="position-absolute end-0 left" src="image/arrow.png" alt="left-arrow">
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                            <?php
                                display_book("Science");
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#carouselExampleIndicators2" class="mt-5 pt-5" role="button" data-slide="next">
                    <img src="image/right-fleche.png" class="mt-5" alt="user" height="50" width="50">
                </a>
            </div>
        </section>
    </div>
    <div class="d-flex justify-content-between mb-5">
    <img src="image/line1.png" alt="" height="20" width="750">
            <div class="d-flex justify-content-between">
                &nbsp;
                &nbsp;
                &nbsp;
                <a class="btn button" href="books.php">See More</a>
            </div>
            <img src="image/line2.png" alt="" height="20" width="250">
        </div>
<?php

    include "autoloader.php";
} else {
    $_SESSION['error'] = "you need to register first if you want to see more";
    header("Location: http://localhost/library-project/index.php");
}

?>