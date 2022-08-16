<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <title> <?php bloginfo('name')?> </title>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width">
        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
        <header >
            <section class="site-header">
                <div class="site-name">
                    <h1> <a href="<?php echo home_url();?>"> <?php bloginfo('name'); ?> </a></h1>
                    <h5> <?php bloginfo('description');?> </h5>
                </div>
                <div class="menu">
                <div class="hd-search">
                            <?php get_search_form();?>
                </div>
                    <div class="menu-container">
                        <nav class="site-nav">
                            <?php
                            $args = array(
                                "theme_location" => "main"
                            );
                            ?>
                            <?php wp_nav_menu($args);?>
                        </nav>  
                    </div>
                </div>
                
            </section>
        </header>
        <div class="container"> 
  