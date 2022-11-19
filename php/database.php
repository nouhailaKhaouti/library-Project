<?php  

//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
session_start();
    $link=mysqli_connect("localhost","root","","libraryProject");

global $link;
    if($link===false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
       
    }