<?php

      if (isset($message)){
        foreach($message as $message ){
            echo '<div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>';
        }
      }


?>  

<header class="header">
 <section class="flex">   
<a href="/php_files/admin_page.php" class="logo">Admin<span>Panel</span></a>
<nav class="navbar">
    <a href="/php_files/admin_page.php">home</a>
    <a href="/php_files/admin_products.php">products</a>
    <a href="/php_files/admin_orders.php">orders</a>
    <a href="/php_files/admin_accounts.php">admin</a>
    <a href="/php_files/user_accounts.php">user</a>
</nav>
   <div class="icons">
     <div id="menu-btn" class="fas fa-bars" ></div>
     <div id="user-btn" class="fas fa-user" ></div>
   </div>
   <div class="profile">
    <?php
    $select_profile = $conn->prepare("SELECT * FROM Admin WHERE id = ?");
    $select_profile->execute([$admin_id]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
     ?>
     <p><?= $fetch_profile['name']; ?></p>
     <a href="/php_files/update_profile.php" class="btn">update profile</a>
     <a href="/php_files/admin_logout.php" class="delete-btn">logout</a>
     <div class="flex-btn">
       <a href="/php_files/admin_login.php" class="option-btn">login</a>
       <a href="/php_files/admin_register.php" class="option-btn">register</a>
     </div>
   </div>
   </section>
</header>