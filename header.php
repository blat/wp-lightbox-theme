<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="topborder"></div>
        <div id="sidebar">
            <h1>
                <a href="<?php echo get_option('home'); ?>/"><?php echo preg_replace('/([^a-zA-Z]+)/', '<em>\\1</em>', get_bloginfo('name')); ?></a>
            </h1>
            <p><?php bloginfo('description'); ?></p>
            <ul id="nav">
                <?php wp_list_pages('title_li=&depth=1'); ?>
                <?php wp_list_categories('title_li=&depth=1'); ?>
            </ul>
            <?php get_sidebar(); ?>
        </div>
        <div id="content">
