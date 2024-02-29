<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {
            background-color: #f8f9fa;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            margin: 0;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .container {
            max-width: 600px;
            margin: 10px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group{
            font-size: 18px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
        }

        form input {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        input[type="submit"] {
            background-color: #348596;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 18px;
            transition: background-color 0.3s;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        input[type="submit"]:hover {
            background-color: #292256;
        }
        a {
            color: #17a2b8;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
            display: block;
            text-align: center;
            margin-top: 10px;
        }
        h5{
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
            display: block;
            text-align: center;
        }
        .btn-primary {
    border-radius: 8px;
    width: 100%;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: bold;
}

    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 style="text-align:center"> Login </h2>
        <form action="process_login.php" method="post">
            <div class="form-group">
                <label for="username"> Username: </label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary"> Login </button> <br>
            <br>
            <h5> Do you want to create a new account ? </h5>
            <a href="index.php"> Sign up </a>
        </form>
       
    </div>
</body>
</html>
