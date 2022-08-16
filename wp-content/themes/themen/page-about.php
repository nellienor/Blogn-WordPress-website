<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <title> <?php bloginfo('name')?> </title>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width">
        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
    <?php if(have_posts()): 
    while(have_posts()):
        the_post(); ?>
    <div class="post_about">
        <div class="post_content_about">
            <a href="<?php echo home_url();?>" ><span class="close">&times;</span></a>
            <h1 style="font-size:220%"><?php the_title()?> <?php bloginfo('name'); ?></h1>
            <div class="featured_image"> 
            <?php if ( has_post_thumbnail()) :?>
                    <div class="feautured_img">
                        <?php the_post_thumbnail('home-thumbnail');?>
                    </div>
                <?php endif; ?>
        </div>
            <p><?php the_content()?></p>
        </div>
    </div>
    <?php endwhile?>
    <?php else: echo "<p> no content found </p>"; ?>
    <?php endif?>
    <script>
        var closebtn = document.getElementsByClassName("close");
        closebtn.addEventListener("click", function() {
            this.parentElement.style.display = 'none';
        });
    </script>