<?php
require_once '../classes/Product.php';

$product = new Product();

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    if ($product->addProduct($name, $description, $price, $stock)) {
        header('Location: products.php');
        exit();
    } else {
        $error = 'Failed to add product';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
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

        h1 {
            color: #ff6f61;
            text-align: center;
        }

        p {
            text-align: center;
            color: red;
        }

        form {
            display: grid;
            gap: 10px;
        }

        label {
            color: #333;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
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
            text-align: center;
            padding: 20px;
            margin-top: 40px;
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
        <h1>Add Product</h1>
        <?php if (!empty($error)) echo '<p>' . $error . '</p>'; ?>
        <form action="" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
            <br>
            <label for="description">Description</label>
            <textarea name="description" id="description" required></textarea>
            <br>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" required>
            <br>
            <label for="stock">Stock</label>
            <input type="text" name="stock" id="stock" required>
            <br>
            <button type="submit">Add Product</button>
        </form>
    </div>
</body>
<footer>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="register.php">Register</a></li>
            <?php if (!isset($_SESSION['user_id'])) : ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </footer>
</html>