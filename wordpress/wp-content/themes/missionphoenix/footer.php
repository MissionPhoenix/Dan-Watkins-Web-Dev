<?php wp_footer();?>

</body>
<footer>
    <div class="container">
        <?php wp_nav_menu(
            
            array( 
                'theme_location' => 'footer-menu',
                'menu_class' => 'navigation'
            )
        )
        ?>
    </div>
</footer>
</html>