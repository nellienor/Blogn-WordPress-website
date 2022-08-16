<?php get_header();?>
            <h2 style="text-align:center;font-size:180%; padding:3px;color:#01575B;text-shadow: 1px 0px 2px rgba(167, 178, 196, 0.75);">
            <?php if(is_category()){
                echo 'Category: ' . single_cat_title('',false);
            }
            elseif (is_tag()){
                single_tag_title();
            }
            elseif(is_author()){
                the_post();
                echo 'Author Archives: ' . get_the_author();
                rewind_posts();
            }
            elseif (is_day()){
                echo 'Daily Archives: ' . get_the_date();
            }
            elseif (is_month()){
                echo 'Monthly Archives: ' . get_the_date("F Y");
            }
            elseif (is_year()){
                echo 'Yearly Archives: ' . get_the_date("Y");
            }
            else {
                single_cat_title();
            } ?>
            </h2>
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
 