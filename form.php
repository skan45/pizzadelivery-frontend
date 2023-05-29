<?php
session_start();
$form_errors = isset($_SESSION["form_errors"]) ? $_SESSION["form_errors"] : [];
unset($_SESSION["form_errors"]);
?>
<?php if(!empty($form_errors)): ?>
    <ul>
        <?php foreach($form_errors as $error):?>
           <li><?php echo $error ; ?></li> 
        <?php endforeach?>   
    </ul>
<?php endif ?>
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
        <form class="login-form" action="index.php" method="post" >
          <input type="text" placeholder="username" name="user" />
          <input type="password" placeholder="password" name="password" />
          <button name="Create">login</button>
          <p class="message">Not registered? <a href="CreateAccount.html">Create an account</a></p>
        </form>
        
      </div>
    </div>
  </body>
</html>

