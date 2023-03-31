<?php
    /* ································································································ THEME SUPPORT ·············*/

    add_theme_support('post-thumbnails');

    /* ································································································ THEME SCRIPTS ·············*/

    /*
     *  Add theme JS, jQuery scripts and style sheets
     *
     */
    function add_theme_scripts() {
        
        wp_register_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
        wp_enqueue_style('bootstrap-css');
        
        wp_register_style('carousel', get_template_directory_uri().'/assets/css/plugins/owl-carousel/owl.carousel.css' );
        wp_enqueue_style('carousel');
        
        wp_register_style('countdown', get_template_directory_uri().'/assets/css/plugins/jquery.countdown.css' );
        wp_enqueue_style('countdown');
       
        wp_register_style('popup', get_template_directory_uri().'/assets/css/plugins/magnific-popup/magnific-popup.css' );
        wp_enqueue_style('popup');
        
        wp_register_style('style-css', get_template_directory_uri().'/assets/css/style.css' );
        wp_enqueue_style('style-css');
        
        wp_register_style('skin-demo-24', get_template_directory_uri().'/assets/css/skins/skin-demo-24.css' );
        wp_enqueue_style('skin-demo-24');
        
        wp_register_style('demo-24', get_template_directory_uri().'/assets/css/demos/demo-24.css' );
        wp_enqueue_style('demo-24');
        
        wp_register_style('demo-6', get_template_directory_uri().'/assets/css/demos/demo-6.css' );
        wp_enqueue_style('demo-6');
        
        // Hoja principal del tema -> No hace falta registrarla, solo ponerla en la cola
        wp_enqueue_style('style', get_stylesheet_uri() );

        // Quitamos el jQuery de WP porque vamos a usar el que trae el tema
        wp_deregister_script('jquery');
        wp_register_script('jQuery',  get_template_directory_uri().'/assets/js/jquery.min.js');
        wp_enqueue_script('jQuery');
        
        wp_register_script('bootstrap-bundle',  get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', null, null, true);
        wp_enqueue_script('bootstrap-bundle');
    
        wp_register_script('hoverIntent',  get_template_directory_uri().'/assets/js/jquery.hoverIntent.min.js', null, null, true);
        wp_enqueue_script('hoverIntent');
    
        wp_register_script('waypoints',  get_template_directory_uri().'/assets/js/jquery.waypoints.min.js', null, null, true);
        wp_enqueue_script('waypoints');
        
        wp_register_script('superfish',  get_template_directory_uri().'/assets/js/superfish.min.js', null, null, true);
        wp_enqueue_script('superfish');
  
        wp_register_script('owl',  get_template_directory_uri().'/assets/js/owl.carousel.min.js', null, null, true);
        wp_enqueue_script('owl');
 
        wp_register_script('spinner',  get_template_directory_uri().'/assets/js/bootstrap-input-spinner.js', null, null, true);
        wp_enqueue_script('spinner');
   
        wp_register_script('plugin',  get_template_directory_uri().'/assets/js/jquery.plugin.min.js', array('jQuery'), null, true);
        wp_enqueue_script('plugin');
        
        wp_register_script('countdown-js',  get_template_directory_uri().'/assets/js/jquery.countdown.min.js', array('jQuery'), null, true);
        wp_enqueue_script('countdown-js');
        
        wp_register_script('popup',  get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jQuery'), null, true);
        wp_enqueue_script('popup');
        
        wp_register_script('main',  get_template_directory_uri().'/assets/js/main.js', null, null, true);
        wp_enqueue_script('main');
   
        wp_register_script('demo',  get_template_directory_uri().'/assets/js/demos/demo-24.js', null, null, true);
        wp_enqueue_script('demo');
    }
    add_action('wp_enqueue_scripts','add_theme_scripts');
    
    /* ································································································ POST ·············*/
    
    /**
     * Retrieve the post tags like a serie of links
     * @param $post_id Integer Post Id
     */
    function my_tags($post_id) {
        $myTags = get_the_tags($post_id);  // Me devuelve una colección de objetos tipo tags con los tags del post
        $result = '';
        if (!empty($myTags)) {
            foreach($myTags as $myTag) {
                $result .= '<a href="'.get_tag_link($myTag->term_id).'">'.$myTag->name.'</a>';
            }
        }
        return $result;
    }
    
    /**
     * Retrieve the post tags like a serie of links separated by commas
     * @param $post_id Integer Post Id
     */
    function my_tags_comma($post_id) {
        $myTags = get_the_tags($post_id);  // Me devuelve una colección de objetos tipo tags con los tags del post
        $result = '';
        if (!empty($myTags)) {
            foreach($myTags as $myTag) {
                $result .= '<a href="'.get_tag_link($myTag->term_id).'">'.$myTag->name.'</a> · ';
            }
        }
        return substr($result, 0, strlen($result)-3); // Quitamos el último chirimbolo y los dos espacios
    }
    
    /**
     * Customize excerpt length
     * @return Integer New excerpt length
     */
    function my_excerpt_length() {
        $newLength = 40;
        if (is_home() && !is_front_page()) {
            // Estoy en el blog
            $newLength = 20;
        }
        return $newLength;
    }
    add_filter('excerpt_length', 'my_excerpt_length');
    
    
    /* ································································································ SIDEBAR ·············*/
    
    function register_widget_zones() {
        register_sidebar(
            array(
                'name'          => 'TagCloud Widget',
                'id'            => 'tag-cloud',
                'description'   => 'Sidebar TagCloud Widget Zone',
                'before_widget' => '<div class="tag-cloud">',
                'after_widget'  => '</div>',
            )    
        );
        register_sidebar(
            array(
                'name'          => 'Calendar Widget',
                'id'            => 'calendar',
                'description'   => 'Sidebar Calendar Widget Zone',
                'before_widget' => '<div class="calendar">',
                'after_widget'  => '</div>',
            )    
        );
    }
    add_action('widgets_init', 'register_widget_zones');