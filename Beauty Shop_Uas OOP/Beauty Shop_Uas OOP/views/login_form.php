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
