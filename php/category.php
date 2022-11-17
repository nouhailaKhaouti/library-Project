<?php
//INCLUDE DATABASE FILE
include('database.php');
//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
session_start();

//ROUTING
if (isset($_POST['save']))        saveCategory();
if (isset($_POST['update']))      updateCategory();
if (isset($_POST['delete']))      deleteCategory();


function getCategorys()
{
    //CODE HERE
    global $link;
    //SQL SELECT
    $query = mysqli_query($link, "SELECT * FROM category");
    foreach ($query as $row) {
        echo `
            <option value="' . $row->id . '">' . $row->label . '</option>`;
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function saveCategory()
{
    //CODE HERE

    global $link;
    print_r($_POST);

    //SQL INSERT   
    if (isset($_POST["category"])) {
        $label = test_input($_POST["category"]);
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
    $id = test_input($_POST["id"]);
    if (isset($_POST["category"])) {
        $label = test_input($_POST["category"]);
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
