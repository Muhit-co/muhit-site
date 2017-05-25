<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta property="og:image" content="<?php echo url('assets/images/muhit-logo.png'); ?>" />

  <link href="<?php echo url('assets/images/favicon.ico'); ?>" type="image/x-icon" rel="icon" />
  <link href="<?php echo url('assets/images/favicon.ico'); ?>" type="image/x-icon" rel="shortcut icon" />

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <?php
  // checks if not on localhost, then serves assets from CDN
  $local = strpos($_SERVER['SERVER_NAME'], 'localhost');
  if($local === false):
    // styles
    echo css('https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
    echo css('http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css');
    echo css('http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic');
    echo css('http://fonts.googleapis.com/css?family=Source+Serif+Pro:700,400');
    // scripts
    echo js('https://code.jquery.com/jquery-1.11.1.min.js');
    echo js('https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.2/fastclick.min.js');
    echo js('https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.5.4/jquery.smooth-scroll.min.js');
    echo js('https://cdnjs.cloudflare.com/ajax/libs/slidesjs/3.0/jquery.slides.min.js');
  else:
    // styles
    echo css('assets/css/bootstrap.min.css');
    echo css('assets/css/ionicons.min.css');
    // scripts
    echo js('assets/scripts/jquery-1.11.1.min.js');
    echo js('assets/scripts/jquery.smooth-scroll.min.js');
    echo js('assets/scripts/jquery.slides.min.js');
    echo js('assets/scripts/fastclick.min.js');
  endif;
  echo css('assets/css/style.css');
  echo js('assets/scripts/scripts.js');
  ?>

  <?php if($local === false): ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-9833982-25', 'auto');
    ga('send', 'pageview');

  </script>
  <?php endif; ?>


</head>
<body class="<?php echo $page->template() ?>">

  <header<?php echo ($page->isHomePage()) ? ' class="isTransparent"' : '' ?>>
    <div class="row">
      <div class="col-xs-12">
        <a href="javascript:void()" class="nav-button"><i class="ion-navicon ion-2x"></i><i class="ion-android-close ion-15x"></i></a>
        <?php snippet('menu') ?>
        <a href="<?php echo $site->url() ?>" class="logo">
          <img src="<?php echo url('assets/images/logo.png'); ?>" alt="Muhit" height="30px" class="u-floatleft" />
          <h3 class="u-floatleft u-mt5 u-ml10 c-white" style="font-weight: 400;"><span class="extended"><?php echo l::get('story') ?></span></h3>
        </a>
      </div>
    </div>
  </header>

  <?php snippet('language_switcher'); ?>
