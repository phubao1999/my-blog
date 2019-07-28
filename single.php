    <?php get_header();

    while (have_posts()) {
        the_post();


        ?>
        <div class="container">
            <h2 class="page-heading mb-5"><?php the_title(); ?></h2>
        </div>
        <div class="container-fluid">
            <div id="post-container w-100">
                <section id="blogpost">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                        </div>
                        <div class="card-meta" style="margin-bottom: 1em">
                            Posted By <?php the_author(); ?> on <?php the_time('F j, Y') ?>
                            <?php if(get_post_type() == 'post') { ?>     
                            in<a href="#"><?php echo get_the_category_list(',') ?></a>
                            <?php }  ?>
                        </div>
                        <div class="card-description">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
            </div>

            <div id="comments-section">
                <?php comment_form();

                $comments_number = get_comments_number();
                if ($comments_number != 0) {
                    ?>
                    <div class="comments">
                        <h3 class="text-capitalize">What others say</h3>
                        <ol class="all-comments">
                            <?php
                            $comments = get_comments(array(
                                'post_id' => $post->ID,
                                'status' => 'approve',
                            ));
                            wp_list_comments(array(
                                'per_page' => 15
                            ), $comments)
                            ?>
                        </ol>
                    </div>



                <?php
                }

                ?>
            </div>
        </div>
        </section>

    <?php } ?>

    <aside id="sidebar">
        <?php dynamic_sidebar('main_sidebar'); ?>
    </aside>

    <?php get_footer(); ?>

    <!-- 1 trang blog -->