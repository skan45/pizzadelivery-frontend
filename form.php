<?php
$is_invalid=false;

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $mysqli= require __DIR__. "/databaseconnection.php";
    $sql=sprintf("select * from user where email= '%s'",$mysqli->real_escape_string($_POST["email"]));
    $result=$mysqli->query($sql);
    $user=$result->fetch_assoc();
    if ($user){
      if(password_verify($_POST["password"],$user["password_hash"])){
        session_start();
        $_SESSION["user_id"]=$user["id"];
        header("location:login.php");
        exit;
      }
      $is_invalid=true;
    } 
    
}
?>
  <!DOCTYPE html>
  <html>
    <head>
        <link rel="shortcut icon" href="/images/icon.jpg"/>
      <meta charset="UTF-8">
      <title>Pizza Delivery Login</title>
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <div class="login-page">
        <div class="form">
          <img src="/images/icon.jpg" alt="rapido" class="logo">
          <form class="login-form"  method="post" >
            <input type="text" placeholder="e-mail" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" />
            <input type="password" placeholder="password" name="password" />
            <button name="Create">login</button>
            <p class="message">Not registered? <a href="CreateAccount.html">Create an account</a></p>
          </form>
          
        </div>
      </div>
    </body>
  </html>
