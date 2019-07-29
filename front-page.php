<?php get_header(); ?>

<div id="banner" class="d-flex align-items-center justify-content-center">
    <h1 class="rounded">&lt;coderlife/&gt;</h1>
    <br>
    <h3 class="text-light">We Share What We Know</h3>
</div>

<div class="container">
    <a class="section-heading" href="<?php echo site_url('/blog') ?>">
        <h2 class="">Lated Blogs</h2>
    </a>
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
        );
        $blogposts = new WP_Query($args);
        while ($blogposts->have_posts()) {
            $blogposts->the_post();
            ?>


            <div class="col-md-6 mb-3">
                <div class="card my-3">
                    <a href="<?php the_permalink(); ?>">
                        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="<?php the_permalink() ?>">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo wp_trim_words(the_excerpt(), 30); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_query();
        ?>
        <a href="<?php echo site_url('/blog') ?>" class="btn-readmore m-auto mt-5">See All Of My Blog</a>
    </div>
</div>
<div class="container">
    <a href="<?php echo site_url('/project'); ?>">
        <h2 class="section-heading">Lated Projects</h2>
    </a>
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => 2,
        );
        $project = new WP_Query($args);
        while ($project->have_posts()) {
            $project->the_post();
            ?>
            <div class="col-md-6">
                <div class="card">
                    <a href="<?php the_permalink(); ?>">
                        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="<?php the_permalink() ?>">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                        </a>
                        <p class="card-text"><?php echo wp_trim_words(the_excerpt(), 30); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_query();
        ?>
    </div>
</div>
<div class="container">
    <h2 class="section-heading">Source Code</h2>
    <section id="section-source">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laboriosam veniam deleniti illum nisi
            facere doloribus dolor incidunt quia omnis? Ipsum animi, aliquid nihil sed totam assumenda accusamus
            adipisci quas.
        </p>
        <a href="https://github.com/phubao1999" class="btn-readmore" target="_blank">GitHub ProFile</a>
    </section>
</div>

<?php get_footer(); ?>