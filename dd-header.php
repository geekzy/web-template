<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

<!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="bootstrap2/css/bootstrap.min.css" />  
  <link rel="stylesheet" href="bootstrap2/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="font-face/font-awesome/css/font-awesome.css" />
  
<!-- PURE CSS MENU -->
    <!-- <link rel="stylesheet" href="css/menu.css">  -->
    
<!-- CUSTOM CSS OVERRIDES -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-face/eau/stylesheet.css" />

  <!-- More ireas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
         <!--[if lt IE 8 ]><div id="oldbrowser" style="padding:5px; margin:5px; background-color:#FFFFCC; border:1px solid #CC9933;">It appears you're viewing this site in an older web browser, which is outdated and will break this website. You should <a href="http://browsehappy.com/">upgrade to a different browser</a> to fix this issue, and to stay secure on the web. <br />If you don't have permission to do this, try installing <a href="http://www.google.com/chromeframe/?redirect=true">Google Chrome Frame</a>, a free Internet Explorer extension that allows you to experience this site as intended.</div> <![endif]--> 
  <div id="page-container" class="container">
<header class="rule">
<div class="row">
    <div id="logo" class="span3"><a href="dd-homepage.php"><img src="img/logo.png" alt="e-Skills" />
    </div>
    <div id="functions" class="span8">
        
    </div>
</div>
<div class="row">
    <nav class="span12">
    <?php
    include "dd-menu.php";
    ?>
</nav>
</div>

</header>

