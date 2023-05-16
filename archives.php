<?php
    /*
     * Template Name: Archives
     */
    get_header();
    get_template_part('nav', 'blog');
?>

<main class="main">

    <!-- Page Header -->
    <div class="page-header text-center" style="background-image: url(<?php echo bloginfo('template_directory');?>/assets/images/phototour/archives-bg.jpg)">
        <div class="container">
            <h1 class="page-title">Archives<span>Surf my Blog</span></h1>
        </div>
    </div>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-4">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Archives</li>
            </ol>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">

            <!-- Masonry Container -->
            <div class="entry-container masonry max-col-3">

                <!-- Last Entries -->
                <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <div class="entry-body">
                            <h2 class="entry-title">
                                Last Entries
                            </h2>
                            <div class="entry-meta">
                                <ul class="list-post last-entries">
                                    <?php
                                        $args = array(
                                            'type'  => 'postbypost', // Devuelve los títulos de los post en lugar de las fechas
                                            'limit' => 15,           // Limita la salida a 15 post
                                        );
                                        wp_get_archives($args);
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!-- Last Reviews -->
                <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <div class="entry-body">
                            <h2 class="entry-title">
                                Last Reviews
                            </h2>
                            <div class="entry-meta">
                                <ul class="list-post last-reviews">
                                    <?php
                                        $args = array(
                                            'type'      => 'postbypost',   // Devuelve los títulos de los post en lugar de las fechas
                                            'limit'     => 15,             // Limita la salida a 15 post
                                            'post_type' => 'mpm_reviews',  // Solo queremos el custom-post-type
                                        );
                                        wp_get_archives($args);
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!-- Categories -->
                <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <div class="entry-body">
                            <h2 class="entry-title">
                                Categories
                            </h2>
                            <div class="entry-meta">
                                <ul class="list-post-count categories">
                                    <?php
                                        $my_categories = wp_list_categories('title_li=&show_count=1&echo=0&orderby=count&order=DESC&number=15');
                                        $my_categories =  preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="badge badge-pasific pull-right">\\1</span></a>', $my_categories);
                                        echo $my_categories;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!-- Tags -->
                <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <div class="entry-body">
                            <h2 class="entry-title">
                                Tags
                            </h2>
                            <div class="entry-meta">
                                <ul class="list-post-count tags">
                                    <?php
                                        get_list_tag(15);
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!-- Authors -->
                <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <div class="entry-body">
                            <h2 class="entry-title">
                                Authors
                            </h2>
                            <div class="entry-meta">
                                <ul class="list-post-count authors">
                                    <?php
                                        $args = array(
                                            'echo'        => false,         // No visualiza el listado de los autores, sino que nos lo devuelve para ser almacenado en una variable
                                            'hide_empty'  => false,         // Visualiza también los autores sin posts publicados
                                            'optioncount' => true,          // Visualiza el número de posts publicados por el autor
                                            'orderby'     => 'post_count',  // Ordena según el número de post publicados
                                            'order'       => 'DESC',        // Ordena de mayor a menor
                                            'number'      => 15,            // Limita la salida a 15 autores
                                        );
                                        $my_authors = wp_list_authors($args);
                                        $my_authors =  preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="badge badge-pasific pull-right">\\1</span></a>', $my_authors);
                                        echo $my_authors;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                
                <?php
                    // Primero conseguimos todos los autores
                    $args = array('display_name', 'ID');
                    $authors = get_users($args); // Devuelve una colección de objetos tipo autor
                    
                    // Creamos una ficha por cada autor
                    foreach($authors as $author) {
                ?>
                        <!-- Posts by Author -->
                        <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                            <article class="entry entry-grid text-center">
                                <div class="entry-body">
                                    <h2 class="entry-title">
                                        Post by <span class="main-color"><?php echo $author->display_name;?></span>
                                    </h2>
                                    <div class="entry-meta">
                                        <ul class="list-post last-entries">
                                            <?php
                                                $args = array(
                                                    'post_per_page' => 15,           // Mostramos como máximo 15
                                                    'author'        => $author->ID,  // Post que ha escrito ese autor
                                                );
                                                $posts_by_author = get_posts($args); // Almacenamos los objetos tipo post que ha escrito ese autor
                                                if(empty($posts_by_author)) {
                                                    echo "No posts published yet...";
                                                } else {
                                                    foreach($posts_by_author as $my_post) {
                                                        echo '<li><a href="'.get_permalink($my_post->ID).'">'.$my_post->post_title.'</a></li>';
                                                    }
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                <?php
                    }
                ?>
                
                <!-- Daily Archives -->
                <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <div class="entry-body">
                            <h2 class="entry-title">
                                Daily Archives
                            </h2>
                            <div class="entry-meta">
                                <ul class="list-post-count calendar">
                                    <?php
                                        $args = array(
                                            'type'            => 'daily',   // Fechas por dias
                                            'show_post_count' => true,      // Número de posts publicados ese día
                                            'limit'           => 15,        // Máximo 15 fechas
                                            'echo'            => false,
                                        );
                                        $daily = wp_get_archives($args);
                                        $spaces = wp_spaces_regexp();
                                        $daily =  preg_replace('/<\/a>'.$spaces.'\(([0-9]+)\)/', ' <span class="badge badge-pasific pull-right">\\1</span></a>', $daily);
                                        echo $daily;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!-- Monthly Archives -->
                <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <div class="entry-body">
                            <h2 class="entry-title">
                                Monthly Archives
                            </h2>
                            <div class="entry-meta">
                                <ul class="list-post-count calendar">
                                    <?php
                                        $args = array(
                                            'type'            => 'monthly',   // Fechas por mes
                                            'show_post_count' => true,        // Número de posts publicados ese mes
                                            'limit'           => 15,          // Máximo 15 fechas
                                            'echo'            => false,
                                        );
                                        $monthly = wp_get_archives($args);
                                        $spaces = wp_spaces_regexp();
                                        $monthly =  preg_replace('/<\/a>'.$spaces.'\(([0-9]+)\)/', ' <span class="badge badge-pasific pull-right">\\1</span></a>', $monthly);
                                        echo $monthly;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!-- Yearly Archives -->
                <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <div class="entry-body">
                            <h2 class="entry-title">
                                Yearly Archives
                            </h2>
                            <div class="entry-meta">
                                <ul class="list-post-count calendar">
                                    <?php
                                        $args = array(
                                            'type'            => 'yearly',   // Fechas por año
                                            'show_post_count' => true,       // Número de posts publicados ese año
                                            'limit'           => 15,         // Máximo 15 fechas
                                            'echo'            => false,
                                        );
                                        $yearly = wp_get_archives($args);
                                        $spaces = wp_spaces_regexp();
                                        $yearly =  preg_replace('/<\/a>'.$spaces.'\(([0-9]+)\)/', ' <span class="badge badge-pasific pull-right">\\1</span></a>', $yearly);
                                        echo $yearly;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!-- Most Commented Posts -->
                <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <div class="entry-body">
                            <h2 class="entry-title">
                                Most Commented Posts
                            </h2>
                            <div class="entry-meta">
                                <ul class="list-post-count commented">
                                    <?php
                                        $args = array (
                                            'post_per_page'  => 15,               // Limite de 15 post
                                            'orderby'        => 'comment_count',  // Ordenados según el número de post
                                            'order'          => 'DESC'            // Ordenados de más a menos
                                        );
                                        $most_commented = new WP_Query($args);
                                        if($most_commented->have_posts()):
                                            while($most_commented->have_posts()):
                                                $most_commented->the_post();
                                                echo '<li><a href="'.get_permalink($post->ID).'">'.$post->post_title.'<span class="badge pull-right">'.get_comments_number($post->ID).'</span></a></li>';
                                            endwhile;
                                        else:
                                            echo "No posts published yet...";
                                        endif;
                                        wp_reset_query();
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!-- Most Popular Posts -->
                <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                    <article class="entry entry-grid text-center">
                        <div class="entry-body">
                            <h2 class="entry-title">
                                Most Popular Posts
                            </h2>
                            <div class="entry-meta">
                                <ul class="list-post-count popular">
                                    <?php
                                        $args = array(
                                            'post_per_page' => 15,                // Mostramos como máximo 15
                                            'meta_key'      => 'numvisits',       // Meta campo que vamos a usar como criterio de búsqueda
                                            'orderby'       => 'meta_value_num',  // Ordenamos por el valor númerico que tenga ese campo
                                            'order'         => 'DESC',            // De más visitas a menos visitas
                                        );
                                        $popular = get_posts($args);
                                        if(empty($popular)) {
                                            echo "No posts published yet...";
                                        } else {
                                            foreach($popular as $my_post) {
                                                echo '<li><a href="'.get_permalink($my_post->ID).'">'.$my_post->post_title.'<span class="badge pull-right">'.$my_post->numvisits.'</span></a></li>';
                                            }
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    get_footer();
?>