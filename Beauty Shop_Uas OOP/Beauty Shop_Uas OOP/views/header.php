<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Shop</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        header h1 {
            margin: 0;
            position: inherit;
            font-size: 56px; /* Perbesar ukuran font */
            margin-bottom: 10px; /* Berikan spasi ke tulisan setelahnya */
        }
    </style>
</head>
<body>
    <header>
        <h1>Beauty Shop</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <?php if (!isset($_SESSION['user_id'])) : ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                <?php else : ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
