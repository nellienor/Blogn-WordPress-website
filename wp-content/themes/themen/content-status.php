<article class="post post-status">
    <h4>
    <?php the_title();?>
    </h4>
    <p class="mini-meta">
       Written by <?php the_author();?> / <?php the_time('F j,Y');?>
    </p>
    <?php the_content();?>
</article>