<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
  </ol>-->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php while(have_posts()) : the_post(); ?>
    <div class="item active">
      <?php the_post_thumbnail('full'); ?>
      <div class="carousel-caption">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
      </div>
    </div>
    <?php endwhile; ?>    
  </div>
</div>