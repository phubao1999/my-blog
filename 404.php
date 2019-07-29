<?php get_header(); ?>

    <div class="container _404 titleTag">
        <h2 class="page-heading">Oh! What??? 404</h2>
        <img src="http://source.unsplash.com/640x480/?cats">
        <h3 class="text-capitalize">sorry friend, i think you're lost. please try the links down bellow</h3>
        <ul>
            <li><a href="<?php echo site_url('/blog') ?>">Blog List</a></li>
            <li><a href="<?php echo site_url('/project') ?>">All Projects</a></li>
            <li><a href="<?php echo site_url('/about') ?>">About Us</a></li>
            <li><a href="<?php echo site_url('') ?>">Home Page</a></li>
        </ul>
    </div>

<?php get_footer(); ?>