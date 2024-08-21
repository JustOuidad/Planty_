
<?php
// Action pour charger les scripts et styles
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    // Chargement du style.css du thème parent Blankslate
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour la personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));

    // Enregistrer le menu de navigation
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'theme-text-domain'),
    ));
    function hide_footer_photo_on_commander_page() {
        // Vérifie si nous sommes sur la page de commande
        if (is_page('commander')) { // Remplacez 'commande' par l'ID ou le slug de votre page
            ?>
            <style>
                /* Cacher la photo dans le footer */
                .footer-image { /* Remplacez .footer-photo par la classe ou l'ID de votre photo */
                    display: none;
                }
            </style>
            <?php
        }
    }
    add_action('wp_head', 'hide_footer_photo_on_commander_page');
    function hide_admin_menu_if_user_not_logged_in() {
        if ( !is_user_logged_in() ) {
            // Utiliser wp_die pour arrêter le chargement de l'admin
            wp_die('Vous devez être connecté pour accéder à cette page.');
        }
    }
    add_action('admin_init', 'hide_admin_menu_if_user_not_logged_in');
    
}
