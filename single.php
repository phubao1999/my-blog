    <?php get_header(); ?>

    <div class="container">
        <div class="row">
            <?php while (have_posts()) {
                the_post();
                ?>
                <div class="col-lg-8">
                    <h2 class="section-heading mb-5 titleTag"><?php the_title(); ?></h2>

                    <div id="post-container w-100">
                        <section id="blogpost">
                            <div class="cards">
                                <div class="card-image">
                                    <img class="w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                                </div>
                                <div class="card-meta" style="margin-bottom: 1em">
                                    Posted By <?php the_author(); ?> on <?php the_time('F j, Y') ?>
                                    <?php if (get_post_type() == 'post') { ?>
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

            <div class="col-lg-4 titleTag">
                <aside class="pl-2 pt-5" id="sidebar" style=" background: #2c3e50; 
            list-style: none;    
            margin-top: 14vh;
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

    <!-- 1 trang blog -->