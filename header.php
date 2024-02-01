<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="codejumpのprofileです">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/bootstrap4/bootstrap.min.css" />
  <link href="<?php echo get_template_directory_uri(); ?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/main_styles.css" />
  <title>Profile</title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <nav>
    
      <a href="/">
      <img src="<?php echo get_template_directory_uri(); ?>/logo.svg" class="logo" />
     
     
     
     <div class="menu">
      <a href="<?php echo home_url(); ?>/category/about">About</a>
      <a href="<?php echo home_url(); ?>/category/event">Bicycle</a>
    </div>
    </nav>
  </header>
