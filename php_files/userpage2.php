<?php
include 'config.php';
session_start();
$user_id=$_SESSION['user_id'];
if (!isset($user_id)){
    header("location:form.php");
}
if ($_SERVER['REQUEST_METHOD']==='POST'){
   
    if (isset($_POST['add_to_cart1'])){
        $qt=$_POST['qty'];
         $select_user =$conn->prepare("SELECT * FROM `user`where id =?");
        $select_user->execute([$_SESSION['user_id']]);
        $user=$select_user->fetch(PDO::FETCH_ASSOC);
        if(isset($user)){
         $name=$user['first_name']." ".$user['last_name'];
      }
      $pizzaname=$_POST['pizza'];
      $select_pizza =$conn->prepare("SELECT * FROM `products`where name =?");
      $select_pizza->execute([$pizzaname]);
      $pid=$select_pizza->fetch(PDO::FETCH_ASSOC);
      
      if (isset($pid)){
        $price=$pid['price']*$qt;
        $pizza_id=$pid['id'];
      }
      
      $id=rand(1,90000);
      $insert_cart = $conn->prepare("INSERT INTO `cart`(id,user_id,pid,name,price,quantity) VALUES(?,?,?,?,?,?)");
           $insert_cart->execute([$id,$_SESSION['user_id'],$pizza_id,$name,$price,$qt]);
           
  
  }
  if (isset($_POST['add_to_cart2'])){
    $qt=$_POST['qty'];
     $select_user =$conn->prepare("SELECT * FROM `user`where id =?");
    $select_user->execute([$_SESSION['user_id']]);
    $user=$select_user->fetch(PDO::FETCH_ASSOC);
    if(isset($user)){
     $name=$user['first_name']." ".$user['last_name'];
  }
  $pizzaname=$_POST['pizza'];
  $select_pizza =$conn->prepare("SELECT * FROM `products`where name =?");
  $select_pizza->execute([$pizzaname]);
  $pid=$select_pizza->fetch(PDO::FETCH_ASSOC);
  
  if (isset($pid)){
    $price=$pid['price']*$qt;
    $pizza_id=$pid['id'];
  }
  
  $id=rand(1,90000);
  $insert_cart = $conn->prepare("INSERT INTO `cart`(id,user_id,pid,name,price,quantity) VALUES(?,?,?,?,?,?)");
       $insert_cart->execute([$id,$_SESSION['user_id'],$pizza_id,$name,$price,$qt]);
       

}
if (isset($_POST['add_to_cart3'])){
    $qt=$_POST['qty'];
     $select_user =$conn->prepare("SELECT * FROM `user`where id =?");
    $select_user->execute([$_SESSION['user_id']]);
    $user=$select_user->fetch(PDO::FETCH_ASSOC);
    if(isset($user)){
     $name=$user['first_name']." ".$user['last_name'];
  }
  $pizzaname=$_POST['pizza'];
  $select_pizza =$conn->prepare("SELECT * FROM `products`where name =?");
  $select_pizza->execute([$pizzaname]);
  $pid=$select_pizza->fetch(PDO::FETCH_ASSOC);
  
  if (isset($pid)){
    $price=$pid['price']*$qt;
    $pizza_id=$pid['id'];
  }
  
  $id=rand(1,90000);
  $insert_cart = $conn->prepare("INSERT INTO `cart`(id,user_id,pid,name,price,quantity) VALUES(?,?,?,?,?,?)");
       $insert_cart->execute([$id,$_SESSION['user_id'],$pizza_id,$name,$price,$qt]);
       

}
if (isset($_POST['add_to_cart4'])){
    $qt=$_POST['qty'];
     $select_user =$conn->prepare("SELECT * FROM `user`where id =?");
    $select_user->execute([$_SESSION['user_id']]);
    $user=$select_user->fetch(PDO::FETCH_ASSOC);
    if(isset($user)){
     $name=$user['first_name']." ".$user['last_name'];
  }
  $pizzaname=$_POST['pizza'];
  $select_pizza =$conn->prepare("SELECT * FROM `products`where name =?");
  $select_pizza->execute([$pizzaname]);
  $pid=$select_pizza->fetch(PDO::FETCH_ASSOC);
  
  if (isset($pid)){
    $price=$pid['price']*$qt;
    $pizza_id=$pid['id'];
  }
  
  $id=rand(1,90000);
  $insert_cart = $conn->prepare("INSERT INTO `cart`(id,user_id,pid,name,price,quantity) VALUES(?,?,?,?,?,?)");
       $insert_cart->execute([$id,$_SESSION['user_id'],$pizza_id,$name,$price,$qt]);
       

}
if (isset($_POST['add_to_cart5'])){
    $qt=$_POST['qty'];
     $select_user =$conn->prepare("SELECT * FROM `user`where id =?");
    $select_user->execute([$_SESSION['user_id']]);
    $user=$select_user->fetch(PDO::FETCH_ASSOC);
    if(isset($user)){
     $name=$user['first_name']." ".$user['last_name'];
  }
  $pizzaname=$_POST['pizza'];
  $select_pizza =$conn->prepare("SELECT * FROM `products`where name =?");
  $select_pizza->execute([$pizzaname]);
  $pid=$select_pizza->fetch(PDO::FETCH_ASSOC);
  
  if (isset($pid)){
    $price=$pid['price']*$qt;
    $pizza_id=$pid['id'];
  }
  
  $id=rand(1,90000);
  $insert_cart = $conn->prepare("INSERT INTO `cart`(id,user_id,pid,name,price,quantity) VALUES(?,?,?,?,?,?)");
       $insert_cart->execute([$id,$_SESSION['user_id'],$pizza_id,$name,$price,$qt]);
       

}
if (isset($_POST['add_to_cart6'])){
    $qt=$_POST['qty'];
     $select_user =$conn->prepare("SELECT * FROM `user`where id =?");
    $select_user->execute([$_SESSION['user_id']]);
    $user=$select_user->fetch(PDO::FETCH_ASSOC);
    if(isset($user)){
     $name=$user['first_name']." ".$user['last_name'];
  }
  $pizzaname=$_POST['pizza'];
  $select_pizza =$conn->prepare("SELECT * FROM `products`where name =?");
  $select_pizza->execute([$pizzaname]);
  $pid=$select_pizza->fetch(PDO::FETCH_ASSOC);
  
  if (isset($pid)){
    $price=$pid['price']*$qt;
    $pizza_id=$pid['id'];
  }
  
  $id=rand(1,90000);
  $insert_cart = $conn->prepare("INSERT INTO `cart`(id,user_id,pid,name,price,quantity) VALUES(?,?,?,?,?,?)");
       $insert_cart->execute([$id,$_SESSION['user_id'],$pizza_id,$name,$price,$qt]);
       

}
if (isset($_POST['add_to_cart7'])){
    $qt=$_POST['qty'];
     $select_user =$conn->prepare("SELECT * FROM `user`where id =?");
    $select_user->execute([$_SESSION['user_id']]);
    $user=$select_user->fetch(PDO::FETCH_ASSOC);
    if(isset($user)){
     $name=$user['first_name']." ".$user['last_name'];
  }
  $pizzaname=$_POST['pizza'];
  $select_pizza =$conn->prepare("SELECT * FROM `products`where name =?");
  $select_pizza->execute([$pizzaname]);
  $pid=$select_pizza->fetch(PDO::FETCH_ASSOC);
  
  if (isset($pid)){
    $price=$pid['price']*$qt;
    $pizza_id=$pid['id'];
  }
  
  $id=rand(1,90000);
  $insert_cart= $conn->prepare("INSERT INTO `cart`(id,user_id,pid,name,price,quantity) VALUES(?,?,?,?,?,?)");
       $insert_cart->execute([$id,$_SESSION['user_id'],$pizza_id,$name,$price,$qt]);
       

}
if (isset($_POST['add_to_cart8'])){
    $qt=$_POST['qty'];
     $select_user =$conn->prepare("SELECT * FROM `user`where id =?");
    $select_user->execute([$_SESSION['user_id']]);
    $user=$select_user->fetch(PDO::FETCH_ASSOC);
    if(isset($user)){
     $name=$user['first_name']." ".$user['last_name'];
  }
  $pizzaname=$_POST['pizza'];
  $select_pizza =$conn->prepare("SELECT * FROM `products`where name =?");
  $select_pizza->execute([$pizzaname]);
  $pid=$select_pizza->fetch(PDO::FETCH_ASSOC);
  
  if (isset($pid)){
    $price=$pid['price']*$qt;
    $pizza_id=$pid['id'];
  }
  
  $id=rand(1,90000);
  $insert_cart= $conn->prepare("INSERT INTO `cart`(id,user_id,pid,name,price,quantity) VALUES(?,?,?,?,?,?)");
       $insert_cart->execute([$id,$_SESSION['user_id'],$pizza_id,$name,$price,$qt]);
       

}
if (isset($_POST['add_to_cart9'])){
    $qt=$_POST['qty'];
     $select_user =$conn->prepare("SELECT * FROM `user`where id =?");
    $select_user->execute([$_SESSION['user_id']]);
    $user=$select_user->fetch(PDO::FETCH_ASSOC);
    if(isset($user)){
     $name=$user['first_name']." ".$user['last_name'];
  }
  $pizzaname=$_POST['pizza'];
  $select_pizza =$conn->prepare("SELECT * FROM `products`where name =?");
  $select_pizza->execute([$pizzaname]);
  $pid=$select_pizza->fetch(PDO::FETCH_ASSOC);
  
  if (isset($pid)){
    $price=$pid['price']*$qt;
    $pizza_id=$pid['id'];
  }
  
       $id=rand(1,90000);
       $insert_cart = $conn->prepare("INSERT INTO `cart`(id,user_id,pid,name,price,quantity) VALUES(?,?,?,?,?,?)");
       $insert_cart->execute([$id,$_SESSION['user_id'],$pizza_id,$name,$price,$qt]);
       

}
if (isset($_POST['order'])){
    $select_carts =$conn->prepare("SELECT * FROM `cart`where  user_id =?");
    $select_carts->execute([$_SESSION['user_id']]);
    $total=0;
    $date=date('Y-m-d');
    $qt=0;
    $method=$_POST['method'];
    $address=$_POST['address'];
    $name=$_POST['name'];
    $status='pending';
    $number=$_POST['number'];
    if ($select_carts->rowCount()>0){
       while($fetch_carts = $select_carts->fetch(PDO::FETCH_ASSOC)){
        $total+=$fetch_carts['price'];
        $qt+=$fetch_carts['quantity']; 
       }
       $id=rand(1,90000);
       $insert_cart = $conn->prepare("INSERT INTO `orders`(id,placed_on,name,address,total_products,total_price,method,number,payment_status) VALUES(?,?,?,?,?,?,?,?,?)");
       $insert_cart->execute([$id,$date,$name,$address,$qt,$total,$method,$number,$status]);     
    }
}

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="shortcut icon" href="/images/icon.jpg"/>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>pizza zone</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css_files/top.css">

</head>
<body >
   
<!-- header section starts  -->

<header class="header">

   <section class="flex">

      <a href="#home" class="logo"><img src="/images/icon.jpg"></a>

      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#menu">menu</a>
         <a href="#order">order</a>
         <a href="../php_files/logout.php">logout</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="cart-btn" class="fas fa-shopping-cart"></div>
         <div class="cart">
             <h2 class="cart-title">Your Cart</h2>
            <!-- content  -->
            <div class="cart-content">
            </div>
            <!-- total  -->
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">$0</div>
            </div>
            <!-- buy button  -->
            <button type="button" class="btn-buy">Buy Now</button>
            <!-- cart close -->
            <i class='bx bx-x' id="close-cart"></i>


        </div>
      </div>
   </section>

</header>
<!-- header section ends -->


<div class="home-bg">

   <section class="home" id="home">

      <div class="slide-container">

         <div class="slide">
            <div class="image">
               <img src="../images/29-pizza-png-image.png" alt="">
            </div>
            <div class="content">
               <h3>homemade Pepperoni Pizza</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>

         <div class="slide active">
            <div class="image">
               <img src="../images/19-pizza-png-image.png" alt="">
            </div>
            <div class="content">
               <h3>Pizza With Mushrooms</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>

         <div class="slide">
            <div class="image">
               <img src="../images/26-pizza-png-image.png" alt="">
            </div>
            <div class="content">
               <h3>Mascarpone And Mushrooms</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>

      </div>

   </section>

</div>

<!-- about section starts  -->



<!-- about section ends -->

<!-- menu section starts  -->

<section id="menu" class="menu">

   <h1 class="heading">our menu</h1>

   <div class="box-container">
      <?php
      
      $select_products =$conn->prepare("SELECT * FROM `products`");
    $select_products->execute();
    $i=0;
    if($select_products->rowCount() > 0){
      
        while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
         $i++;
         echo'<div class="box">
         <div class="price"><span>'.$fetch_products['price'].'</span>dt</div>
         <img src="../images/'.$fetch_products['image'].'" alt="">
         <div class="name">'.$fetch_products['name'].'</div>
         <form action="" method="post">
            <input type="hidden" name="pizza" value="'.$fetch_products['name'].'">
            <input type="number" min="1" max="100" value="1" class="qty" name="qty">
            <input type="submit" value="add to cart" name="add_to_cart'.$i.'" class="btn">
         </form>
      </div>';
        }
    }
      ?>

      

   </div>

</section>

<!-- menu section ends -->

<!-- order section starts  -->

<section class="order" id="order">

   <h1 class="heading">order now</h1>
    
   <form action="" method="post">

      <div class="display-orders">
      <?php
         
         $select_carts =$conn->prepare("SELECT * FROM `cart`where  user_id =?");
    $select_carts->execute([$_SESSION['user_id']]);
    if($select_carts->rowCount() > 0){
        while($fetch_carts = $select_carts->fetch(PDO::FETCH_ASSOC)){
            $select_pizza =$conn->prepare("SELECT * FROM `products`where id =?");
            $select_pizza->execute([$fetch_carts['pid']]);
            $fetch_pizza = $select_pizza->fetch(PDO::FETCH_ASSOC);
            echo '<p><span>' . $fetch_pizza["name"] . '</span>(<span>' . $fetch_pizza["price"] . '</span>*<span>' . $fetch_carts["quantity"] . '</span>) </p>';
        }
    }else{
       echo '<p class="empty">no orders placed yet!</p>';
    }
         ?>
      </div>

      <div class="flex">
         <div class="inputBox">
            <span>your name :</span>
            <input type="text" name="name" class="box" required placeholder="enter your name" maxlength="20">
         </div>
         <div class="inputBox">
            <span>your number :</span>
            <input type="number" name="number" class="box" required placeholder="enter your number" min="0">
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method" class="box">
               <option value="cash on delivery">cash on delivery</option>
               <option value="credit card">credit card</option>
               <option value="paytm">paytm</option>
               <option value="paypal">paypal</option>
            </select>
         </div>
         <div class="inputBox">
            <span>address  :</span>
            <input type="text" name="address" class="box" required placeholder="address" maxlength="50">
         </div>
      </div>

      <input type="submit" value="order now" class="btn" name="order">

   </form>
</section>

<!-- order section ends -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+216-96690173</p>
         <p>+216-53670417</p>
      </div>
      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>11:00am to 23:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>gritliskander42@gmail.com</p>
         <p>Ouederni.ahmid@gmail.com</p>
         <p>ahmed.houcine@insat.ucar.tn</p>
      </div>

   </div>
</section>
<script src="../js_files/open.js"></script>

</body>
</html>