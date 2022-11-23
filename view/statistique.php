<div id="statique" name="pages" class="col-8 ms-5">
    <div class="row ">
        <div class="card m-3 col-4 " style="width: 20rem;background-color: #576F72;">
            <div class="card-body d-flex justify-content-around">
                <div class="text-white">
                    <h5 class="card-title text-decoration-underline">Number of Books</h5>
                    <h6 class="card-subtitle mb-2 "><?php countBook() ?></h6>
                </div>
                <div>
                    <img src="./image/book (1).png" alt="users" width="100" height="100">
                </div>
            </div>
        </div>
        <div class="card m-3 col-4" style="width: 20rem;background-color: #7D9D9C;">
            <div class="card-body d-flex justify-content-around">
                <div class="text-white">
                <h5 class="card-title text-decoration-underline">Top recomended book</h5>
                <?php TopBook() ?>
                </div>
                <div>
                    <img src="./image/top.png" alt="users" width="100" height="100">
                </div>
            </div>
        </div>
</div>
<div class="row">
        <div class="card m-3 col-4" style="width: 20rem;background-color: #7D6E83;">
            <div class="card-body d-flex justify-content-around">
                <div class="text-white">
                    <h5 class="card-title text-decoration-underline">Number of user registred</h5>
                    <h6 class="card-subtitle mb-2 "><?php countUser() ?></h6>
                </div>
                <div>
                    <img src="./image/users.png" alt="users" width="100" height="100">
                </div>
            </div>
        </div>
    </div>
</div>