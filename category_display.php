<?php
 include './view/header.php';
 if(isset($_SESSION['user_id'])){
?>
    <div id="add_category">
        <button class="btn button" type="submit" onclick="createCategory()"> Add Category</button>
    </div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">label</th>
        <th scope="col">update</th>
        <th scope="col">delete</th>
      </tr>
    </thead>
    <tbody>

<?php
displayCategorys();
?>


</tbody>
    </table>

<?php


 include "autoloader.php" ;

}else{
    $_SESSION['error']="you need to register first if you want to see more";
    header("Location: http://localhost/library-project/index.php");
}

?>