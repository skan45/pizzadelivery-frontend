<?php

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$password="";
    $name=clean($_POST["name"]);
    $password=clean($_POST["password"]);
    $errors=[];
    if(empty($name)){
        $errors[]="username is required ";
    }
    if (empty($password)){
      $errors[]="password is required ";  
    }
    if (empty($errors)){
        header("location:costomer2.html");
        exit();
    }
        else{
            session_start();
            $_SESSION["form_errors"]=$errors;
            header("location: form.php");
        }


}

function clean($data){
    $data=trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>