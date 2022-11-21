<?php
 include './view/header.php';
 if(isset($_SESSION['user_id'])){
?>
<div>
<?php include './view/book_display.php'?>
</div>
<?php

 include "autoloader.php" ;

}else{
    $_SESSION['error']="you need to register first if you want to see more";
    header("Location: http://localhost/library-project/index.php");
}

?>