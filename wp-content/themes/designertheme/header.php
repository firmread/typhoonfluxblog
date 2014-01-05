<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head>                
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
  <?php wp_head(); ?>
</head>
<body>

<div id="main_container">

  <div id="header_container">
  
    <div id="top_menu_container">
    
      <ul>
        <li><a href="/">Home</a></li>
		<li><a href="/about/">About</a></li>
        <li><a href="/contact/">Contact</a></li>
		<li><a href="http://www.twitter.com">Twitter</a></li>
		<li><a href="http://www.facebook.com">Facebook</a></li>
        <?php //wp_list_pages('title_li='); ?>
      </ul>
    
    </div><!--//top_menu_container-->
  
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpg" style="float:left;" /></a>
    
    <div style="clear:both;"></div>
  
  </div><!--//header_container-->
  