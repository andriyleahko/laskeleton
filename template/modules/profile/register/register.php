<div class="container">
    <!-- Example row of columns -->
    <div class="row">    

        <h2>Register</h2>

        <form class="form-horizontal col-lg-8" method="post" action="<?php echo $container->get('route')->genereUrl('register') ?>">
            <?php if (isset($errors)): ?>
                <?php foreach ($errors as $err): ?>
                    <p class="text-danger"><?php echo $err ?></p>
                <?php endforeach; ?>
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
                <label for="inputEmail4" class="col-sm-2 control-label">First name</label>
                <div class="col-sm-10">
                    <input name="firstname" type="text" class="form-control" id="inputEmail3" placeholder="First name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail5" class="col-sm-2 control-label">Last name</label>
                <div class="col-sm-10">
                    <input name="lastname" type="text" class="form-control" id="inputEmail3" placeholder="Last name">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Register</button>
                </div>
            </div>
            <input type="hidden" name="_csrf" value="<?php echo $_csrf ?>"> 
        </form>
    </div>
</div>