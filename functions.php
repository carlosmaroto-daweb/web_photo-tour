<?php
    /* ································································································ THEME SUPPORT ·············*/

    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('video', 'audio'));

    /*
     *  Enable Frontend Dashicons
     */
    function enable_frontend_dashicons() {
        wp_enqueue_style('dashicons');
    }
    add_action( 'wp_enqueue_scripts', 'enable_frontend_dashicons' );

    /* ································································································ THEME SCRIPTS ·············*/

    /*
     *  Add theme JS, jQuery scripts and style sheets
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
 
        // Indispensables para el masonry funcione correctamente
        wp_register_script('imagesloaded',  get_template_directory_uri().'/assets/js/imagesloaded.pkgd.min.js', null, null, true);
        wp_enqueue_script('imagesloaded');
 
        wp_register_script('isotope',  get_template_directory_uri().'/assets/js/isotope.pkgd.min.js', null, null, true);
        wp_enqueue_script('isotope');
 
        // Indispensable para que las skill del author funcionen correctamente
        wp_register_script('countTo',  get_template_directory_uri().'/assets/js/jquery.countTo.js', array('jQuery'), null, true);
        wp_enqueue_script('countTo');
    }
    add_action('wp_enqueue_scripts','add_theme_scripts');
    
    /*
     *  Add admin area JS
     */
    function add_admin_scripts(){
        wp_register_script('uploadPreview',  get_template_directory_uri().'/assets/js/uploadPreview.js', null, null, true);
        wp_enqueue_script('uploadPreview');
    }
    add_action('admin_enqueue_scripts', 'add_admin_scripts');
    
    /* ································································································ POST ·············*/
    
    /**
     * Returns the page object given its name
     * @param $title Title Post
     * @return Object Page
     */
    function get_page_object($title) {
        $query = new WP_Query(
            array(
                'post_type'              => 'page',
                'title'                  =>  $title,
                'post_status'            => 'all',
                'posts_per_page'         => 1,
                'no_found_rows'          => true,
                'ignore_sticky_posts'    => true,
                'update_post_term_cache' => false,
                'update_post_meta_cache' => false,
                'orderby'                => 'post_date ID',
                'order'                  => 'ASC',
            )
        );
 
        if ( ! empty( $query->post ) ) {
            $page = $query->post;
        } else {
            $page  = null;
        }
        return $page;
    }

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
    
    // CONTADOR DE VISITAS
    
    /**
     * Retrieve the number of visits of a post
     * @param int post_id
     * @return string number of visit
     */
    function get_num_visits($post_id) {
        $numvisits = get_post_meta($post_id, 'numvisits', true);
        if(!$numvisits) {
            $numvisits = 0;
        }
        if($numvisits == 1) {
            return $numvisits.' visit';
        } else {
            return $numvisits.' visits';
        }
    }
    
    /**
     * Add 1 to post visit counter
     * @param int post_id
     */
    function add_num_visits($post_id) {
        $numvisits = get_post_meta($post_id, 'numvisits', true);
        if ($numvisits == 0){ // El contador aún no existe, hay que crearlo
            add_post_meta($post_id, 'numvisits', true);
        } else { // El contador ya existe, tenemos que incrementarlo en 1
            $numvisits++;
            update_post_meta($post_id, 'numvisits', $numvisits);
        }
    }
    
    /* ································································································ SIDEBAR ·············*/
    
    /*
     *  Register Widget Zones
     */
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
    
    /* ································································································ COMMENTS ·············*/
    
    /**
     * Delete url field from comments form
     * @param $fields array List of comment form fields -> nos la proveee el hook comment_form_default_fields
     */
    function delete_url_from_comment_form($fields) {
        unset($fields['url']); // Quitamos el campo url del array con los campos del formulario de comentarios
        return $fields;
    }
    add_action('comment_form_default_fields', 'delete_url_from_comment_form');
    
    /**
     * Re-order comments form field
     * @param $fields array List of comment form fields -> nos la proveee el hook comment_form_fields
     *                                                                            No podemos usar comment_form_default_fields porque no
     *                                                                            nos ordenaría al manejar este hook los campos por defecto
     */
    function reorder_comment_form_fields($fields) {
        // Si el usuario no está logeado tenemos campos nombre y email
        if(!is_user_logged_in()) {
            $aux = array();
            array_push($aux, $fields['author']);
            array_push($aux, $fields['email']);
            array_push($aux, $fields['comment']);
            array_push($aux, $fields['cookies']);
            array_push($aux, $fields['consent']);
            return $aux;
        }
        else {
            return $fields;
        }
    }
    add_action('comment_form_fields', 'reorder_comment_form_fields');
    
    /**
     * Add comment field for privacy policy consent
     * @param $fields array List of comment form fields -> nos la proveee el hook comment_form_default_fields
     */
    function add_comment_consent($fields) {
        $fields['consent'] = '
        <p class="comment-form-public"><input type="checkbox" name="consent" id="consent" required="required">
            <label for="consent"> Check this box to give us permission to publicly post your comment
                                  (I accept the <a href="'.get_page_link(get_page_object('Privacy Policy')->ID).'">Privacy Policy</a>)
            </label>
        </p>';
        return $fields;
    }
    add_action('comment_form_default_fields', 'add_comment_consent');
    
    /**
     * Save privacy policy consent in data base
     * @param $comment_id -> Nos lo da el action hook comment_post
     */
    function save_comment_consent($comment_id) {
        $consent_value = $_POST['consent'];
        if($consent_value) {
            $valor = "Consent checkbox checked. I accept the privacy policy.";
        } else {
            if(is_user_logged_in()) {
            $valor = "Logged user. I accept the privacy policy.";
            } else {
            $valor = "Consent checkbox not checked. I do NOT accept the privacy policy.";
            }
        }
        // Vamos a crear un metadato nuevo para el comentario
        add_comment_meta($comment_id, 'consent', $valor, true);
    }
    add_action('comment_post', 'save_comment_consent');
    
    /**
     * Create a new column Consent in the back-end comments area
     * @param array $columns Comment Area Colums -> Nos lo provee el filter hook manage_edit-comments_columns
     */
    function create_consent_column($columns) {
        // Modificamos el array $columns para incorporar el nuevo campo de consentimiento
        $columns = array(
            'cb'       => '<input type="checkbox">',
            'author'   => 'Author',
            'comment'  => 'Comment',
            'consent'  => 'Consent',
            'response' => 'Response to',
            'date'     => 'Submitted on',
        );
        return $columns;
    }
    add_filter('manage_edit-comments_columns', 'create_consent_column');
    
    /**
     * Display conset in the new comments area column
     * @param string $column      Comment Area column name
     * @param string $comment_id  Comment ID
     */
    function display_column_consent($column, $comment_id) {
        if($column == 'consent') {
            echo get_comment_meta($comment_id, 'consent', true);
        }
    }
    // Las funciones asociadas a un hook tienen por defecto un parámetro, por lo que se le debe añadir dos parámetros, la prioridad y el número de argumentos
    add_action('manage_comments_custom_column', 'display_column_consent', 1, 2);
    
    /* ································································································ ARCHIVES ·············*/
    
    /**
     * 
     * @param $limit integer 
     * @return the posts tags list like html <li> tag
     */
    function get_list_tag($limit) {
        $args = array(
            'number'   => $limit,   // Como máximo se visualiza $limit tags
            'orderby' => 'count',  // Ordena según el número de post de cada tag
            'order'    => 'DESC',   // De más posts a menos posts
        );
        $tags = get_tags($args); // Devuelve una colección de objetos tipo tags con todos los tags del BLOG
        if(empty($tags)) {
            echo "No tags published yet...";
        } else {
            foreach($tags as $tag) {
                echo '<li><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'<span class="badge pull-right">'.$tag->count.'</span></a></li>';
            }
        }
    }
    
    /* ································································································ AUTHOR ·············*/
    
    /**
     * Get the author role with a given author_id
     * @param int $author_id author id 
     */
    function get_author_role($author_id) {
        $my_user = get_userdata($author_id);   // Obtenemos todos los datos del perfil del autor
        $roles = $my_user->roles;              // Devuelve un array con los roles del autor
        return implode(', ', $roles);          // Devolvemos los roles del autor como un string separados por comas
    }
    
    /**
     * Add social media fields & profile pic URL to user profile
     * @param $user_methods   User profile fields
     * @return $user_methods  User profile fields
     */
    function social_media($user_methods) {
        $user_methods['facebook']  = 'Facebook:';
        $user_methods['instagram'] = 'Instagram:';
        $user_methods['linknd']    = 'Linknd:';
        return $user_methods;
    }
    add_action('user_contactmethods', 'social_media');
    
    /**
     * Add skills & profile pic fields in user profile
     * @param $user user object  
     */
    function add_user_extra_information($user) {
        // Dibujar los campos extra con etiquetas html
        $profile_pic_url = get_user_meta($user->ID, 'user_pic', true);
        if(empty($profile_pic_url)) {
            // No hay foto de perfil
            $src = get_template_directory_uri().'/assets/images/phototour/cloud.png';
        } else {
            // Si hay foto de perfil
            $src = $profile_pic_url;
        }
        ?>
            <h3>User profile extra information</h3>
            <div class="flex-profile-pic">
                <div class="flex-group">
                    <img src="<?php echo $src;?>" id="previewImg" height="200">
                    <?php echo '<br/>'.$src.'<br/>';?>
                </div>
                <div class="flex-serverimg">
                    <input type="file" name="user_pic" id="user_pic">
                </div>
            </div>
        <?php
    }
    // Los nuevos campos deben aparecer tanto cuando vea el perfil como cuando lo edite
    add_action('show_user_profile', 'add_user_extra_information');
    add_action('edit_user_profile', 'add_user_extra_information');
    
    /**
     * Hacemos que el form del user profile tenga atributo enctype 
     */
    function add_entype_user_form() {
        echo 'enctype="multipart/form-data"';
    }
    add_action('user_edit_form_tag', 'add_entype_user_form');
    
    /**
     * Save profile pic & skills fields values in user profile
     * @param $user_id user object  
     */
    function save_extra_user_information($user_id) {
        $user = get_userdata($user_id);  // Obtengo la informacion del usuario
        $username = $user->user_login;   // Obtengo el nombre con el que hace login el usuario para asegurarme que es unico
        // Comprobar que el archivo se ha subido correctamente
        if($_FILES['user_pic']['error'] == UPLOAD_ERR_OK) {
            $upload_dir = wp_upload_dir();  // Obtenemos el directorio para subidas de archivo de WP - NO ACABA EN /
            $subdir = '/team/';             // Porción de la ruta que apunta a la carpeta donde hay que subir los archivos de la imagen del lugar
            $upload_path = $upload_dir['basedir'].$subdir;
            if(!is_dir($upload_path) && !mkdir($upload_path)) {
                $myerror = '<br/>Error creating folder: '.$upload_path.'<br/>';
                update_user_meta($user_id, 'user_pic', $myerror);
            }
            else {
                $file_name = $username.'-'.$_FILES['user_pic']['name'];
                $origen = $_FILES['user_pic']['tmp_name'];
                $destino = $upload_path.$file_name;
                $url_image = $upload_dir['baseurl'].$subdir.$file_name;
                if(move_uploaded_file($origen, $destino)) {
                    // El archivo se ha movido a nuestra carpeta /upload/team correctamente
                    // Guardamos en el meta campo la url del archivo
                    update_user_meta($user_id, 'user_pic', $url_image);
                } else {
                    // En caso contrario por alguna razón el archivo no se ha podido mover
                    // Guardamos en el meta campo el error o podemos no grabar nada
                    $myerror = '<br/>Error save file: '.$_FILES['user_pic']['name'].'<br/>';
                    update_user_meta($user_id, 'user_pic', $myerror);
                }
            }
        } else if($_FILES['user_pic']['error'] != UPLOAD_ERR_NO_FILE){
            $myerror = '<br/>Error file upload<br/>';
            update_user_meta($user_id, 'user_pic', $myerror);
        }
    }
    add_action('personal_options_update', 'save_extra_user_information');
    add_action('edit_user_profile_update', 'save_extra_user_information');
    
    /*
    *   Add skill fields in user profile
    *   @param  $user user object Nos lo proveen dos hooks ('show_user_profile' y 'edit_user_profile')
    */
    function add_skills_fields($user) {
        // Añadimos las skills como campos de formulario con etiquetas HTML
        ?>
            <h3>User Skills information</h3>
            <table class="form-table">
                <tr>
                    <th><label for="skill1">Skill 1 Description</label></th>
                    <td>
                        <input type="text" name="skill1" id="skill1" value="<?php echo esc_attr(get_the_author_meta('skill1', $user->ID)); ?>">
                    </td>
                    <th><label for="skill1V">Skill 1 Value</label></th>
                    <td>
                        <input type="text" name="skill1V" id="skill1V" value="<?php echo esc_attr(get_the_author_meta('skill1V', $user->ID)); ?>">
                    </td>
                </tr>
                <tr>
                    <th><label for="skill2">Skill 2 Description</label></th>
                    <td>
                        <input type="text" name="skill2" id="skill2" value="<?php echo esc_attr(get_the_author_meta('skill2', $user->ID)); ?>">
                    </td>
                    <th><label for="skill2V">Skill 2 Value</label></th>
                    <td>
                        <input type="text" name="skill2V" id="skill2V" value="<?php echo esc_attr(get_the_author_meta('skill2V', $user->ID)); ?>">
                    </td>
                </tr>
                <tr>
                    <th><label for="skill3">Skill 3 Description</label></th>
                    <td>
                        <input type="text" name="skill3" id="skill3" value="<?php echo esc_attr(get_the_author_meta('skill3', $user->ID)); ?>">
                    </td>
                    <th><label for="skill3V">Skill 3 Value</label></th>
                    <td>
                        <input type="text" name="skill3V" id="skill3V" value="<?php echo esc_attr(get_the_author_meta('skill3V', $user->ID)); ?>">
                    </td>
                </tr>
                <tr>
                    <th><label for="skill4">Skill 4 Description</label></th>
                    <td>
                        <input type="text" name="skill4" id="skill4" value="<?php echo esc_attr(get_the_author_meta('skill4', $user->ID)); ?>">
                    </td>
                    <th><label for="skill4V">Skill 4 Value</label></th>
                    <td>
                        <input type="text" name="skill4V" id="skill4V" value="<?php echo esc_attr(get_the_author_meta('skill4V', $user->ID)); ?>">
                    </td>
                </tr>
            </table>
        <?php
    }
    add_action('show_user_profile', 'add_skills_fields');
    add_action('edit_user_profile', 'add_skills_fields');
    
    /*
    *   Save skills fields values in user profile
    *   @param  $user user object Nos lo proveen dos hooks ('personal_options_update' y 'edit_user_profile_update')
    */
    function save_skills_fields( $user_id) {
        update_user_meta($user_id, 'skill1', $_POST['skill1']);
        update_user_meta($user_id, 'skill1V', $_POST['skill1V']);
        
        update_user_meta($user_id, 'skill2', $_POST['skill2']);
        update_user_meta($user_id, 'skill2V', $_POST['skill2V']);
        
        update_user_meta($user_id, 'skill3', $_POST['skill3']);
        update_user_meta($user_id, 'skill3V', $_POST['skill3V']);
        
        update_user_meta($user_id, 'skill4', $_POST['skill4']);
        update_user_meta($user_id, 'skill4V', $_POST['skill4V']);
    }
    add_action('personal_options_update', 'save_skills_fields');
    add_action('edit_user_profile_update', 'save_skills_fields');
    
    /* ································································································ LOGIN FORM ·············*/
    
    /**
     * Change login template logo
     */
    function change_login_logo() {
        ?>
            <style>
                #login h1 a, .login h1 a {
                    background-image: url("<?php echo bloginfo('template_directory');?>/assets/images/phototour/logo.png");
                    width: 300px;
                    height: 140px;
                    background-size: contain;
                    background-position: center center;
                    background-repeat: no-repeat;
                }
                
                .login {
                    background-image: url("<?php echo bloginfo('template_directory');?>/assets/images/phototour/background-private.jpg");
                    background-size: cover;
                    background-position: center center;
                    background-repeat: no-repeat;
                }
            </style>
        <?php
    }
    add_action('login_enqueue_scripts', 'change_login_logo');
    
    /**
     * Redirect login logo url
     */
    function redirect_logo() {
        return home_url('/');
    }
    add_filter('login_headerurl', 'redirect_logo');
    
    /**
     * Change login error message
     */
    function change_login_error_message() {
        return 'Ooooops! You must enter a valid username and password...';
    }
    add_filter('login_errors', 'change_login_error_message');