<?php get_header();?>
<div class="main-content">
    <?php if(have_posts()):
        while(have_posts()):
            the_post(); ?>
            <h1> <?php the_title()?></h1>
    
        <p>
            <?php the_content()?>
        </p>
        
        <?php endwhile?>
        <?php else: echo "<p> no content found </p>"; ?>
        <?php endif?>
</div>
<div class="sidebar-content">
    <?php get_sidebar();?>
</div>
   <?php get_footer();?> 
