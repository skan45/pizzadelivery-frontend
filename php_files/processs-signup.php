<?php

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $email=$password=$fname=$lname=$city=$radio1=$radio2="";
    $email=clean($_POST["email"]);
    $password=clean($_POST["password"]);
    $fname=clean($_POST["fname"]);
    $lname=clean($_POST["lname"]);
    $city=clean($_POST["City"]);
    $radio1=clean($_POST["radiogroup1"]);
    if (isset($_POST["radiogroup1"])){
      $select=$_POST["radiogroup1"];

    }
    $error=false;
    if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        die("valid email is required ");
    }
    if (strlen($password)<8){
        die("password must at least have 8 characters");
        $error=true;
    }
    if (!preg_match("/[a-z]/i",$_POST["password"])){
        die("password must have at least one letter  ");
        $error=true;
    }
    if (!preg_match("/[0-9]/",$_POST["password"])){
        die("password must have at least one number  ");
        $error=true;
    }
    $password_hash=password_hash($_POST["password"],PASSWORD_DEFAULT);
    if ($_POST["password"]!==$_POST["password-c"]){
       die("password must match confirm password"); 
     }
     $mysqli=require __DIR__."/databaseconnection.php";
     $sql= "INSERT INTO user(email,first_name,last_name,password_hash,city,sexe) VALUES (?,?,?,?,?,?)";
     $stmt = $mysqli->stmt_init();
     if(! $stmt->prepare($sql)){
        die("SQL ERROR :" .$mysqli->error);
     }
     $stmt->bind_param('ssssss',$email,$fname,$lname,$password_hash,$city,$select);
       if ($stmt->execute()){
        echo "signup succesful ";
       }
       else{
        if ($mysqli->errno === 1062){
            die("e-mail already taken ");
        }
        else{
        die($mysqli->error . " " .$mysqli->errno);}
     }

    if ($error==false){
        header("location:form.php");
        exit();
    }
    

}
function clean($data){
    $data=trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>