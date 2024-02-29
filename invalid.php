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
        }

        .container {
            margin-top: 100px;
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        h2 {
            color: #dc3545;
            font-weight: bold;
        }

        a {
            color: #17a2b8;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
        p{
            font-size: 18px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Invalid Login Details</h2>
        <p>Your username or password is incorrect.</p>
        <a href="signup.php">Back to Login</a>
    </div>
</body>
</html>
