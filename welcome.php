<?php
    include("connect.php");
  
?>
  
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Home page </title>
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="container-fluid">
    <ul class="navbar-nav" >
    <img src="https://thumbs.dreamstime.com/b/grocery-store-delivery-company-s-logo-items-vegetables-home-icon-vector-design-template-167341487.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
      <li class="nav-item">
        <a class="nav-link active" href="welcome.php"> Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view.php"> View Item </a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="add.php"> Add Item </a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="search.php"> Search Item </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php"> Logout </a>
      </li>
    </ul>
  </div>
</nav>
<div class="text-content" style="background-color:#D7F7FF">
    <h1> ABC Grocery Store </h1>
    <img src="https://img.freepik.com/premium-vector/grocery-store-building-shop-market-supermarket-vector-illustration-flat-style_193165-316.jpg?w=2000" alt="Store Image" style="width: 100%; height: auto;">   
</div>
</body>
</html>