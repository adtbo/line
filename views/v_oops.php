<!DOCTYPE html>
<html lang="en">  
    <head>
        <meta charset="utf-8">
        <title>OOPS!</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes"> 

        <link href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets'); ?>/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('assets'); ?>/css/font-awesome.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

        <link href="<?php echo base_url('assets'); ?>/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="error-container">
                        <img src="<?php echo base_url('assets/images/oops.png'); ?>">
                        <h2>&nbsp;</h2>
                        <div class="error-details">
                            &nbsp;
                        </div> <!-- /error-details -->
                        <div class="error-actions">
                            <a href="<?php echo site_url(); ?>" class="btn btn-large btn-danger">
                                <i class="icon-chevron-left"></i>
                                &nbsp;
                                Go Back Home						
                            </a>
                        </div> <!-- /error-actions -->
                    </div> <!-- /error-container -->			
                </div> <!-- /span12 -->
            </div> <!-- /row -->
        </div> <!-- /container -->
        <script src="<?php echo base_url('assets'); ?>/js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo base_url('assets'); ?>/js/bootstrap.js"></script>
    </body>
</html>