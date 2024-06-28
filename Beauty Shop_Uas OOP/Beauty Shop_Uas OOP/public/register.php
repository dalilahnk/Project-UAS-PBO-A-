<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Shop - Register</title>
    <style>
        /* Reset CSS */
        body, html {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Global Styles */
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
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

        /* Header Styles */
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

        /* Hero Styles */
        .hero {
            background: url('../images/hero.jpg') no-repeat center center/cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .hero h1 {
            font-size: 48px;
        }

        /* Category Styles */
        .categories {
            display: flex;
            justify-content: space-around;
            margin: 40px 0;
        }

        .category {
            text-align: center;
            padding: 20px;
            background-color: #ff6f61;
            color: #fff;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .category:hover {
            background-color: #e65c53;
        }

        .category img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        /* Product Styles */
        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 250px;
            margin: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        /* Footer Styles */
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
<body>
    <header>
        <h1>Register</h1>
    </header>

    <div class="container">
    <h1>Register</h1>
        <?php if (isset($error)) echo '<p>' . $error . '</p>'; ?>
        <form action="" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Register</button>
        </form>
    </div>

    <footer>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <?php if (!isset($_SESSION['user_id'])) : ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </footer>
</body>
</html>
