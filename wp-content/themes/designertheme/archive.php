<?php get_header(); ?>

  <div id="content_container">
    
    
    <?php /* If this is a category archive */ if (is_category()) { ?>
          <h3 class="port_title"><?php single_cat_title(); ?></h3>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
          <h3 class="port_title"><?php single_tag_title(); ?></h3>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
          <h3 class="port_title"><?php the_time('F jS, Y'); ?></h3>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
          <h3 class="port_title"><?php the_time('F, Y'); ?></h3>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
          <h3 class="port_title"><?php the_time('Y'); ?></h3>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
          <h3 class="port_title">Author Archive</h3>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
          <h3 class="port_title">Blog Archives</h3>
    <?php } ?>
    
    
    <?php $x = 0; ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <div class="port_box">
      
      <?php
      if ( has_post_thumbnail() ) {
        ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('port-box'); ?></a> <?php
      } else {
        ?> <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" /></a> <?php
      }
      ?>
      
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
        <li style="padding-left: 0;">Call 1-888-345-0000</li>
        <li>Twitter</li>
        <li>Facebook</li>
        <li style="border: none;">Flickr</li>
      </ul>
      
      <input type="input" name="search" value="search" class="mid_search" />
    
    </div><!--//mid_content-->
    
  </div><!--//content_container-->
  
  <h3 class="featured_title">our featured work</h3>
  
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
      <?php
      if ( has_post_thumbnail() ) {
        ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-small'); ?></a> <?php
      } else {
        ?> <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" /></a> <?php
      }
      ?>
      <h3 class="find_out_more"><a href="<?php the_permalink(); ?>">Find Out More</a></h3>
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
      <h3 class="find_out_more"><a href="<?php the_permalink(); ?>">Find Out More</a></h3>
    </div>
    <?php } ?>
    
    <?php $x++; ?>
    <?php endforeach; ?>
    
    <div style="clear:both;"></div>
  
  </div><!--//featured_work_container-->

<?php get_footer(); ?>