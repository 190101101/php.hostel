<?php $main = new core\controller; ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php $main->view('main', 'requires', 'main/meta'); ?>
        <?php $main->view('main', 'requires', 'main/css'); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- Main Body Area Start Here -->
        <div id="wrapper">
            <!-- Header Area Start Here -->
            <?php $main->view('main', 'requires', 'main/navbar'); ?>

            <?php echo $data['VIEW']; ?>

            <?php $main->view('main', 'requires', 'main/footer'); ?>
        </div>
        <?php $main->view('main', 'requires', 'main/js'); ?>
    </body>
</html>
