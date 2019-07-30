<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <?php wp_head(); ?>
    <title></title>
</head>

<body>
    <!-- Menu For Small Devices -->
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url('') ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/67407744_411801276106053_1505796515862413312_n.png" style="height: 60px" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="mx-5 text-white text-lg text-uppercase text-bold font-weight-bold" href="<?php echo site_url('') ?>" <?php if (is_front_page()) echo 'class="active"' ?>>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="mx-5 text-white text-lg text-uppercase text-bold font-weight-bold" href="<?php echo site_url('/blog') ?>" <?php if (get_post_type() == 'post') echo 'class="active"' ?>>Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="mx-5 text-white text-lg text-uppercase text-bold font-weight-bold" href="<?php echo site_url('/project') ?>" <?php if (get_post_type() == 'project') echo 'class="active"' ?>>Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="mx-5 text-white text-lg text-uppercase text-bold font-weight-bold" href="<?php echo site_url('/about') ?>" <?php if (get_page('about')) echo 'class="active"' ?>>About</a>
                    </li>
                </ul>
                <?php get_search_form(); ?>
            </div>
        </div>
    </nav>