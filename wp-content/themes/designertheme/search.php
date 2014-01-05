<?php get_header(); ?>

  <div id="content_container">
    
    
    
    <h3 class="port_title">Search Results</h3>
    
    
    
    <?php $x = 0; ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <div class="port_box">
      
      <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" /></a>
      
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      
    </div><!--//port_box-->
    
    <?php if($x == 1) { echo '<div style="clear:both;"></div>'; } ?>
    
    <?php $x++; ?>
    
    <?php endwhile; else: ?>

      <h3>Sorry, no posts matched your criteria.</h3>

    <?php endif; ?>
    
    <div style="clear:both;"></div>
    
    <div class="mid_content">
    
      <ul>
        <li style="padding-left: 0;">Call Us 1-888-345-0000</li>
        <li><a href="http://www.twitter.com">Twitter</a></li>
        <li><a href="http://www.facebook.com">Facebook</a></li>
        <li style="border: none;"><a href="http://www.flickr.com">Flickr</a></li>
      </ul>
      
      <input type="input" name="search" value="search" class="mid_search" />
    
    </div><!--//mid_content-->
    
  </div><!--//content_container-->
  
  <h3 class="featured_title">Featured Work</h3>
  
  <div class="featured_work_container">
    
    <?php
     global $post;
     $myposts = get_posts('numberposts=4&category_name=Featured Work');
     $x=0;
     foreach($myposts as $post) :
       setup_postdata($post);
     ?>
    
    <?php if($x == 0) { ?>
    <div class="featured_box_first">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" /></a>
      <h3 class="find_out_more"><a href="<?php the_permalink(); ?>">Find Out More</a></h3>
    </div>
    <?php } else { ?>
    <div class="featured_box">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" /></a>
      <h3 class="find_out_more"><a href="<?php the_permalink(); ?>">Find Out More</a></h3>
    </div>
    <?php } ?>
    
    <?php $x++; ?>
    <?php endforeach; ?>
    
    <div style="clear:both;"></div>
  
  </div><!--//featured_work_container-->

<?php get_footer(); ?>