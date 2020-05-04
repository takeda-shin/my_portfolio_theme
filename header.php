<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="YTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header-footer.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/works.css">
  
</head>
<body>

  <!-- spnav -->

  <header class="top-header">
    <div id="nav-drawer">
      <a class="top-site-title" href="<?php echo home_url('/'); ?>">SHINYA TAKEDA</a>
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <ul class="asideList">
          <li><a href="<?php echo home_url('/'); ?>" class="top-button">TOP</a></li>
          <li><a href="<?php echo home_url('about'); ?>" class="top-button">ABOUT</a></li>
          <li><a href="<?php echo home_url('works'); ?>" class="top-button">WORKS</a></li>
          <li><a href="#contact" class="top-button">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </header>


  <!-- spnav -->

  <header class="header">
    <a class="site-title" href="<?php echo home_url('/'); ?>">SHINYA TAKEDA</a>
    <div class="buttons">
      <a class="button" href="<?php echo home_url('about'); ?>">ABOUT</a>
      <a class="button" href="<?php echo home_url('works'); ?>">WORKS</a>
      <a class="button" href="<?php echo home_url('/'); ?>#contact">CONTACT</a>
    </div>
  </header>

<?php wp_head(); ?>