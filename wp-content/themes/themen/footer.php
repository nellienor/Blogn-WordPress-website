        </div>
        <footer class="site-footer">
                <div class="footer-widgets clearfix">
                    <?php if(is_active_sidebar('footer1')):?>
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar('footer1');?>
                    </div>
                <?php endif;?>
                </div>
                <div class="footer-widgets clearfix">
                    <?php if(is_active_sidebar('footer2')):?>
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar('footer2');?>
                    </div>
                <?php endif;?>
                </div>
                <div class="footer-widgets clearfix">
                    <?php if(is_active_sidebar('footer3')):?>
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar('footer3');?>
                    </div>
                <?php endif;?>
                </div>
            
            <nav class="footer-nav">
                        <?php
                        $args = array(
                            "theme_location" => "footer"
                        );
                        ?>
                        <?php wp_nav_menu($args);?>
            </nav>
            <div class="copyright">
                <hr>
                <p><?php bloginfo('name');?> &copy; <?php echo date('Y')?></p>
            </div>
        </footer>
        <?php wp_footer()?>
    </body>
</html>   