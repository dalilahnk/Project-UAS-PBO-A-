<?php
require_once '../classes/User.php';

$user = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $logged_in_user = $user->login($email, $password);
    if ($logged_in_user) {
        session_start();
        $_SESSION['user_id'] = $logged_in_user['id'];
        $_SESSION['name'] = $logged_in_user['name'];
        header('Location: index.php');
        exit();
    } else {
        $error = 'Login failed. Please check your email and password.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        header {
            background-color: #ff6f61;
            padding: 20px;
            text-align: center;
            color: #fff;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        h1 {
            color: #ff6f61;
            text-align: center;
        }

        p {
            text-align: center;
            color: red;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #ff6f61;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e65c53;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: absolute;
            width: 100%;
            bottom: 0;
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li {
            display: inline;
            margin: 0 10px;
        }

        footer ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        footer ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<header>
        <h1>Login</h1>
    </header>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if (isset($error)) echo '<p>' . $error . '</p>'; ?>
        <form action="" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>

    <footer>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <?php if (!isset($_SESSION['user_id'])) : ?>
                <li><a href="register.php">Register</a></li>
            <?php else : ?>
                <li><a href="logout.php">Logout</a></li>
            <?php endif; ?>
        </ul>
    </footer>
</body>
</html>
