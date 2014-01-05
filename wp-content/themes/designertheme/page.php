<?php get_header(); ?>

  <div id="content_container">
  
   
    
    <div class="featured_right_single">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
      <h1><?php the_title(); ?></h1>
    
      <?php the_content(); ?>
      
      <?php comments_template(); ?>
      
    <?php endwhile; else: ?>

        <h3>Sorry, no posts matched your criteria.</h3>
  
      <?php endif; ?>
      
    </div><!--//featured_right-->
    
    <div style="clear:both;"></div>
    
    
    
  </div><!--//content_container-->
  
  
  
  <div class="featured_work_container">
    
    <?php
     global $post;
     $myposts = get_posts('numberposts=4&category_name=Featured Work');
     $x=0;
     foreach($myposts as $post) :
       setup_postdata($post);
     ?>
    
    <?php if($x == 0) { ?>
    <div class="featured_box">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php
      if ( has_post_thumbnail() ) {
        ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-small'); ?></a> <?php
      } else {
        ?> <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" /></a> <?php
      }
      ?>
      <h3 class="find_out_more"><a href="<?php the_permalink(); ?>"></a></h3>
    </div>
    <?php } else { ?>
    <div class="featured_box">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php
      if ( has_post_thumbnail() ) {
        ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-small'); ?></a> <?php
      } else {
        ?> <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" /></a> <?php
      }
      ?>
      <h3 class="find_out_more"><a href="<?php the_permalink(); ?>"></a></h3>
    </div>
    <?php } ?>
    
    <?php $x++; ?>
    <?php endforeach; ?>
    
    <div style="clear:both;"></div>
  
  </div><!--//featured_work_container-->

<?php get_footer(); ?>