<?php get_header(); ?>

<div id="banner">
    <h1>&lt;coderlife/&gt;</h1>
    <h3>We Share What We Know</h3>
</div>
<main class="container">
    <a href="<?php echo site_url('/blog') ?>">
        <h2 class="section-heading">All blogs</h2>
    </a>

    <section>
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
        );
        $blogposts = new WP_Query($args);
        while ($blogposts->have_posts()) {
            $blogposts->the_post();
            ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                        <?php echo wp_trim_words(the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
                </div>
            </div>
        <?php }
        wp_reset_query();
        ?>
    </section>
    <a href="<?php echo site_url('/project'); ?>">
        <h2 class="section-heading">All Projects</h2>
    </a>
    <section>
        <?php
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => 2,
        );
        $project = new WP_Query($args);
        while ($project->have_posts()) {
            $project->the_post();
            ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                        <?php echo wp_trim_words(the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
                </div>
            </div>
        <?php }
        wp_reset_query();
        ?>
    </section>
    <h2 class="section-heading">Source Code</h2>
    <section id="section-source">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laboriosam veniam deleniti illum nisi
            facere doloribus dolor incidunt quia omnis? Ipsum animi, aliquid nihil sed totam assumenda accusamus
            adipisci quas.
        </p>
        <a href="https://github.com/phubao1999" class="btn-readmore">GitHub ProFile</a>
    </section>


    <?php get_footer(); ?>