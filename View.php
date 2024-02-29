<?php
    include("connect.php");
  
    if (isset($_POST['btn'])) {
        $date=$_POST['idate'];
        $q="select * from grocerytb where Date='$date'";
        $query=mysqli_query($con,$q);
    } 
    else {
        $q= "select * from grocerytb";
        $query=mysqli_query($con,$q);
    }
?>
  
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> View </title>
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .card-link{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: bold;
}
.card-subtitle{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: bold;
    font-size: 20px;
    color: palevioletred;
}
        </style>
</head>
  
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="container-fluid">
    <ul class="navbar-nav">
    <img src="https://thumbs.dreamstime.com/b/grocery-store-delivery-company-s-logo-items-vegetables-home-icon-vector-design-template-167341487.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
      <li class="nav-item">
        <a class="nav-link" href="welcome.php"> Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="view.php"> View Item </a>
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
    <div class="container mt-5">
        <h1> </h1>
                <h1> Grocery List </h1>

        <!-- Grocery Cards -->
        <div class="row mt-4">
            <?php
                while ($qq=mysqli_fetch_array($query)) 
                {
            ?>
  
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">    
                            <?php echo $qq['item_name']; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 ">
                            <?php echo 
                            $qq['item_Quantity']." kg"; ?>
                        </h6>
                        <h5 class="card-title mb-2 text-muted">
                            <?php echo $qq['Date']; ?>
                        </h5>
                        <?php
                        if($qq['item_status'] == 0) {?>
                        <p class="text-info"> PENDING </p>
                        <?php
                        } else if($qq['item_status'] == 1) {
                        ?>
                        <p class="text-success"> BOUGHT </p>
  
                        <?php } else { ?>
                        <p class="text-danger"> NOT AVAILABLE </p>
  
                        <?php } ?>
                        <a href=
                        "delete.php?id=<?php echo $qq['id']; ?>" 
                            class="card-link">
                            Delete
                        </a>
                        <a href=
                        "update.php?id=<?php echo $qq['id']; ?>" 
                            class="card-link">
                            Update
                        </a>
                    </div>
                </div><br>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
  
</html>