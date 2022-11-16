<?php
//INCLUDE DATABASE FILE
include('database.php');
//ROUTING
if (isset($_POST['save'])) { 
     creatUser(); }      
if (isset($_POST['connect']))      connect();



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
    $rowcount=mysqli_num_rows($query);
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
                if($row->user_role== 0){
                    header('location: dashboard.php');
                }else if($row->user_role == 1){
                    header('location: http://localhost/library-project/index.php');
                }
            } else {
                $_SESSION['error'] = "password is wrong!";
                header('location: http://localhost/library-project/index.php');
            }
        }
}
