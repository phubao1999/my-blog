<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <?php wp_head(); ?>
    <title></title>
</head>

<body>
    <!-- Menu For Small Devices -->
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog'); ?>">Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/project'); ?>">Project</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about'); ?>">About Us</a>
            </li>
            <div class="searchbox-slide-menu">
                <?php get_search_form(); ?>
            </div>
        </ul>
    </div>
    <nav>
        <div id="logo-img">
            <a href="<?php echo site_url('') ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="GT coding logo">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="<?php echo site_url('') ?>" <?php if (is_front_page()) echo 'class="active"' ?>>Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog') ?>" <?php if (get_post_type() == 'post') echo 'class="active"' ?>>Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/project') ?>" <?php if (get_post_type() == 'project') echo 'class="active"' ?>>Project</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about') ?>" <?php if (get_page('about')) echo 'class="active"' ?>>About</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>
    <div id="searchbox">
        <?php get_search_form(); ?>
    </div>