<?php
//    echo"<pre>";
//   print_r($_POST);
//    echo"<pre>";

    $user = $_POST("user");
    $pass = $_POST("pass");

    if($user == "Admin" && $pass == "pass")
    {
        header("location:dashboard.php");
        die();
    }
    else
    {
        echo "wrong username";
    }
?>