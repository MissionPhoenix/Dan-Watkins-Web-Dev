<?php get_header();?>

<div class="container post">
    <div class="inner-tab">
        <div class="paper-stack">
            <div class="paper-sheaf">
                <h1><?php the_title();?></h1>
<!--                <div class="post-content">      for the dual column/pagination? -->
<!--                    <div class="post-content-inner"> -->
                <?php if(has_post_thumbnail()):?>

                    <img src="<?php the_post_thumbnail_url('biggest');?>" class="img-fluid"?>

                <?php endif; ?>
                <?php if( have_posts()) : while(have_posts()) : the_post();?>

                    <?php the_content();?>

                <?php endwhile; endif;// have_posts()?>
 <!--                   </div> -->
 <!--               </div>   -->
            </div> 
        </div>
    </div>
</div>

<?php get_footer();?>