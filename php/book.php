<?php
//INCLUDE DATABASE FILE
include('database.php');
//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
//ROUTING
if (isset($_POST['save']))        saveBook();
if (isset($_POST['update']))      updateBook();
if (isset($_POST['delete']))      deleteBook();


function getBooks()
{
    //CODE HERE
    global $link;
    //SQL SELECT
    $query = mysqli_query($link, "SELECT * FROM book");
    foreach ($query as $row) {
        echo `
        <div class="rounded-3 p-3" style="width:18rem;">
        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                        <img src="'.$row->image.'" class="card-img-top" alt="..." height="300" width="100">
                    </div>
                    <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                        <h5 class="card-title d-flex justify-content-around pt-2">'.$row->title.'<i
                                class="bi bi-caret-down p-1"></i> </h5>
                    </div>
                </div>
                <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                    <div>
                        <h4>Title: <span class="text-muted">'.$row->title.'</span></h4>
                        <h4>Autor: <span class="text-muted">'.$row->autor.'</span></h4>
                        <h4>published: <span class="text-muted">'.$row->published.'</span></h4>
                    </div>
                    <button class="btn button" type="submit">Add to Library</button>
                </div>
            </div>
        </div>
    </div>`;
    }
}

function saveBook()
{
    //CODE HERE

    global $link;
    print_r($_POST);

    //SQL INSERT   
    $id=$_SESSION["user_id"];
    if (isset($_POST["title"]) && isset($_POST["isbi"]) && isset($_POST["description"]) && isset($_POST["autor"]) && isset($_POST["page"]) && isset($_POST["category"]) && isset($_POST["date"])) {
        $title = $_POST["title"];
        $description = $_POST["description"];
        $autor = $_POST["autor"];
        $category = $_POST["category"];
        $page = $_POST["page"];
        $isbi = $_POST["isbi"];
        $date = $_POST["date"];
        $image_name=$_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
        $error=$_FILES['image']['error'];
        $img_size=$_FILES['image']['size'];

        if($error === 0){
        if($img_size > 125000){
        $_SESSION["error"] = "Sorry , your file is too large.";
        header("Location: http://localhost/library-project/books.php");
        die();
            }else{
                $img_ex=pathinfo($image_name,PATHINFO_EXTENSION);
                $img_ex_lc=strtolower($img_ex);
                $allowed_exs=array("jpg","jpeg","png");

                if(in_array($img_ex_lc,$allowed_exs)){
                    $new_img_name=uniqid("book",true).'.'.$img_ex_lc;
                    $img_upload_path='books/'.$new_img_name;
                    move_uploaded_file($tmp_name,$img_upload_path);
                }else{
                    $_SESSION["error"] = "Sorry , you can't upload this type of files";
                    header("Location: http://localhost/library-project/books.php");
                }
            }
        }else{
        $_SESSION["error"] = "Sorry , unknow error occurred!.";
        header("Location: http://localhost/library-project/books.php");
        die(); 
        } 
    
    $req = mysqli_query($link, "INSERT INTO `book`(`title`, `autor`, `category_id`, `description`, `NumberPage`, `published`, `isbi`, `image`, `admin_id`) VALUES ('$title','$autor','$category','$description','$page','$date','$isbi','$img_upload_path','$id')");

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
   
}

function updateBook()
{
   //CODE HERE

   global $link;
   print_r($_POST);

   //SQL INSERT   
   $id=$_POST['id'];
   if (isset($_POST["title"]) && isset($_POST["isbi"]) && isset($_POST["description"]) && isset($_POST["autor"]) && isset($_POST["page"]) && isset($_POST["category"]) && isset($_POST["date"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $autor = $_POST["autor"];
    $category = $_POST["category"];
    $page = $_POST["page"];
    $isbi = $_POST["isbi"];
    $date = $_POST["date"];
       $image_name=$_FILES['image']['name'];
       $tmp_name=$_FILES['image']['tmp_name'];
       $error=$_FILES['image']['error'];
       $img_size=$_FILES['image']['size'];

       if($error === 0){
       if($img_size > 125000){
       $_SESSION["error"] = "Sorry , your file is too large.";
       header("Location: http://localhost/library-project/books.php");
       die();
           }else{
               $img_ex=pathinfo($image_name,PATHINFO_EXTENSION);
               $img_ex_lc=strtolower($img_ex);
               $allowed_exs=array("jpg","jpeg","png");

               if(in_array($img_ex_lc,$allowed_exs)){
                   $new_img_name=uniqid("book",true).'.'.$img_ex_lc;
                   $img_upload_path='books/'.$new_img_name;
                   move_uploaded_file($tmp_name,$img_upload_path);
               }else{
                   $_SESSION["error"] = "Sorry , you can't upload this type of files";
                   header("Location: http://localhost/library-project/books.php");
               }
           }
       }else{
       $_SESSION["error"] = "Sorry , unknow error occurred!.";
       header("Location: http://localhost/library-project/books.php");
       die(); 
       } 
   
   $req = mysqli_query($link, "UPDATE `book`  SET `title`='$title' , `autor`='$autor', `category_id`='$category', `description`='$description', `NumberPage`='$page', `published`='$date', `isbi`='$isbi', `image`='$img_upload_path'  WHERE `book_id`='$id'");

   if ($req) {
       $_SESSION["message"] = "you successfuly updated this book";
       header("Location: http://localhost/library-project/book.php");
       die();
   } else {
       $_SESSION["error"] = "your book can't be updated for some problems";
       header("Location: http://localhost/library-project/book.php");
       die();
   }
   }
}

function deleteBook()
{
    //CODE HERE
    global $link;
    $id = $_GET["id"];

    $req = mysqli_query($link, "DELETE FROM book WHERE id=$id");

    if (!$req) {
        echo "error";
    } else {
        $_SESSION["message"] = "you successfuly deleted this book";
        header("Location: http://localhost/library-project/book.php");
        die();
    }
}
