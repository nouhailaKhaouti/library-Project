    <div class="col-4 col-md-3 col-xl-2 px-sm-2 px-0 head text-white side">
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
                    <button onclick="display(`users`)" class="nav-link px-0 align-middle">
                        <i class="bi bi-people text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Users</span></button>
                </li>
                <li>
                    <button onclick="display(`categories`)" class="nav-link px-0 align-middle">
                        <i class="bi bi-tag text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Categories</span></button>
                </li>
                <li>
                    <button onclick="display(`book`)" class="nav-link px-0 align-middle">
                        <i class="bi bi-book text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Books</span></button>
                </li>
                <li>
                    <button onclick="display(`profile`)" class="nav-link px-0 align-middle">
                    <i class="bi bi-person-fill-gear text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Profile</span></button>
                </li>
            </ul>
            <hr>
            <div class="dropdown pb-4 mb-5">
            <a class="text-decoration-none btn button" href="./php/clearSession.php"><i class="bi bi-box-arrow-left text-white"></i><span class="ms-1 d-none d-sm-inline text-white">log Out</span></a>
            
            </div>
        </div>
    </div>