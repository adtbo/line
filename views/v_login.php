<!DOCTYPE html>
<html lang="en">  
    <head>
        <meta charset="utf-8">
        <title>Login</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes"> 

        <link href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets'); ?>/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('assets'); ?>/css/font-awesome.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

        <link href="<?php echo base_url('assets'); ?>/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets'); ?>/css/pages/signin.css" rel="stylesheet" type="text/css">

    </head>

    <body>
        <div class="account-container">
            <div class="content clearfix">
                <?php echo validation_errors('<div class="alert">', '</div>'); ?>
                <form action="verifylogin" method="post">
                    <h1>Editor Login</h1>		
                    <div class="login-fields">
                        <p>Silakan masuk dengan username dan password yang sesuai.</p>
                        <div class="field">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
                        </div>
                        <div class="field">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
                        </div>
                    </div>
                    <div class="login-actions">
                        <button class="button btn btn-success btn-large">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="<?php echo base_url('assets'); ?>/js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/js/bootstrap.js"></script>
        <script src="<?php echo base_url('assets'); ?>/js/signin.js"></script>
    </body>
</html>
