<?php
 /**
    * Template Name: News Page
    */
?>

<?php get_header();?>
<h1> <?php the_title()?></h1>
<p><?php the_content()?></p>
<?php $query = array(
    'category_name' => 'news,interviews',
    'posts_per_page' => -1,
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

</div>
<div class="sidebar-content">
    <?php get_sidebar();?>
</div>
<?php get_footer();?> 