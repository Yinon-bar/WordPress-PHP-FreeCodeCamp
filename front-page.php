<?php get_header() ?>


<article class="content px-3 py-5 p-md-5">

  <?php

  if (have_posts()) {
    while (have_posts()) { ?>
      <?php the_post(); ?>
      <h1> <?php the_title(); ?></h1>
      <?php the_content(); ?>
  <?php }
  }

  ?>

</article>


<?php get_footer() ?>