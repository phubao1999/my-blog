<?php get_header(); ?>

<main>
    <div class="container">
        <h2 class="section-heading titleTag"><?php the_archive_title(); ?></h2>
        <div class="row">
            <?php

            while (have_posts()) {
                the_post();
                ?>
                <div class="col-md-6 my-3">
                    <div class="card">
                        <a href="<?php the_permalink() ?>">
                            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card image cap">
                        </a>
                        <div class="card-meta mt-2">
                            Posted By <?php the_author(); ?> on <?php the_time('F j, Y') ?> in<a href="#"><?php echo get_the_category_list(',') ?></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php echo wp_trim_words(the_excerpt(), 30); ?></p>
                            <a href="<?php the_permalink() ?>" class="btn-readmore">Watch More</a>
                        </div>
                    </div>
                </div>

            <?php }
            wp_reset_query();
            ?>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
        <!-- ===================================== -->
        <h2 class="section-heading">Source Code</h2>
        <section id="section-source">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laboriosam veniam deleniti illum nisi
                facere doloribus dolor incidunt quia omnis? Ipsum animi, aliquid nihil sed totam assumenda accusamus
                adipisci quas.
            </p>
            <a href="https://github.com/phubao1999" class="btn-readmore">GitHub ProFile</a>
        </section>
    </div>


    <?php get_footer(); ?>


    <!-- Project -- Archive -->