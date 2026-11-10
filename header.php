<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ) ?></title>
    <?php wp_head(); ?>
</head>
    
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

<header class= 'site-header'>
    <div class= 'site-branding'>

        <p><?php bloginfo('name'); ?></p>
        <p><?php bloginfo('description'); ?></p> 


    </div>
        <?php wp_nav_menu([
            'theme_location' => 'hauptmenue',
            'container' => 'nav',
            'container_class' => 'site-navigation',
            'container_aria_label' => 'Hauptnavigation',
            'fallback_cb' => false,
        ]); ?>
</header>