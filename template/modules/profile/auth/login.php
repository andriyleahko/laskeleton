<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <h2>Login</h2>

        <form class="form-horizontal col-lg-8" method="post" action="<?php echo $login_check_path ?>">
            <?php if (isset($error)): ?>
                <p class="text-danger"><?php echo str_replace(',', '<br/>', $error) ?></p>
            <?php endif; ?>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input name="username" type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input name="pass" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>
            <input type="hidden" name="_csrf" value="<?php echo $_csrf ?>"> 
        </form>
    </div>
</div>