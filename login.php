<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | FasnArsh</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("images/lav.jpg");
            font-family: 'Arial', sans-serif; /* Change to preferred font */
            background-color: #f4f4f4; /* Lighter background color */
            color: #FFFFFF; /* Text color */
            text-align: center;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #fff; /* Form background color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            width: 300px;
            margin: 50px auto; /* Center the form */
        }

        h4 {
            color: #333; /* Header text color */
            margin-bottom: 10px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc; /* Lighter border color */
            border-radius: 4px;
            background-color: #f9f9f9; /* Input field background */
            color: #333; /* Input text color */
            font-size: 16px; /* Font size */
        }

        input[type="submit"], input[type="button"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px; /* Font size */
        }

        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #0056b3;
        }

        p {
            margin-top: 20px;
            color: #666; /* Text color for paragraph */
            font-size: 14px; /* Font size */
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h4>LOGIN</h4>
    <form id="login_form" action="validate_login.php" method="post">
        <h4>UserName</h4>
        <input type="text" name="username" placeholder="Enter your username">

        <h4>Password</h4>
        <input type="password" name="password" placeholder="Enter your password" required minlength="8" maxlength="15">

        <br><br>
        <input type="submit" value="Login">
    </form>
    <p>New User? Sign up to create your own account</p>
    <input type="button" value="SignUp" onclick="create()">

    <script>
        function create() {
            window.location = "SignUp.php";
        }
    </script>
</body>
<footer>
        <h4 class="p-3 bg-dark text-white text-center">@FasnArshtravels. Contact: +91 9176395921</h4>
    </footer>
</html>
