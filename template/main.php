<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
        <link href="/template/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="/template/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">La</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <div class="navbar-form navbar-right">
                        <?php if ($container->get('auth')->isAuth()) : ?>
                            <a href="<?php echo $container->get('route')->genereUrl('profile') ?>" type="submit" class="btn btn-default">Profile</a>
                            <a href="<?php echo $container->get('route')->genereUrl('logout') ?>" type="submit" class="btn btn-primary">Logout</a>
                        <?php else: ?>
                            <a href="<?php echo $container->get('route')->genereUrl('register') ?>" type="submit" class="btn btn-primary">Sign in</a>
                            <a href="<?php echo $container->get('route')->genereUrl('login') ?>" type="submit" class="btn btn-primary">Login</a>
                        <?php endif; ?>
                    </div>
                </div><!--/.navbar-collapse -->


            </div>
        </nav>
        <div class="container theme-showcase" role="main">
            <?php echo $content ?>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <hr>

                <footer>
                    <p>&copy; 2016 Company, Inc.</p>
                </footer>
            </div>


        </div>





    </body>
</html>