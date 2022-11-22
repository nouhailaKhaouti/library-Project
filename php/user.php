<?php
//INCLUDE DATABASE FILE
include('database.php');
//ROUTING
if (isset($_POST['save'])) {
    creatUser();
}
if (isset($_POST['connect']))      connect();
if (isset($_POST['updateProfile']))      UpdateProfile();

if (isset($_POST['save_book']))        saveBook();
if (isset($_POST['update_book']))      updateBook();
if (isset($_GET['book_id']))      deleteBook();
// if (isset($_GET['bookId']))      getOneBook();

if (isset($_POST['save']))        saveCategory();
if (isset($_POST['update']))      updateCategory();
if (isset($_GET['id']))      deleteCategory();

if (isset($_POST['save_library']))      CreateLibrary();
if (isset($_POST['update_library']))      UpdateLibrary();
if (isset($_GET['library_id']))      deleteLibrary();
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function creatUser()
{
    global $link;
    //CODE HERE
    print_r($_POST);
    $userName = test_input($_POST["Name"]);
    $email = $_POST["email"];
    $password = password_hash(test_input($_POST["password"]), PASSWORD_BCRYPT);
    //SQL SELECT
    $query = mysqli_query($link, "SELECT * FROM user WHERE email_address='$email'");
    $rowcount = mysqli_num_rows($query);
    if ($rowcount > 0) {
        $_SESSION["error"] = "The email address is already registered!";
        header("Location: http://localhost/library-project/index.php");
    } else {
        $req = mysqli_query($link, "insert into user (id, user_name,email_address,user_password,user_role) values ('','$userName','$email','$password','1')");
        if ($req) {
            $_SESSION["message"] = "you successfuly been registred you can now access to your account";
            header("Location: http://localhost/library-project/index.php");
            die();
        } else {
            echo "error";
        }
    }
}

function connect()
{
    //CODE HERE
    global $link;
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $query = mysqli_query($link, "select * from user where email_address='$email'");
    $row = $query->fetch_object();
    print_r($row);
    if (!$row) {
        $_SESSION['error'] = "Username is wrong!";
        header('location: http://localhost/library-project/index.php');
    } else {
        if (password_verify($password, $row->user_password)) {
            $_SESSION['user_id'] = $row->id;
            $_SESSION['user_name'] = $row->user_name;
            $_SESSION['email'] = $row->email_address;
            $_SESSION['password'] = $row->user_password;
            $_SESSION['role'] = $row->user_role;
            $_SESSION['message'] = "Congratulations, you are logged in!";
            if ($row->user_role == 0) {
                header('location:  http://localhost/library-project/dashboard.php');
            } else if ($row->user_role == 1) {
                header('location: http://localhost/library-project/index.php');
            }
        } else {
            $_SESSION['error'] = "password is wrong!";
            header('location: http://localhost/library-project/index.php');
        }
    }
}

function UpdateProfile()
{
    global $link;
    $email = test_input($_POST["email"]);
    $name = test_input($_POST["Name"]);
    $password = $_SESSION['password'];
    $confirme = test_input($_POST["Confirme"]);
    $Oldpassword = test_input($_POST["oldpassword"]);
    $id = $_SESSION['user_id'];
    if (password_verify($Oldpassword, $password)) {
        $newpassword = test_input($_POST["newpassword"]);
        if ($newpassword == $confirme) {
            $newpassword = password_hash(test_input($_POST["newpassword"]), PASSWORD_BCRYPT);
            $req = mysqli_query($link, "UPDATE `user` SET `user_name`='$name',`email_address`='$email',`user_password`='$newpassword' WHERE id=$id");
            if (!$req) {
                $_SESSION['error'] = "error !";
                header('location: http://localhost/library-project/dashboard.php');
            } else {
                $_SESSION["message"] = "you successfuly updated your account";
                header("Location: http://localhost/library-project/dashboard.php");
            }
        } else {
            $_SESSION['error'] = "the new password dosen't match up with the confirmation  !";
            header('location: http://localhost/library-project/dashboard.php');
        }
    } else {
        $_SESSION['error'] = "Old password is wrong!";
        header('location: http://localhost/library-project/dashboard.php');
    }
}
// ********************************************book**********************************************



function getBooks()
{
    //CODE HERE
    global $link;
    $user_id = $_SESSION['user_id'];
    //SQL SELECT
    $query = mysqli_query($link, "SELECT * FROM book JOIN category ON book.category_id=category.id");
    foreach ($query as $row) {

        $category = $row['label'];
        $category_id = $row['category_id'];
        $id = $row['book_id'];
        $image = $row['image'];
        $title = $row['title'];
        $autor = $row['autor'];
        $date = $row['published'];
        $isbi = $row['isbi'];
        $page = $row['NumberPage'];
        $description = $row['description'];
        $req = mysqli_query($link, "SELECT * FROM library WHERE user_id=$user_id AND book_id=$id");
        $result = mysqli_fetch_object($req);
        $rowcount = mysqli_num_rows($req);
?>
        <div class="rounded-3 p-3" name="ligne" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                            <img src="<?= $image ?>" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <div class="card-title d-flex justify-content-around pt-2">
                                <h5 name="titre"><?= $title ?></h5>
                                <i class="bi bi-caret-down p-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                        <div>
                            <h6>Title: <span class="text-muted"><?= $title ?></span></h6>
                            <h6>Autor: <span class="text-muted"><?= $autor ?></span></h6>
                            <h6>Published: <span class="text-muted"><?= $date ?></span></h6>
                            <h6>Category: <span class="text-muted"><?= $category ?></span></h6>
                            <h6>Number of pages: <span class="text-muted"><?= $page ?></span></h6>
                            <h6>Description: <span class="text-muted"><?= $description ?></span></h6>
                        </div>
                        <?php if ($_SESSION['role'] == 1 && $rowcount == 0) : ?>
                            <button class="btn button" type="submit" onclick="createLibrary(<?= $id ?>)">Add to Library</button>
                        <?php elseif ($rowcount > 0 && $_SESSION['role'] == 1) : ?>
                            <button class="btn button" type="submit" onclick="editLibrary(<?= $id ?>,`<?= $result->type ?>`)"><?= $result->type ?></button>
                        <?php endif ?>
                        <?php if ($_SESSION['role'] == 0) : ?>
                            <button class="btn button" type="submit" onClick="editBook(<?= $id ?>,`<?= $title ?>`,`<?= $date ?>`,`<?= $description ?>`,`<?= $autor ?>`,<?= $category_id ?>,<?= $isbi ?>,`<?= $image ?>`,<?= $page ?>)">Update</button>
                            <button class="btn button" type="submit" onClick="deleteBook(<?= $id ?>)">delete</button>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

function display_book($category)
{
    global $link;
    $user_id = $_SESSION['user_id'];
    $i = 0;
    //SQL SELECT
    $query = mysqli_query($link, "SELECT * FROM book JOIN category ON book.category_id=category.id WHERE category.label='$category'");
    foreach ($query as $row) {
        $category_label = $row['label'];
        $category_id = $row['category_id'];
        $id = $row['book_id'];
        $image = $row['image'];
        $title = $row['title'];
        $autor = $row['autor'];
        $date = $row['published'];
        $isbi = $row['isbi'];
        $page = $row['NumberPage'];
        $description = $row['description'];
        $req = mysqli_query($link, "SELECT * FROM library WHERE user_id=$user_id AND book_id=$id");
        $result = mysqli_fetch_object($req);
        $rowcount = mysqli_num_rows($req);

        if ($i == 0) {
        ?>
            <div class="carousel-item active">
                <div class="d-flex justify-content-center align-item-center">
                    <div class="rounded-3 p-3" name="ligne" style="width:18rem;">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                                        <img src="<?= $image ?>" class="card-img-top" alt="..." height="300" width="100">
                                    </div>
                                    <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                                        <div class="card-title d-flex justify-content-around pt-2">
                                            <h5 name="titre"><?= $title ?></h5>
                                            <i class="bi bi-caret-down p-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                                    <div>
                                        <h6>Title: <span class="text-muted"><?= $title ?></span></h6>
                                        <h6>Autor: <span class="text-muted"><?= $autor ?></span></h6>
                                        <h6>Published: <span class="text-muted"><?= $date ?></span></h6>
                                        <h6>Category: <span class="text-muted"><?= $category_label ?></span></h6>
                                        <h6>Number of pages: <span class="text-muted"><?= $page ?></span></h6>
                                        <h6>Description: <span class="text-muted"><?= $description ?></span></h6>
                                    </div>
                                    <?php if ($_SESSION['role'] == 1 && $rowcount == 0) : ?>
                                        <button class="btn button" type="submit" onclick="createLibrary(<?= $id ?>)">Add to Library</button>
                                    <?php elseif ($rowcount > 0 && $_SESSION['role'] == 1) : ?>
                                        <button class="btn button" type="submit" onclick="editLibrary(<?= $id ?>,`<?= $result->type ?>`)"><?= $result->type ?></button>
                                    <?php endif ?>
                                    <?php if ($_SESSION['role'] == 0) : ?>
                                        <button class="btn button" type="submit" onClick="editBook(<?= $id ?>,`<?= $title ?>`,`<?= $date ?>`,`<?= $description ?>`,`<?= $autor ?>`,<?= $category_id ?>,<?= $isbi ?>,`<?= $image ?>`,<?= $page ?>)">Update</button>
                                        <button class="btn button" type="submit" onClick="deleteBook(<?= $id ?>)">delete</button>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="carousel-item">
            <div class="d-flex justify-content-center align-item-center">
                <div class="rounded-3 p-3" name="ligne" style="width:18rem;">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                                    <img src="<?= $image ?>" class="card-img-top" alt="..." height="300" width="100">
                                </div>
                                <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                                    <div class="card-title d-flex justify-content-around pt-2">
                                        <h5 name="titre"><?= $title ?></h5>
                                        <i class="bi bi-caret-down p-1"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                                <div>
                                    <h6>Title: <span class="text-muted"><?= $title ?></span></h6>
                                    <h6>Autor: <span class="text-muted"><?= $autor ?></span></h6>
                                    <h6>Published: <span class="text-muted"><?= $date ?></span></h6>
                                    <h6>Category: <span class="text-muted"><?= $category_label ?></span></h6>
                                    <h6>Number of pages: <span class="text-muted"><?= $page ?></span></h6>
                                    <h6>Description: <span class="text-muted"><?= $description ?></span></h6>
                                </div>
                                <?php if ($_SESSION['role'] == 1 && $rowcount == 0) : ?>
                                    <button class="btn button" type="submit" onclick="createLibrary(<?= $id ?>)">Add to Library <i class="bi bi-bookmark-dash"></i></button>
                                <?php elseif ($rowcount > 0 && $_SESSION['role'] == 1) : ?>
                                    <div class="d-flex justify-content-around">
                                    <button class="btn button" type="submit" onclick="editLibrary(<?= $id ?>,`<?= $result->type ?>`)"><?= $result->type ?></button>
                                    <i class="bi bi-bookmark-check-fill" onclick="deleteLibrary(<?= $id ?>)"></i>
                                    </div>
                                <?php endif ?>
                                <?php if ($_SESSION['role'] == 0) : ?>
                                    <button class="btn button" type="submit" onClick="editBook(<?= $id ?>,`<?= $title ?>`,`<?= $date ?>`,`<?= $description ?>`,`<?= $autor ?>`,<?= $category_id ?>,<?= $isbi ?>,`<?= $image ?>`,<?= $page ?>)">Update</button>
                                    <button class="btn button" type="submit" onClick="deleteBook(<?= $id ?>)">delete</button>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        $i++;
    }
}

// function getOneBook(){

//      $id=$_GET['bookId'];

//      global $link;
//      $query = mysqli_query($link, "SELECT * FROM book JOIN category ON book.category_id=category.id WHERE book.book_id=$id");

// }
function saveBook()
{
    //CODE HERE

    global $link;
    print_r($_POST);

    //SQL INSERT   
    $id = $_SESSION["user_id"];
    if (isset($_POST["title"]) && isset($_POST["isbi"]) && isset($_POST["description"]) && isset($_POST["autor"]) && isset($_POST["page"]) && isset($_POST["category"]) && isset($_POST["date"])) {
        $title = $_POST["title"];
        $description = $_POST["description"];
        $autor = $_POST["autor"];
        $category = $_POST["category"];
        $page = $_POST["page"];
        $isbi = $_POST["isbi"];
        $date = $_POST["date"];
        if (isset($_FILES['image']['name'])) {
            $image_name = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("book", true) . '.' . $img_ex_lc;
                $img_upload_path = 'books/' . $new_img_name;
                $upload = move_uploaded_file($tmp_name, '../' . $img_upload_path);
                if ($upload == FALSE) {
                    $_SESSION["error"] = "Sorry ,";
                    header("Location: http://localhost/library-project/dashboard.php");
                    die();
                }
            } else {
                $_SESSION["error"] = "Sorry , you can't upload this type of files";
                header("Location: http://localhost/library-project/dashboard.php");
                die();
            }
        } else {
            $_SESSION["error"] = "Sorry , unknow error occurred!.";
            header("Location: http://localhost/library-project/dashboard.php");
            die();
        }

        $req = mysqli_query($link, "INSERT INTO `book`(`title`, `autor`, `category_id`, `description`, `NumberPage`, `published`, `isbi`, `image`, `admin_id`) VALUES ('$title','$autor','$category','$description','$page','$date','$isbi','$img_upload_path','$id')");

        if ($req) {
            $_SESSION["message"] = "you successfuly added a new category";
            header("Location: http://localhost/library-project/dashboard.php");
            die();
        } else {
            $_SESSION["error"] = "your category can't be added for some problems";
            header("Location: http://localhost/library-project/dashboard.php");
            die();
        }
    }
}


function deleteBook()
{
    //CODE HERE
    global $link;
    $id = $_GET['book_id'];

    $req = mysqli_query($link, "DELETE FROM book WHERE book_id=$id");

    if (!$req) {
        echo "error";
    } else {
        $_SESSION["message"] = "you successfuly deleted this book";
        header("Location: http://localhost/library-project/dashboard.php");
        die();
    }
}


function updateBook()
{
    //CODE HERE

    global $link;
    print_r($_POST);
    //SQL INSERT   
    $id = $_POST['book_id'];
    if (isset($_POST["title"]) && isset($_POST["isbi"]) && isset($_POST["description"]) && isset($_POST["autor"]) && isset($_POST["page"]) && isset($_POST["category"]) && isset($_POST["date"])) {
        $title = $_POST["title"];
        $description = $_POST["description"];
        $autor = $_POST["autor"];
        $category = $_POST["category"];
        $page = $_POST["page"];
        $isbi = $_POST["isbi"];
        $date = $_POST["date"];
        $img = $_POST["img"];
        if (isset($_FILES['image']['name'])) {
            $image_name = $_FILES['image']['name'];
            if ($image_name != "") {
                $tmp_name = $_FILES['image']['tmp_name'];
                $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("book", true) . '.' . $img_ex_lc;
                    $img_upload_path = 'books/' . $new_img_name;
                    $upload = move_uploaded_file($tmp_name, '../' . $img_upload_path);
                    if ($upload == FALSE) {
                        $_SESSION["error"] = "Sorry ,";
                        header("Location: http://localhost/library-project/dashboard.php");
                        die();
                    }
                } else {
                    $_SESSION["error"] = "Sorry , you can't upload this type of files";
                    header("Location: http://localhost/library-project/dashboard.php");
                    die();
                }
            } else {
                $img_upload_path = $img;
            }
        } else {
            $img_upload_path = $img;
        }

        $req = mysqli_query($link, "UPDATE `book`  SET `title`='$title' , `autor`='$autor', `category_id`='$category', `description`='$description', `NumberPage`='$page', `published`='$date', `isbi`='$isbi', `image`='$img_upload_path'  WHERE `book_id`='$id'");

        if ($req) {
            $_SESSION["message"] = "you successfuly updated this book";
            header("Location: http://localhost/library-project/dashboard.php");
            die();
            var_dump("UPDATE `book`  SET `title`='$title' , `autor`='$autor', `category_id`='$category', `description`='$description', `NumberPage`='$page', `published`='$date', `isbi`='$isbi', `image`='$img_upload_path'  WHERE `book_id`='$id'");
        } else {
            $_SESSION["error"] = "your book can't be updated for some problems";
            header("Location: http://localhost/library-project/dashboard.php");
            die();
        }
    }
}
// ********************************************category**********************************************



function getCategorys()
{
    //CODE HERE
    global $link;
    //SQL SELECT
    $query = "SELECT * FROM category";
    $category_get = mysqli_query($link, $query);
    foreach ($category_get as $row) {
        $id = $row['id'];
        $category_label = $row['label']; ?>
        <option value="<?php echo $id ?>,"><?php echo $category_label ?></option>
    <?php
    }
}

function displayCategorys()
{
    //CODE HERE
    global $link;
    //SQL SELECT
    $query = "SELECT * FROM category";
    $category_display = mysqli_query($link, $query);
    foreach ($category_display as $row) {
        $id = $row['id'];
        $category_label = $row['label']; ?>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $category_label ?></td>
            <td><button class="button btn" onClick="editCategory(<?php echo $id ?>,`<?php echo $category_label ?>`)">Update</button>
            </td>
            <td><button class="button btn" onClick="deleteCat(<?php echo $id ?>)">Delete</button></td>
        </tr>
    <?php
    }
}

function saveCategory()
{
    //CODE HERE

    global $link;
    print_r($_POST);

    //SQL INSERT   
    if (isset($_POST["label"])) {
        $label = $_POST["label"];
    }
    $req = mysqli_query($link, "insert into category (id,label) values ('','$label')");

    if ($req) {
        $_SESSION["message"] = "you successfuly added a new category";
        header("Location: http://localhost/library-project/dashboard.php");
        die();
    } else {
        $_SESSION["error"] = "your category can't be added for some problems";
        header("Location: http://localhost/library-project/dashboard.php");
        die();
    }
}

function updateCategory()
{
    //CODE HERE
    global $link;
    print_r($_POST);
    $id = $_POST["id"];
    if (isset($_POST["label"])) {
        $label = $_POST["label"];
    }

    $query = mysqli_query($link, "UPDATE category SET label='$label' WHERE id=$id");
    //SQL UPDATE
    if ($query) {
        $_SESSION["message"] = "you successfuly updated your category";
        header("Location: http://localhost/library-project/dashboard.php");
        die();
    } else {
        $_SESSION["error"] = "your category can't be updated for some problems";
        header("Location: http://localhost/library-project/dashboard.php");
        die();
    }
}

function deleteCategory()
{
    //CODE HERE
    global $link;
    $id = $_GET["id"];

    $req = mysqli_query($link, "DELETE FROM category WHERE id=$id");

    if (!$req) {
        echo "error";
    } else {
        $_SESSION["message"] = "you successfuly deleted this category";
        header("Location: http://localhost/library-project/dashboard.php");
        die();
    }
}


// ********************************************library*********************************************

function CreateLibrary()
{
    global $link;
    $book_id = $_POST["book_id"];
    $type = $_POST["type"];
    $id = $_SESSION["user_id"];
    $date = date("Y/m/d");
    $req = mysqli_query($link, "INSERT INTO `library` VALUES ('','$type','$date','$book_id','$id')");
    if (!$req) {
        echo "error";
    } else {
        $_SESSION["message"] = "you successfuly add this book to your collection";
        header("Location: http://localhost/library-project/books.php");
        die();
    }
 }

function UpdateLibrary()
{
    global $link;
    $book_id = $_POST["book_id"];
    $type = $_POST["type"];
    $id = $_SESSION["user_id"];
    $date = date("Y/m/d");
    $req = mysqli_query($link, "UPDATE `library` SET `type`='$type' ,`date`='$date'  WHERE user_id=$id AND book_id=$book_id");
    if (!$req) {
        echo "error";
    } else {
        $_SESSION["message"] = "you successfuly updated ";
        header("Location: http://localhost/library-project/books.php");
        die();
    }
}

function getLibrary()
{
    //CODE HERE
    global $link;
    $user_id = $_SESSION['user_id'];
    //SQL SELECT
    $query = mysqli_query($link, "SELECT * FROM book JOIN library ON book.book_id=library.book_id JOIN category ON book.category_id=category.id WHERE library.user_id=$user_id");
    foreach ($query as $row) {

        $category = $row['label'];
        $id = $row['book_id'];
        $image = $row['image'];
        $title = $row['title'];
        $autor = $row['autor'];
        $date = $row['published'];
        $page = $row['NumberPage'];
        $description = $row['description'];
        $date_library = $row['date'];
        $type = $row['type'];
    ?>
        <div class="rounded-3 p-3" name="ligne" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                            <img src="<?= $image ?>" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <div class="card-title d-flex justify-content-around pt-2">
                                <h5 name="titre"><?= $title ?></h5>
                                <i class="bi bi-caret-down p-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                        <div>
                            <h6>Title: <span class="text-muted"><?= $title ?></span></h6>
                            <h6>Autor: <span class="text-muted"><?= $autor ?></span></h6>
                            <h6>Published: <span class="text-muted"><?= $date ?></span></h6>
                            <h6>Category: <span class="text-muted"><?= $category ?></span></h6>
                            <h6>Number of pages: <span class="text-muted"><?= $page ?></span></h6>
                            <h6>Description: <span class="text-muted"><?= $description ?></span></h6>
                        </div>
                        <button class="btn button" type="submit" onclick="editLibrary(<?= $id ?>)"><?= $type ?></button>
                        <?php include "./view/libraryModal.php" ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}

function deleteLibrary(){
    global $link;
    $id = $_GET["library_id"];

    $req = mysqli_query($link, "DELETE FROM library WHERE id_library=$id");

    if (!$req) {
        echo "error";
    } else {
        header("Location: http://localhost/library-project/mybook.php");
        die();
    }
}

// ****************************************statique*************************************

function Users(){
global $link;
    $i=1;
$query = "SELECT * FROM user";
$user_display = mysqli_query($link, $query);
foreach ($user_display as $row) {

    $id = $row['id'];
    $User_name = $row['user_name'];
    $email= $row['email_address'];
    $role= $row['user_role']; ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $User_name ?></td>
        <td><?php echo $email ?>
        </td>
        <?php if($role==1): ?>
        <td>Normal user
        </td>
        <?php elseif($role==0):?>
            <td>Admin
        </td>
        <?php endif ?>
    </tr>
<?php
$i++;
}
}

function countUser(){
    global $link;
$query = "SELECT * FROM user";
$users = mysqli_query($link, $query);
echo mysqli_num_rows($users);
}

function countBook(){
    global $link;
$query = "SELECT * FROM book";
$books = mysqli_query($link, $query);
echo mysqli_num_rows($books);
}

function TopBook(){
    global $link;
    $max=0;
    $top_title="";
    $req = mysqli_query($link, "SELECT * FROM  book");
    foreach($req as $row){
        $id = $row['book_id'];
        $title = $row['title'];
     $query = "SELECT * FROM library WHERE book_id=$id";
     $top=mysqli_query($link, $query);
       if(mysqli_num_rows($top)>$max){
        $max=mysqli_num_rows($top);
        $top_title=$title;
       }
    }
    echo $top_title;
    echo $max;

}