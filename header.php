<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="navbar">
        <!-- Lien avec le logo en arrière-plan -->
        <a href="<?php echo home_url(); ?>" class="logo" aria-label="Accueil"></a>
        <div class="menu-items">
            <a href="<?php echo home_url('/nous-rencontrer'); ?>">Nous rencontrer</a>
            <?php if ( is_user_logged_in() ) : ?>
                    <a href="<?php echo esc_url(admin_url()); ?>">Admin</a>
                <?php endif; ?>
            <a href="<?php echo home_url('/commander'); ?>" class="btn-commander">Commander</a>
        </div>
    </div>
</header>
<?php wp_footer(); ?>
</body>
</html>

