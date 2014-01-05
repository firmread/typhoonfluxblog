<?php get_header(); ?>

  <div id="content_container">
  
    
    <div class="featured_right">
    
      <?php
       global $post;
       $myposts = get_posts('numberposts=1&category_name=Featured Post');
       foreach($myposts as $post) :
         setup_postdata($post);
       ?>

      <?php
      if ( has_post_thumbnail() ) {
        ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-big'); ?></a> <?php
      } else {
        ?> <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" width="655" height="405" /></a> <?php
      }
      ?>
      
      <?php endforeach; ?>
    </div><!--//featured_right-->
    
    <div style="clear:both;"></div>
    
    
  </div><!--//content_container-->
  
  <h3 class="featured_title">Hello, I'm a designer, an illustrator and an author. Welcome to my online portfolio. I'm available for freelance work.</h3>
  
  <div class="featured_work_container">
    
    <?php
     global $post;
     $myposts = get_posts('numberposts=12&category_name=Featured Work');
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