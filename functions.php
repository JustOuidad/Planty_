<?php
// Action pour charger les scripts et styles
function theme_enqueue_styles() {
    // Chargement du style.css du thème parent Blankslate
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour la personnalisation
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));

    // Enregistrement du menu de navigation
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'theme-text-domain'),
    ));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Fonction pour ajouter le script du menu burger
function custom_theme_scripts() {
    // Enregistrer jQuery si ce n'est pas déjà fait
    wp_enqueue_script('jquery');

    // JavaScript pour le menu burger
    $inline_js = "
    document.addEventListener('DOMContentLoaded', function() {
        var toggleButton = document.querySelector('.menu-toggle');
        var menuItems = document.querySelector('.menu-items');

        toggleButton.addEventListener('click', function() {
            menuItems.classList.toggle('active');
        });
    });
    ";
    wp_add_inline_script('jquery', $inline_js);
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

// Fonction pour cacher l'image dans le footer sur la page de commande
function hide_footer_photo_on_commander_page() {
    if (is_page('commander')) { // Remplacez 'commander' par le slug de votre page
        echo '<style>.footer-image { display: none; }</style>';
    }
}
add_action('wp_head', 'hide_footer_photo_on_commander_page');

// Fonction pour cacher le menu admin si l'utilisateur n'est pas connecté
function hide_admin_menu_if_user_not_logged_in() {
    if (!is_user_logged_in()) {
        wp_die('Vous devez être connecté pour accéder à cette page.');
    }
}
add_action('admin_init', 'hide_admin_menu_if_user_not_logged_in');
?>
