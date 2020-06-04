<?php get_header();?>

<div class="container posts-page">
    <h1><?php wp_title('');?></h1>

    <?php if( have_posts()) : while(have_posts()) : the_post();?>

        <div class="card">
            <div class="card-body">
                <h3 class="card-title"><?php the_title();?></h3>
                <div class="card-text">
                <span class='post-exerpt'><?php the_excerpt();?></span>
                <span class='author-posts-link'><?php echo get_the_author_posts_link(); ?><span>
                <span class='post-date'><?php echo get_the_date(); ?><span>
                </div>
                <a href="<?php the_permalink();?>" class="read-more-button">Read More</a>
            </div>
        </div>
    <?php endwhile; endif;// have_posts()?>

</div>

<?php get_footer();?>