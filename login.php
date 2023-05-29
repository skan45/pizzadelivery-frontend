<?php
session_start();
if (isset($_SESSION["user_id"])){
    $mysqli=require __DIR__."/databaseconnection.php";
    $sql="select * from user where id ={$_SESSION["user_id"]}";
    $result=$mysqli->query($sql);
    $user=$result->fetch_assoc();

}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="/images/icon.jpg"/>
	<title>Order Pizzas</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
	<header>
	    <img src="/images/icon.jpg" alt="Logo">
		<nav class="nav__links">
        <ul>
        <?php if (isset($user)): ?>
        <li><p>bienvenue <?= htmlspecialchars($user["first_name"])?></p></li>
        <li><p><a href="logout.php">Logout</a></p></li>
        <?php else: ?>
            <li><p><a href="/form.php">Log in</a> or <a href="/CreateAccount.html">signup</a></p></li>
        <?php endif; ?>    
        </ul>
		</nav>
	</header>
	<main>
		<h1>Order Pizzas</h1>
		<section id="pizza-selection">
			<div class="pizza">
				<img src="./peperoni2.jfif" alt="Pizza 1">
				<h2>Peperoni Pizza</h2>
				<label for="pizza1">Number of pizzas:</label>
				<input type="number" id="pizza1" name="pizza1" min="0" max="100">
			</div>
			<div class="pizza">
				<img src="./meat.jfif" alt="Pizza 2">
				<h2>Meat Pizza</h2>
				<label for="pizza2">Number of pizzas:</label>
				<input type="number" id="pizza2" name="pizza2" min="0" max="100">
			</div>
			<div class="pizza">
				<img src="./veggie.jfif" alt="Pizza 3">
				<h2>Veggie Pizza</h2>
				<label for="pizza3">Number of pizzas:</label>
				<input type="number" id="pizza3" name="pizza3" min="0" max="100">
			</div>
		</section>
		<button id="checkout">order</button>
	</main>
</body>
</html>