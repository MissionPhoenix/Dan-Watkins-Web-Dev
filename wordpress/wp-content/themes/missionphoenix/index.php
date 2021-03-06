<?php get_header();?>

<div class="container posts-page">
    <div class="inner-tab">
        <div class="paper-stack">
            <div class="paper-sheaf">
                <h1><?php wp_title('');?></h1>

                <?php if( have_posts()) : while(have_posts()) : the_post();?>

                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><?php the_title();?></h3>
                            <div class="card-text">
                            <span class='post-exerpt'><?php the_excerpt();?></span>
                            <span class='author-posts-link'><?php the_author_posts_link(); ?></span>
                            <span class='post-date'><?php the_date(); ?></span>
                            <span class='categories'><?php the_category(', ');?></span>
                            </div>
                            <a href="<?php the_permalink();?>" class="read-more-button">Read More</a>
                        </div>
                    </div>
                    
                <?php endwhile; endif;// have_posts()?>    
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>