<?php

if (!function_exists('oSailing_setup')):

    function oSailing_setup() {

        // Je declare à WP que mon thème supporte la fonctionnalité "title-tag"
        // WP va donc générer lui-même la balise title dans mon <head>
        add_theme_support('title-tag');

        // Je declare à WP que mon thème supporte la fonctionnalité "post-thumbnails"
        // WP va donc me laisser ajouter des images de mise en avant dans mes contenus
        add_theme_support('post-thumbnails');

        // Lorsque je déclare la fonctionnalité "post-thumbnails" une nouvelle taille d'image est créé
        // Je souhaite lui définir une taille précise: 500 x 500 et j'autorise le "crop" (= la découpe)
        // par le centre de l'image
        set_post_thumbnail_size(500, 500, ['center', 'center']);

        // J'ajoute une nouvelle taille d'image qui porte le nom "post-thumbnails-tiny"
        // elle fait 75px par 75px
        // celle ci sera découpée en haut à gauche de l'image d'origine
        add_image_size('post-thumbnails-tiny', 75, 75, ['top', 'left']);

        // Je déclare à WP que mon thème supporte la gestion des menus
        add_theme_support('menus');

        // Je déclare mes différents menus
        // Astuce: un register_nav_menus "induit" un "add_theme_support('menus');"
       
    }

endif;

add_action('after_setup_theme', 'oSailing_setup');