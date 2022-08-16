<?php get_header();?>
  
        <h2 style="text-align:center;font-size:180%; color:#01575B;text-shadow: 1px 0px 2px rgba(167, 178, 196, 0.75);">
        Welcome to <?php bloginfo('name'); ?> !
        </h2>
<?php $query = array(
    'category_name' => 'interviews,review',
    'posts_per_page' => 3,
    "orderby" => 'date',
    'order' => 'ASC' 
);
$latestPosts = new WP_Query($query);
?>
    <div class="main-content">
 <?php if($latestPosts->have_posts()):?>
        <?php while($latestPosts->have_posts()):
            $latestPosts->the_post(); 
                get_template_part('content', get_post_format());?>
   <?php endwhile;
   endif;
wp_reset_postdata();?>

<?php $query2 = array(
    'author' => 1,
    'posts_per_page' => 1
);
$byauthor = new WP_Query($query2);
?>
    <div class="banner_post">
    <h2>Latest by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php the_author()?></a></h2>
     <?php if($byauthor ->have_posts()):?>
        <?php while($byauthor ->have_posts()):
            $byauthor ->the_post(); 
                get_template_part('content', get_post_format());?>
   <?php endwhile;
   endif;
wp_reset_postdata();?>
    </div>
</div>
<div class="sidebar-content">
    <?php get_sidebar();?>
</div>
<?php get_footer();?> 