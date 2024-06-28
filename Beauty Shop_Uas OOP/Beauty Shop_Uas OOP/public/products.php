<?php
require_once '../classes/Product.php';

$product = new Product();
$products = $product->getAllProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Shop - Products</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
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
        a {
            color: #fff;
            background-color: #ff6f61;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 20px;
        }
        a:hover {
            background-color: #e65c53;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
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
        <h1>Products</h1>
    </header> 
    <div class="container">
        <h1>Products</h1>
        <a href="add_products.php">Add Product</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['description']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td><?php echo $product['stock']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <footer>
    <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <?php if (!isset($_SESSION['user_id'])) : ?>
                <li><a href="register.php">Register</a></li>
            <?php endif; ?>
        </ul>
    </footer>
</body>
</html>