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
    <title>Beauty Shop - Makeup & Skincare</title>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Jika kamu menggunakan file CSS terpisah -->
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
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        .hero {
            background: url('../images/background.jpg') no-repeat center center/cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .hero h1 {
            font-size: 48px;
            text-align: center;
        }

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
            flex: 1;
            margin: 0 10px;
        }
        .category:hover {
            background-color: #e65c53;
        }
        .category img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 40px;
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
        .product h3 {
            font-size: 20px;
            margin-top: 10px;
        }
        .product p {
            color: #666;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .product .btn {
            display: inline-block;
            padding: 8px 20px;
            background-color: #ff6f61;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .product .btn:hover {
            background-color: #e65c53;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <?php include_once '../views/header.php'; ?>

    <div class="hero">
        <h1>Welcome to Beauty Shop</h1>
    </div>

    <div class="container">
        <h2>Shop by Category</h2>
        <div class="categories">
            <div class="category">
                <img src="../images/Make_up.jpg" alt="Makeup">
                <h3>Makeup</h3>
            </div>
            <div class="category">
                <img src="../images/skincare.jpg" alt="Skincare">
                <h3>Skincare</h3>
            </div>
            <div class="category">
                <img src="../images/tool_beauty.jpg" alt="Tools">
                <h3>Beauty Tools</h3>
            </div>
        </div>

        <h2>Featured Products</h2>
        <div class="products">
            <div class="product">
                <img src="../images/Toner.jpg" alt="SKINTIFIC 5X Ceramide Soothing Toner 80ml
">
                <h3>SKINTIFIC 5X Ceramide Soothing Toner 80ml</h3>
                <p>Rp. 109.000 </p>
                <a href="#" class="btn">Buy Now</a>
            </div>
            <div class="product">
                <img src="../images/Serum.jpg" alt="SKINTIFIC 5X Ceramide Barrier Serum 20ml
">
                <h3>SKINTIFIC 5X Ceramide Barrier Serum 20ml</h3>
                <p>Rp. 119.000</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
            <div class="product">
                <img src="../images/Cleanser.jpg" alt="Skintific - 5X Ceramide Pembersih pH Rendah
">
                <h3>Skintific - 5X Ceramide Pembersih pH Rendah</h3>
                <p>Rp. 98.000</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
        </div>
    </div>

    <?php include_once '../views/footer.php'; ?>
</body>
</html>
