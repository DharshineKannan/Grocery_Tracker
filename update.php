<?php
    include("connect.php");
    if(isset($_POST['btn']))
    {
        $item_name=$_POST['iname'];
        $item_qty=$_POST['iqty'];
        $istatus=$_POST['istatus'];
        $date=$_POST['idate'];
        $id = $_GET['id'];
        $q= "update grocerytb set item_name='$item_name', item_Quantity='$item_qty', 
        item_status='$istatus', Date='$date' where id=$id";
        $query=mysqli_query($con,$q);
        header('location:view.php');
    } 
    else if(isset($_GET['id'])) 
    {
        $q = "SELECT * FROM grocerytb WHERE id='".$_GET['id']."'";
        $query=mysqli_query($con,$q);
        $res= mysqli_fetch_array($query);
    }
?>
<html>
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <title> Update </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>

body {
    background-color: #f8f9fa;
    color: #333;
    background-image: url('https://media.istockphoto.com/id/1282572255/vector/carrot-in-a-hand-drawn-linear-style.jpg?s=612x612&w=0&k=20&c=toGGmgCIehfcv1dadKpmsscmT8aRq3CN5F5R1XQx_jI=');
    background-size: cover;
    background-repeat: no-repeat;
}

.navbar {
    background: linear-gradient(to right, #343a40, #292b2c);
}

.navbar-brand img {
    padding: 5px;
}

.navbar-nav .nav-link {
    color: #fff;
    padding: 8px 15px;
    transition: color 0.2s ease;
    cursor: pointer;
}

.navbar-nav .nav-link.active,
.navbar-nav .nav-link:hover {
    color: #17a2b8; /* Change to your desired hover/active link color */
}

/* Form Styling */
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.container h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group label {
    font-weight: bold;
}

.form-control {
    border-radius: 5px;
}

.btn-primary {
    border-radius: 8px;
    width: 100%;
}

    </style>
</head>
  
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="container-fluid">
    <ul class="navbar-nav">
    <a class="navbar-brand"> </a>
    <img src="https://thumbs.dreamstime.com/b/grocery-store-delivery-company-s-logo-items-vegetables-home-icon-vector-design-template-167341487.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
      <li class="nav-item">
        <a class="nav-link" href="welcome.php"> Home </a>
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
    <div class="container mt-5">
        <h1>Update Grocery List</h1>
        <form method="post">
            <div class="form-group">
                <label>Item name</label>
                <input type="text" 
                    class="form-control" 
                    name="iname" 
                    placeholder="Item name" 
                    value =
        "<?php echo $res['item_name'];?>" />
            </div>
  
            <div class="form-group">
                <label>Item quantity</label>
                <input type="text" 
                    class="form-control" 
                    name="iqty" 
                    placeholder="Item quantity" 
value="<?php echo $res['item_Quantity'];?>" />
            </div>
  
            <div class="form-group">
                <label>Item status</label>
                <select class="form-control" 
                    name="istatus">
                    <?php
                        if($res['item_status'] == 0) {
                    ?>
                    <option value="0" selected> PENDING </option>
                    <option value="1"> BOUGHT </option>
                    <option value="2"> NOT AVAILABLE </option>
                    <?php } else if($res['item_status'] == 1) { ?>
                    <option value="0"> PENDING </option>
                    <option value="1" selected> BOUGHT </option>
                    <option value="2"> NOT AVAILABLE </option>
                    <?php } else if($res['item_status'] == 2) { ?>
                    <option value="0"> PENDING </option>
                    <option value="1"> BOUGHT </option>
                    <option value="2" selected> NOT AVAILABLE </option>
                    <?php
                        }
                    ?>
                </select>
            </div>
  
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" 
                    name="idate" placeholder="Date" 
                    value="<?php echo $res['Date']?>">
            </div>
  
            <div class="form-group">
                <input type="submit" value="Update" 
                    name="btn" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
  
</html>