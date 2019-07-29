<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php while (have_posts()) {
            the_post();
            ?>
            <div class="col-lg-8">
                <h2 class="section-heading titleTag"><?php the_title(); ?></h2>
                <div id="post-container">
                    <section id="blogpost">
                        <div class="cards">
                            <?php if (has_post_thumbnail()) { ?>
                                <div class="card-image">
                                    <img class="w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                                </div>
                            <?php } ?>
                            <div class="card-description p-3">
                                <?php the_content(); ?>
                            </div>
                        </div>

                    </section>

                <?php } ?>
            </div>
        </div>
        <div class="col-lg-4 titleTag">
            <aside class="pl-2 pt-5" id="sidebar" style=" background: #2c3e50; 
            list-style: none;    
            margin-top: 10vh;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: start;">
                <?php dynamic_sidebar('main_sidebar'); ?>
            </aside>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<!-- About -->