    <?php get_header();?>
    <?php 
    if(have_posts()):while(have_posts()):the_post();
    ?>
    <div class="container">
        <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
        <?php the_content();?>
        <?php comments_template();?>
    </div>
    
    <?php endwhile;endif;?>
    <?php get_footer(); ?>