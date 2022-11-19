<?php
//INCLUDE DATABASE FILE
include('database.php');
//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
//ROUTING
if (isset($_POST['save']))        saveCategory();
if (isset($_POST['update']))      updateCategory();
if (isset($_GET['id']))      deleteCategory();


function getCategorys()
{
    //CODE HERE
    global $link;
    //SQL SELECT
    $query = "SELECT * FROM category";
    $category_get = mysqli_query($link,$query);
    foreach ($category_get as $row) {
        $id=$row['id'];
        $category_label=$row['label'];?>
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
    $category_display = mysqli_query($link,$query);
    foreach($category_display as $row ){
        $id=$row['id'];
        $category_label=$row['label'];?>
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
