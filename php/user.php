<?php
//INCLUDE DATABASE FILE
include('database.php');
//ROUTING
if (isset($_POST['save'])) {
    creatUser();
}
if (isset($_POST['connect']))      connect();

if (isset($_POST['save_book']))        saveBook();
if (isset($_POST['update_book']))      updateBook();
if (isset($_GET['book_id']))      deleteBook();

if (isset($_POST['save']))        saveCategory();
if (isset($_POST['update']))      updateCategory();
if (isset($_GET['id']))      deleteCategory();
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
            $_SESSION['message'] = "Congratulations, you are logged in!";
            if ($row->user_role == 0) {
                header('location: dashboard.php');
            } else if ($row->user_role == 1) {
                header('location: http://localhost/library-project/index.php');
            }
        } else {
            $_SESSION['error'] = "password is wrong!";
            header('location: http://localhost/library-project/index.php');
        }
    }
}

// ********************************************book**********************************************



function getBooks()
{
    //CODE HERE
    global $link;
    //SQL SELECT
    $query = mysqli_query($link, "SELECT * FROM book");
    foreach ($query as $row) {
        $category_id = $row['category_id'];
        $id = $row['book_id'];
        $image = $row['image'];
        $title = $row['title'];
        $autor = $row['autor'];
        $date = $row['published'];
        $isbi = $row['isbi'];
        $page = $row['NumberPage'];
        $description = $row['description'];
?>
        <div class="rounded-3 p-3" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                            <img src="<?= $image ?>" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <h5 class="card-title d-flex justify-content-around pt-2"><?= $title ?><i class="bi bi-caret-down p-1"></i> </h5>
                        </div>
                    </div>
                    <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                        <div>
                            <h4>Title: <span class="text-muted"><?= $title ?></span></h4>
                            <h4>Autor: <span class="text-muted"><?= $autor ?></span></h4>
                            <h4>published: <span class="text-muted"><?= $date ?></span></h4>
                        </div>
                        <button class="btn button" type="submit">Add to Library</button>
                        <button class="btn button" type="submit" onClick="editBook(<?php echo $id ?>,`<?php echo $title ?>`,`<?php echo $date ?>`,`<?php echo $description ?>`,`<?php echo $autor ?>`,<?php echo $category_id ?>,<?php echo $isbi ?>,`<?php echo $image ?>`,<?php echo $page ?>)">Update</button>
                        <button class="btn button" type="submit" onClick="deleteBook(<?php echo $id ?>)">delete</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
}

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
            $error = $_FILES['image']['error'];
            $img_size = $_FILES['image']['size'];

            if ($error === 0) {
                if ($img_size > 125000) {
                    $_SESSION["error"] = "Sorry , your file is too large.";
                    header("Location: http://localhost/library-project/books.php");
                    die();
                } else {
                    $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
                    $allowed_exs = array("jpg", "jpeg", "png");

                    if (in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("book", true) . '.' . $img_ex_lc;
                        $img_upload_path = 'books/' . $new_img_name;
                        $upload = move_uploaded_file($tmp_name, '../' . $img_upload_path);
                        if ($upload == FALSE) {
                            $_SESSION["error"] = "Sorry ,";
                            header("Location: http://localhost/library-project/books.php");
                            die();
                        }
                    } else {
                        $_SESSION["error"] = "Sorry , you can't upload this type of files";
                        header("Location: http://localhost/library-project/books.php");
                        die();
                    }
                }
            } else {
                $_SESSION["error"] = "Sorry , unknow error occurred!.";
                header("Location: http://localhost/library-project/books.php");
                die();
            }
        } else {
            $_SESSION["error"] = "Sorry , unknow error occurred!.";
            header("Location: http://localhost/library-project/books.php");
            die();
        }
        $req = mysqli_query($link, "INSERT INTO `book`(`title`, `autor`, `category_id`, `description`, `NumberPage`, `published`, `isbi`, `image`, `admin_id`) VALUES ('$title','$autor','$category','$description','$page','$date','$isbi','$img_upload_path','$id')");

        if ($req) {
            $_SESSION["message"] = "you successfuly added a new category";
            header("Location: http://localhost/library-project/books.php");
            die();
        } else {
            $_SESSION["error"] = "your category can't be added for some problems";
            header("Location: http://localhost/library-project/books.php");
            die();
        }
    }
}

function updateBook()
{
    //CODE HERE

    global $link;
    print_r($_POST);

    //SQL INSERT   
    $id = $_POST['id'];
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
                $error = $_FILES['image']['error'];
                $img_size = $_FILES['image']['size'];

                if ($error === 0) {
                    if ($img_size > 1250000) {
                        $_SESSION["error"] = "Sorry , your file is too large.";
                        header("Location: http://localhost/library-project/books.php");
                        die();
                    } else {
                        $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);
                        $allowed_exs = array("jpg", "jpeg", "png");

                        if (in_array($img_ex_lc, $allowed_exs)) {
                            $new_img_name = uniqid("book", true) . '.' . $img_ex_lc;
                            $img_upload_path = 'books/' . $new_img_name;
                            $upload = move_uploaded_file($tmp_name, '../' . $img_upload_path);
                            if ($upload == FALSE) {
                                $_SESSION["error"] = "Sorry ,";
                                header("Location: http://localhost/library-project/books.php");
                                die();
                            }
                        } else {
                            $_SESSION["error"] = "Sorry , you can't upload this type of files";
                            header("Location: http://localhost/library-project/books.php");
                            die();
                        }
                    }
                } else {
                    $_SESSION["error"] = "Sorry , unknow error occurred!.";
                    header("Location: http://localhost/library-project/books.php");
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
            header("Location: http://localhost/library-project/books.php");
            die();
        } else {
            $_SESSION["error"] = "your book can't be updated for some problems";
            header("Location: http://localhost/library-project/books.php");
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
        header("Location: http://localhost/library-project/books.php");
        die();
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
        header("Location: http://localhost/library-project/index.php");
        die();
    } else {
        $_SESSION["error"] = "your category can't be added for some problems";
        header("Location: http://localhost/library-project/index.php");
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
        header("Location: http://localhost/library-project/index.php");
        die();
    } else {
        $_SESSION["error"] = "your category can't be updated for some problems";
        header("Location: http://localhost/library-project/index.php");
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
        header("Location: http://localhost/library-project/index.php");
        die();
    }
}
