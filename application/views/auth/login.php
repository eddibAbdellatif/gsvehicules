
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title>Connexion - Gsvéhicules</title>

  <meta name="description" content="Connexion - Pdfparser">
  <meta name="author" content="pixelcave">
  <meta name="robots" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- Icons -->
  <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
  <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicons/favicon.png">

  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicons/favicon-160x160.png" sizes="160x160">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicons/favicon-192x192.png" sizes="192x192">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/img/favicons/apple-touch-icon-180x180.png">
  <!-- END Icons -->

  <!-- Stylesheets -->
  <!-- Web fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

  <!-- Bootstrap and OneUI CSS framework -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" id="css-main" href="<?php echo base_url()?>assets/css/oneui.css">

  <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
  <!-- <link rel="stylesheet" id="css-theme" href="<?php echo base_url()?>assets/css/themes/flat.min.css"> -->
  <!-- END Stylesheets -->
</head>
<body>
<!-- Login Content -->
<div class="content overflow-hidden">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
      <!-- Login Block -->
      <div class="block block-themed animated fadeIn">
        <div class="block-header bg-primary">
          <ul class="block-options">
            <li>
              <a href="base_pages_register.html" data-toggle="tooltip" data-placement="left" title="New Account"><i class="si si-plus"></i></a>
            </li>
          </ul>
          <h3 class="block-title">Connxion</h3>
        </div>
        <div class="block-content block-content-full block-content-narrow">
          <!-- Login Title -->
          <h1 class="h2 font-w600 push-30-t push-5"> <i class="fa fa-glide-g" style="font-size:48px;color:#5c90d2"></i>svéhicules</h1>
          <p>Bienvenue, Connecter vous.</p>
          <form class="js-validation-login form-horizontal push-30-t push-50" action="<?php echo base_url('auth/login')?>" method="post">
            <div class="form-group">
              <div class="col-xs-12">
                <div class="form-material form-material-primary floating">
                  <input class="form-control" type="text" id="login-username" name="identity">
                  <label for="login-username">Email</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">
                <div class="form-material form-material-primary floating">
                  <input class="form-control" type="password" id="login-password" name="password">
                  <label for="login-password">Mot de pass</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">
                <label class="css-input switch switch-sm switch-primary">
                  <input type="checkbox" id="login-remember-me" name="remember"><span></span> Se rappeler de moi?
                </label>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12 col-sm-6 col-md-5">
                <button class="btn btn-block btn-primary" type="submit"><i class="si si-login pull-right"></i> Connexion</button>
              </div>
            </div>
          </form>
          <!-- END Login Form -->
        </div>
      </div>
      <!-- END Login Block -->
    </div>
  </div>
</div>
<!-- END Login Content -->

<!-- Login Footer -->
<div class="push-10-t text-center animated fadeInUp">
</div>
<!-- END Login Footer -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="<?php echo base_url()?>assets/js/core/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/jquery.scrollLock.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/jquery.appear.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/jquery.countTo.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/jquery.placeholder.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/js.cookie.min.js"></script>
<script src="<?php echo base_url()?>assets/js/app.js"></script>

<!-- Page JS Plugins -->
<script src="<?php echo base_url()?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo base_url()?>assets/js/pages/base_pages_login.js"></script>
</body>
</html>
