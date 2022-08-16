<article class="post">
        <div class="featured_image">
            <?php if ( has_post_thumbnail()) :?>
                    <div class="feautured_img">
                        <?php the_post_thumbnail('home-thumbnail');?>
                    </div>
                <?php else :?>
                    <div class="feautured_img">
                        <img src="<?php bloginfo('template_directory'); ?>/images/default.png" alt="<?php the_title(); ?>" />
                    </div>
                <?php endif; ?>
        </div>
        <div class="post_content">
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
            <h3>
                <a href="<?php the_permalink();?>">
                <?php the_title()?>
                </a>
            </h3>
            <h5>Written by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php the_author()?></a></h5>
            <p>
                <?php the_excerpt();?>
                <a href="<?php the_permalink();?>"></a>
            </p>

            <?php 
                $archive_year  = get_the_time('Y'); 
                $archive_month = get_the_time('m'); 
                $archive_day   = get_the_time('d'); 
            ?>
           <h5> <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"><?php  the_time("F j, Y")?></a>
           </h5>


        </div>
    </article>