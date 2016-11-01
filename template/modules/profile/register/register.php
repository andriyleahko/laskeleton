<h1>
    Register
</h1>

<?php if (isset($errors)): ?>
    <?php foreach ($errors as $err): ?>
    <p><?php echo $err ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<form method="post" action="<?php echo $container->get('route')->genereUrl('register') ?>">
    <input type="text" name="username"> <br/>
    <input type="password" name="pass"> <br />
    <input type="hidden" name="_csrf" value="<?php echo $_csrf ?>"> 
    <button type="submit">Register</button>
</form>