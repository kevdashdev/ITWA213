<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]--><html>
<head>
  <title>CodeIgniter for newbs.</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Project Seeker">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  <link rel="stylesheet" href="<?php echo asset_url(); ?>css/normalize.css" />
  <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css" />
  <script src="<?php echo asset_url(); ?>js/vendor/custom.modernizr.js"></script>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,800,600' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="navbar navbar-fixed-top">
  <div class="container">

    <!-- Be sure to leave the brand out there if you want it shown -->
    <a class="navbar-brand" href="/">ITWA213.A403</a>

  </div><!-- /.container -->
</div><!-- /.navbar -->

<div class="container"  style='margin-top: 80px;'>
<?php if($this->session->userdata('loggedin')): ?>
<div class="panel panel-success">
  <div class="panel-heading">Success!</div>
  You are now logged in.
</div>
<?php endif; ?>
  <div class="row">
    <div class="col-lg-12 panel">
      {yield}
    </div>
  </div>
</div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '<?php echo asset_url(); ?>js/vendor/jquery' : '<?php echo asset_url(); ?>js/vendor/zepto') +
  '.js><\/script>')
  </script>
  <script src="<?php echo asset_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>
