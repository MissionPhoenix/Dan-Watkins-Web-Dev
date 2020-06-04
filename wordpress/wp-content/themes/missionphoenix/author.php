<?php get_header();?>

<div class="container page">
    <?php $dans_profile = get_post(60); ?>
    <h1 id="profile-title"><?php echo $dans_profile->post_title;?></h1>
    <?php echo $dans_profile->post_content;?>
</div>

<?php get_footer();?>