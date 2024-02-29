<html>
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <title> Add </title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>

body {
    background-color: #f8f9fa;
    color: #333;
    background-image: url('https://media.istockphoto.com/id/1282572255/vector/carrot-in-a-hand-drawn-linear-style.jpg?s=612x612&w=0&k=20&c=toGGmgCIehfcv1dadKpmsscmT8aRq3CN5F5R1XQx_jI=');
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #f8f9fa;
    color: #333;
}

/* Custom Navbar Styling */
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
    font-family: Georgia, 'Times New Roman', Times, serif;
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
        <a class="nav-link " href="view.php"> View Item </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="add.php"> Add Item </a>
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
    <?php
        if(isset($_POST["btn"])) {
            include("connect.php");
            $item_name=$_POST['iname'];
            $item_qty=$_POST['iqty'];
            $item_status=$_POST['istatus'];
            $date=$_POST['idate'];

            if (empty($item_name) || empty($item_qty) || empty($date)) {
                echo '<div class="alert alert-danger" role="alert" >
                        Please fill all the fields.
                      </div>';
            } 
            else {
            $q="insert into grocerytb (item_name, item_Quantity,item_status,Date)
            values('$item_name',$item_qty,'$item_status','$date')";
  
            mysqli_query($con,$q);
            header("location:view.php");
        }
          
        }
    ?>

        <h1>Add Item </h1>
        <form action="add.php" method="POST">
            <div class="form-group">
                <label> Item name </label>
                <input type="text" class="form-control" placeholder="Item name" name="iname" />
            </div>

            <div class="form-group">
                <label>Item quantity</label>
                <input type="text" class="form-control" placeholder="Item quantity" name="iqty" />
            </div>

            <div class="form-group">
                <label>Item status</label>
                <select class="form-control" name="istatus" >
                    <option value="0"> PENDING </option>
                    <option value="1"> BOUGHT </option>
                    <option value="2"> NOT AVAILABLE </option>
                </select>
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control"  placeholder="Date" name="idate">
            </div>

            <div class="form-group">
                <input type="submit" value="Add" class="btn btn-primary" name="btn">
            </div>
        </form>
    </div>
    
</body>
  
</html>