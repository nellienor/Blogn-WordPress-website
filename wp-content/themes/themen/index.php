<?php get_header();
    if(is_home()):?>
        <h2 style="text-align:center;font-size:180%; color:#01575B;text-shadow: 1px 0px 2px rgba(167, 178, 196, 0.75);">
        Welcome to <?php bloginfo('name'); ?> !
        </h2>
    <?php endif;?>
    <div class="main-content">
 <?php if(have_posts()):?>
        <?php while(have_posts()):
            the_post(); 
                get_template_part('content', get_post_format());?>
   <?php endwhile;
else: echo "<p> no content found </p>"; 
endif;?>
</div>
<div class="sidebar-content">
    <?php get_sidebar();?>
</div>
<?php get_footer();?>  