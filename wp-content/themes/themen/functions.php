<?php
    function connect_resources(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts','connect_resources');

    function custom_theme_setup(){
        register_nav_menus(array(
            'main' => _('Main menu'),
            'footer' => _('Footer menu') 
        ));    
      
         
    }
    add_theme_support( 'post-thumbnails');
    add_action('init','custom_theme_setup');  

    
   function custom_excerpt_length(){
       return 35;
   }
   add_filter('excerpt_length','custom_excerpt_length');

   function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"><button class="read_more_btn">Read the full article here...</button></a>';
}
    add_filter('excerpt_more', 'new_excerpt_more');
    add_theme_support('post-formats', array('aside','gallery','link','video','status'));
    
    function widgetsInit(){
        register_sidebar(array(
            'id' => 'sidebar1',
            'name' => 'Sidebar',
            'before_widget' => '<div class="widget_item">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="my_class_name">',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'id' => 'footer1',
            'name' => 'footer1',
            'before_widget' => '<div class="widget_item">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="my_class_name">',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'id' => 'footer2',
            'name' => 'footer2',
            'before_widget' => '<div class="widget_item">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="my_class_name">',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'id' => 'footer3',
            'name' => 'footer3',
            'before_widget' => '<div class="widget_item">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="my_class_name">',
            'after_title' => '</h4>',
        ));
        }
    add_action('widgets_init','widgetsInit');

        function theLastThreePosts(){
            global $authordata;
            
            $author_3_posts = new WP_Query(array(
                "author" => $authordata -> ID,
                "posts_per_page" => 2
            ));
            
        if($author_3_posts -> have_posts()){
            echo "<h5>Check out more posts by the author </h5>";
            echo "<ul>";
        while($author_3_posts-> have_posts()){
            $author_3_posts-> the_post();?>
            <li>
                <a href="<?php the_permalink();?>"><?php get_template_part('content', get_post_format());?></a>
               
            </li>
       <?php
        }
        echo "</ul>"; 
    }}


   




?> 



