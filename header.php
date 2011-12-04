<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>
      <?php bloginfo('name'); ?> 
      <?php if (is_single()) { wp_title(); }?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" charset="utf-8">
    <script src="<?php bloginfo('template_directory') ?>/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/simple.js" type="text/javascript" charset="utf-8"></script>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> » RSS2" href="<?php bloginfo('rss2_url') ?>">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> » Atom" href="<?php bloginfo('atom_url') ?>">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php $options = get_option('simple_theme_options') ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <?php if (is_home()) : ?>
          <h1>
            <a href="<?php bloginfo('url'); ?>" class="logo"><?php bloginfo('name'); ?></a>
          </h1>
        <?php else : ?>
          <a href="<?php bloginfo('url'); ?>" class="logo"><?php bloginfo('name'); ?></a>
        <?php endif; ?>
        <a href="<?php bloginfo('rss2_url') ?>" class="meta">
          <img id="rss_icon" src="<?php bloginfo('template_directory') ?>/images/rss.png" />
          <img id="rss_default_icon" src="<?php bloginfo('template_directory') ?>/images/rss.png" style="display:none;"/>
          <img id="rss_hover_icon" src="<?php bloginfo('template_directory') ?>/images/rss_hover.png" style="display:none;"/>
        </a>
        <?php if ( $options['twitter'] ) { ?>
          <a href="http://twitter.com/<?php echo $options['twitter'] ?>" class="meta">
            <img id="twitter_icon" src="<?php bloginfo('template_directory') ?>/images/twitter.png" />
            <img id="twitter_default_icon" src="<?php bloginfo('template_directory') ?>/images/twitter.png" style="display:none;"/>
            <img id="twitter_hover_icon" src="<?php bloginfo('template_directory') ?>/images/twitter_hover.png" style="display:none;"/>
          </a>
        <?php } ?>
        <?php if ( $options['facebook'] ) { ?>
          <a href="http://www.facebook.com/miyapong" class="meta">
            <img id="facebook_icon" src="<?php bloginfo('template_directory') ?>/images/facebook.png" />
            <img id="facebook_default_icon" src="<?php bloginfo('template_directory') ?>/images/facebook.png" style="display:none;"/>
            <img id="facebook_hover_icon" src="<?php bloginfo('template_directory') ?>/images/facebook_hover.png" style="display:none;"/>
          </a>
        <?php } ?>
        <p class="description"><?php bloginfo('description'); ?></p>
        <nav>
          <?php wp_nav_menu(); ?>
        </nav>
      </header><!-- /header -->
