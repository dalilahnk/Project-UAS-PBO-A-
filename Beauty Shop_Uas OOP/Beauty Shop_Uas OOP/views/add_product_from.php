<?php
require_once '../classes/Product.php';

$product = new Product();

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

<?php include_once '../views/header.php'; ?>

<h1>Add Product</h1>
<?php if (isset($error)) echo '<p>' . $error . '</p>'; ?>
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

<?php include_once '../views/footer.php'; ?>
