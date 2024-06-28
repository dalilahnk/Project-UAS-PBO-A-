<h1>Register</h1>
<?php if (isset($error)) echo '<p>' . $error . '</p>'; ?>
<form action="" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button type="submit">Register</button>
</form>
