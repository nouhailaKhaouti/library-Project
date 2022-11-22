<?php
include './view/header.php';
if (isset($_SESSION['user_id']) && $_SESSION['role'] == 1) {
?>
    <br>
    <br>
    <div class="mx-5 col-4">
        <button class="btn button1" onclick="search()"><i class="bi bi-search "></i> Search</button>
        <br>
        <br>
        <div id="search" class="d-none ms-3">
            <input class=" form-control input-sm rounded-3 cart shadow-sm " type="text" placeholder="Recherche sur les titres" id="recherche" onkeyup="filtrer()">
        </div>
    </div>
    <section class="d-flex flex-wrap justify-content-around p-5 section2" id="section">
        <?php getLibrary() ?>
    </section>

    <script>
        function search() {

            var input_name = document.getElementById("search");
            if (input_name.classList.contains('d-none')) {
                console.log("hiii");
                input_name.classList.remove('d-none');
                console.log(input_name.style.display);
            } else {
                input_name.classList.add('d-none');
            }
        }
    </script>
<?php

    include "autoloader.php";
} else {
    $_SESSION['error'] = "you need to register first if you want to see more";
    header("Location: http://localhost/library-project/index.php");
}

?>