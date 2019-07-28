<?php get_header(); ?>


<main>
    <h2 class="page-heading">All blogs</h2>

  <section>
    <?php

    while (have_posts()) {
      the_post();
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
          <div class="card-meta">
            Posted By <?php the_author(); ?> on <?php the_time('F j, Y') ?> in<a href="#"><?php echo get_the_category_list(',') ?></a>
          </div>
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


  <?php get_footer(); ?>

  <!-- Blog and Project Page -->