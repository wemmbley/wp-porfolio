<?php

namespace Portfolio\App\Assets;

class Assets
{

    private $assets_folder;

    public function __construct()
    {
        $this->assets_folder = get_stylesheet_directory_uri() . '/assets/';

        add_action( 'wp_enqueue_scripts', [ $this, 'deregister_asset' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'include_assets' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'include_scripts' ] );
    }

    public function include_assets()
    {
        wp_enqueue_style( 'linearicons', $this->assets_folder . 'css/linearicons.css', [], $this->theme_version() );
        wp_enqueue_style( 'font-awesome', $this->assets_folder . 'css/font-awesome.min.css', [], $this->theme_version() );
        wp_enqueue_style( 'bootstrap', $this->assets_folder . 'css/bootstrap.css', [], $this->theme_version() );
        wp_enqueue_style( 'magnific-popup', $this->assets_folder . 'css/magnific-popup.css', [], $this->theme_version() );
        wp_enqueue_style( 'jquery-ui', $this->assets_folder . 'css/jquery-ui.css', [], $this->theme_version() );
        wp_enqueue_style( 'nice-select', $this->assets_folder . 'css/nice-select.css', [], $this->theme_version() );
        wp_enqueue_style( 'animate', $this->assets_folder . 'css/animate.min.css', [], $this->theme_version() );
        wp_enqueue_style( 'owl', $this->assets_folder . 'css/owl.carousel.css', [], $this->theme_version() );
        wp_enqueue_style( 'main', $this->assets_folder . 'css/main.css', [], $this->theme_version() );
    }

    public function include_scripts()
    {
        wp_enqueue_script( 'jquery', $this->assets_folder . 'js/vendor/jquery-2.2.4.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'popper', $this->assets_folder . 'js/popper.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'bootstrap', $this->assets_folder . 'js/vendor/bootstrap.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'gmaps', $this->assets_folder . 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA', [], $this->theme_version(), true );
        wp_enqueue_script( 'easing', $this->assets_folder . 'js/easing.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'hover', $this->assets_folder . 'js/hoverIntent.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'superfish', $this->assets_folder . 'js/superfish.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'ajaxchimp', $this->assets_folder . 'js/jquery.ajaxchimp.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'magnific', $this->assets_folder . 'js/jquery.magnific-popup.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'tabs', $this->assets_folder . 'js/jquery.tabs.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'nice', $this->assets_folder . 'js/jquery.nice-select.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'isotope', $this->assets_folder . 'js/isotope.pkgd.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'waypoints', $this->assets_folder . 'js/waypoints.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'counterup', $this->assets_folder . 'js/jquery.counterup.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'skillbar', $this->assets_folder . 'js/simple-skillbar.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'carousel', $this->assets_folder . 'js/owl.carousel.min.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'mail', $this->assets_folder . 'js/mail-script.js', [], $this->theme_version(), true );
        wp_enqueue_script( 'main', $this->assets_folder . 'js/main.js', [], $this->theme_version(), true );
    }

    public function deregister_asset()
    {
        wp_deregister_script( 'jquery' );
    }

    private function theme_version()
    {
        $theme_data = wp_get_theme();

        return $theme_data->version;
    }

}