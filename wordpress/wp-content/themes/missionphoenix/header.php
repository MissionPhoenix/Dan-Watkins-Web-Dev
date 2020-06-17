<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>

            <?php wp_head();?>
    </head>


<body <?php body_class(); ?>>

<header>
    <div class="container header-container">
        <?php wp_nav_menu(
            
            array( 
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation'
            )
        )
        ?>
    </div>
</header>