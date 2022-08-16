<?php get_header();
    if(is_home()):?>
        <h2 style="text-align:center;font-size:180%; color:#01575B;text-shadow: 1px 0px 2px rgba(167, 178, 196, 0.75);">
        Welcome to <?php bloginfo('name'); ?> blog!
        </h2>
    <?php endif;?>
    <div class="main-content">
<?php if(have_posts()):
    while(have_posts()):
        the_post(); ?>
    <article class="post">
            <h1>
                <?php the_title()?>
            </h1>
        
        <div class="single_info">
            <div class="category">
                <?php
                    $categories = get_the_category();
                    $separator = ' / ';
                    $output = '';
                    if ( ! empty( $categories ) ) {
                        foreach( $categories as $category ) {
                            $output .= '<a href= "'. esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                        }
                        echo trim( $output, $separator );
                    }
                ?>
            </div>
            <h3>Written by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php the_author()?></a></h3>
            <?php 
                $archive_year  = get_the_time('Y'); 
                $archive_month = get_the_time('m'); 
                $archive_day   = get_the_time('d'); 
            ?>
           <h3> <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"><?php  the_time("F j, Y")?></a>
           </h3>
        </div>
        <div class="featured_image">
            <?php if ( has_post_thumbnail()) :?>
                    <div class="feautured_img">
                        <?php the_post_thumbnail('home-thumbnail');?>
                    </div>
                <?php endif; ?>
        </div> 
        <p><?php the_content()?></p>
    </article>
    <?php endwhile?>
    <?php else: echo "<p> no content found </p>"; ?>
    <?php endif?>
    <div class="latest_posts">
                    <?php theLastThreePosts();?>
                </div>
            </div>
            <div class="sidebar-content">
    <?php get_sidebar();?>
</div>
                
   <?php get_footer();?> 
 