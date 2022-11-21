    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 head text-white">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-5 d-none d-sm-inline">Menu</span>
            </a>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start text-white " id="menu">
                <li class="nav-item">
                    <button onclick="display(`statique`)" class="nav-link  align-middle px-0">
                        <i class="fs-4 bi-house text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Home</span>
                    </button>
                </li>
                <li>
                    <button onclick="display(`categories`)" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-table text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Categories</span></button>
                </li>
                <li>
                    <button onclick="display(`book`)" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-table text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Books</span></button>
                </li>
                <li>
                    <button onclick="display(`profile`)" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-table text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Profile</span></button>
                </li>
                <li><a class="text-decoration-none btn button" href="./php/clearSession.php">log Out</a></li>

            </ul>
            <hr>
            <div class="dropdown pb-4">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                    <span class="d-none d-sm-inline mx-1">loser</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>