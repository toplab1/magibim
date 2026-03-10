<?php
function magibim_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'magibim' ),
        )
    );
}
add_action( 'after_setup_theme', 'magibim_theme_setup' );

function magibim_enqueue_assets() {
    $theme_uri = get_template_directory_uri();

    wp_enqueue_style( 'magibim-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sofia+Sans+Semi+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap', array(), null );
    wp_enqueue_style( 'magibim-icomoon', $theme_uri . '/fonts/icomoon/style.css', array(), null );
    wp_enqueue_style( 'magibim-bootstrap', $theme_uri . '/css/bootstrap.min.css', array(), null );
    wp_enqueue_style( 'magibim-magnific-popup', $theme_uri . '/css/magnific-popup.css', array(), null );
    wp_enqueue_style( 'magibim-jquery-ui', $theme_uri . '/css/jquery-ui.css', array(), null );
    wp_enqueue_style( 'magibim-owl-carousel', $theme_uri . '/css/owl.carousel.min.css', array(), null );
    wp_enqueue_style( 'magibim-owl-theme', $theme_uri . '/css/owl.theme.default.min.css', array(), null );
    wp_enqueue_style( 'magibim-bootstrap-datepicker', $theme_uri . '/css/bootstrap-datepicker.css', array(), null );
    wp_enqueue_style( 'magibim-animate', $theme_uri . '/css/animate.css', array(), null );
    wp_enqueue_style( 'magibim-mediaelement', 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css', array(), null );
    wp_enqueue_style( 'magibim-flaticon', $theme_uri . '/fonts/flaticon/font/flaticon.css', array(), null );
    wp_enqueue_style( 'magibim-aos', $theme_uri . '/css/aos.css', array(), null );
    wp_enqueue_style( 'magibim-style', $theme_uri . '/css/style.css', array(), null );
    wp_enqueue_style( 'magibim-theme-style', get_stylesheet_uri(), array( 'magibim-style' ), null );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'magibim-jquery-migrate', $theme_uri . '/js/jquery-migrate-3.0.1.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'magibim-jquery-ui', $theme_uri . '/js/jquery-ui.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'magibim-popper', $theme_uri . '/js/popper.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'magibim-bootstrap', $theme_uri . '/js/bootstrap.min.js', array( 'jquery', 'magibim-popper' ), null, true );
    wp_enqueue_script( 'magibim-owl-carousel', $theme_uri . '/js/owl.carousel.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'magibim-stellar', $theme_uri . '/js/jquery.stellar.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'magibim-countdown', $theme_uri . '/js/jquery.countdown.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'magibim-magnific-popup', $theme_uri . '/js/jquery.magnific-popup.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'magibim-bootstrap-datepicker', $theme_uri . '/js/bootstrap-datepicker.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'magibim-aos', $theme_uri . '/js/aos.js', array(), null, true );
    wp_enqueue_script( 'magibim-main', $theme_uri . '/js/main.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'magibim_enqueue_assets' );
