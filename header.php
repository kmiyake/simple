<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>
      <?php bloginfo('name'); ?> 
      <?php if (is_single()) { wp_title(); }?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" charset="utf-8">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> » RSS2" href="<?php bloginfo('rss2_url') ?>">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> » Atom" href="<?php bloginfo('atom_url') ?>">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <?php if (is_home()) : ?>
          <h1>
            <a href="<?php bloginfo('url'); ?>" class="blog_title"><?php bloginfo('name'); ?></a>
          </h1>
        <?php else : ?>
          <a href="<?php bloginfo('url'); ?>" class="blog_title"><?php bloginfo('name'); ?></a>
        <?php endif; ?>
          <a href="<?php bloginfo('rss2_url') ?>" class="meta">
            <img class="rss_icon" src="<?php bloginfo('template_directory') ?>/images/rss.png" width="30px" height="30px" />
          </a>
          <a href="http://twitter.com/miyapong" class="meta">
            <img class="twitter_icon" src="<?php bloginfo('template_directory') ?>/images/twitter.png" width="30px" height="30px" />
          </a>
          <a href="http://www.facebook.com/miyapong" class="meta">
            <img class="twitter_icon" src="<?php bloginfo('template_directory') ?>/images/facebook.png" width="30px" height="30px" />
          </a>
        <p class="blog_description"><?php bloginfo('description'); ?></p>
        <?php wp_nav_menu(array('container' => 'nav')); ?>
      </header><!-- /header -->
