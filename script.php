<?php
    //INCLUDE DATABASE FILE
    include('database.php');
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();

    //ROUTING
    if(isset($_POST['creatAccount']))        creatUser();
    if(isset($_POST['connect']))      connect();
    if(isset($_POST['logOut']))      logOut();
    


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
        $userName = test_input($_POST["userName"]);
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);    
        //SQL SELECT
        $req = mysqli_query($link, "insert into task (user_id, user_name,user_email,user_password) values ('','$userName','$email','$password')");

    if ($req) {
        $_SESSION["message"] = "you successfuly been registred you can now access to your account";
        header("Location: http://localhost/library-project/index.php");
        die();
    } else {
        echo "error";
    }
    }

    function connect()
    {
        //CODE HERE
        //SQL UPDATE
        $_SESSION['message'] = "Task has been updated successfully !";
		header('location: index.php');
    }

    function logOut()
    {
        //CODE HERE
        //SQL DELETE
        $_SESSION['message'] = "Task has been deleted successfully !";
		header('location: index.php');
    }
