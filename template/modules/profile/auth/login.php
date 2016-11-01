<h1>
    Login
</h1>

<?php if (isset($error)): ?>
    <p><?php echo $error ?></p>
<?php endif; ?>

<form method="post" action="<?php echo $login_check_path ?>">
    <input type="text" name="username"> <br/>
    <input type="password" name="pass"> <br />
    <input type="hidden" name="_csrf" value="<?php echo $_csrf ?>"> 
    <button type="submit">Login</button>
</form>