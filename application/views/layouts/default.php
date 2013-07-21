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
  <link rel="stylesheet" href="<?php echo asset_url(); ?>css/foundation.css" />
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/application.css" />
  <script src="<?php echo asset_url(); ?>js/vendor/custom.modernizr.js"></script>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,800,600' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main-header">
  <nav class="row top-bar">
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <h1><a href="/">ITWA213.A403</a></h1>
      </li>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li><a href="/">Home</a></li>
        <li><a href="/home/about">About</a></li>
        <li><a href='mailto:kevdashdev@gmail.com'>Contact</a></li>
      </ul>
    </section>
  </nav>
</div>

<div id='sub-nav' class="row">
  <dl class="sub-nav">
    <dd><a href="/calculator"><span data-tooltip class="tip-right has-tip button secondary small" title="Basic Calculator">1</span></a></dd>
    <dd><a href="/payroll"><span data-tooltip class="tip-right has-tip button secondary small" title="Basic Payroll System">2</span></a></dd>
    <dd><a href="/apayroll"><span data-tooltip class="tip-right has-tip button secondary small" title="Enhanced Payroll System (Lab 2, using applied helpers)">3</span></a></dd>
    <dd><a href="/converter"><span data-tooltip class="tip-right has-tip button secondary small" title="Numeric to Word Converter">4</span></a></dd>
    <dd><a href="#"><span data-tooltip class="tip-right has-tip button secondary small" title="Customer Registration Form">5</span></a></dd>
    <dd><a href="#"><span data-tooltip class="tip-right has-tip button secondary small" title="Quiz Game">6</span></a></dd>
    <dd><a href="#"><span data-tooltip class="tip-right has-tip button secondary small" title="Customer Registration Form (Apply field validation, email verification and insert data to database)">7</span></a></dd>
    <dd><a href="#"><span data-tooltip class="tip-right has-tip button secondary small" title="Customer Management and Item Management(Administrator Account)">8</span></a></dd>
    <dd><a href="#"><span data-tooltip class="tip-right has-tip button secondary small" title="Customer Profile (Upload profile image and modify employee information)">9</span></a></dd>
    <dd><a href="#"><span data-tooltip class="tip-right has-tip button secondary small" title="Enhanced Item Management (Upload image)">10</span></a></dd>
    <dd><a href="#"><span data-tooltip class="tip-right has-tip button secondary small" title="Ordering Items (add to cart)">11</span></a></dd>
    <dd><a href="#"><span data-tooltip class="tip-right has-tip button secondary small" title="Enhance Employee Registration Form (Apply Helper)">12</span></a></dd>
    <dd><a href="#"><span data-tooltip class="tip-right has-tip button secondary small" title="Ordering System (Final Phase)">13</span></a></dd>
    <dd><a href="#"><span data-tooltip class="tip-right has-tip button secondary small" title="Movie Stores">14</span></a></dd>
    <dd><a href="#"><span data-tooltip class="tip-right has-tip button secondary small" title="Music Store (Phase I)">15</span></a></dd>
    <dd><a href="#"><span data-tooltip class="tip-right has-tip button secondary small" title="Music Store (Final Phase)">16</span></a></dd>
  </dl>
</div>

<div id='container' class="row panel">
  <div class="large-12 columns">
    {yield}
  </div>
</div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '<?php echo asset_url(); ?>js/vendor/jquery' : '<?php echo asset_url(); ?>js/vendor/zepto') +
  '.js><\/script>')
  </script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.alerts.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.clearing.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.cookie.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.dropdown.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.forms.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.joyride.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.magellan.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.orbit.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.placeholder.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.reveal.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.section.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.tooltips.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.topbar.js"></script>
  <script src="<?php echo asset_url(); ?>js/foundation/foundation.interchange.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
