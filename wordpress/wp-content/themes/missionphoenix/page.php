<?php get_header();?>

<div class="container pages">
    <div class="inner">
        <div class="paper-sheaf">
            <h1><?php the_title();?></h1>

            <?php if( have_posts()) : while(have_posts()) : the_post();?>

                <?php the_content();?>

            <?php endwhile; endif;// have_posts()?>
        </div>
    </div>
</div>

<?php get_footer();?>