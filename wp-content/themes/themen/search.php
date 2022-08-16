<?php get_header();?>
<h2 style="text-align:center;font-size:180%; color:#01575B;text-shadow: 1px 0px 2px rgba(167, 178, 196, 0.75);">Search result for: <?php the_search_query()?></h2>
<div class="main-content">
 <?php if(have_posts()):?>
    
    <?php
    while(have_posts()):
        the_post(); 
            get_template_part('content',get_post_format());
    endwhile;
    else: echo "<h2> no content found </h2>"; ?>
    <img id="search_img" src="<?php bloginfo('template_directory'); ?>/images/notfound.png" alt="<?php the_title(); ?>" />
   <?php  endif?>
</div>
<div class="sidebar-content">
    <?php get_sidebar();?>
</div>
   <?php get_footer();?> 
 


  