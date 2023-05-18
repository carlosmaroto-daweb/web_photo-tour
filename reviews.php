<?php
    /*
     * Template Name: Reviews
     */
    get_header();
    get_template_part('nav', 'blog');
?>

<main class="main">

    <!-- Page Header -->
    <div class="page-header text-center" style="background-image: url('<?php echo bloginfo('template_directory');?>/assets/images/phototour/reviews-bg.jpeg')">
        <div class="container">
            <h1 class="page-title">Surf my Reviews<span>Latest Posts</span></h1>
        </div>
    </div>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-5">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reviews</li>
            </ol>
        </div>
    </nav>

    <!-- Last entries -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h3>Last entries...</h3>
                    
                    <!-- Aquí comienza el bucle-->
                    <?php
                        $args = array(
                            'posts_per_page' => 5,                                                     // Queremos 5 post por página
                            'post_type'      => array('mpm_reviews'),                                  // Solo queremos el custom-post-type
                            'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,   // Indicamos en qué página estamos
                        );
                        $latest_posts = new WP_Query($args);
                        
                        // Pagination fix
                        $temp_query = $wp_query;
                        $wp_query = NULL;
                        $wp_query = $latest_posts;
                        
                        if($latest_posts->have_posts()):
                            while($latest_posts->have_posts()):
                                $latest_posts->the_post();
                                /* Si tengo una imagen representativa la visualizo y si no muestro una imagen por defecto */
                                if(has_post_thumbnail()) { // Esta función devuelve true si hay una imagen representativa
                                    // Recupero la imagen representativa
                                    $PostImg = get_the_post_thumbnail_url();
                                } else {
                                    $PostImg = get_template_directory_uri().'/assets/images/phototour/default.jpg';
                                }
                    ?>
                                <!-- Article -->
                                <article class="entry">
                                    <figure class="entry-media">
                                        <a href="<?php the_permalink();?>">
                                            <img src="<?php echo $PostImg;?>" alt="<?php the_title();?>">
                                        </a>
                                    </figure>
                                    <div class="entry-body">
                                        <div class="entry-meta">
                                            <span class="entry-author">
                                                by <?php the_author_posts_link();?>
                                            </span>
                                            <span class="meta-separator">|</span>
                                            <?php the_time('j, M Y');?>
                                            <span class="meta-separator">|</span>
                                            <?php comments_number('No comments', 'One comment', '% comments');?>
                                            <span class="meta-separator">|</span>
                                            <?php echo get_num_visits($post->ID);?>
                                        </div>
                                        <br/>
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                        </h2>
                                        <div class="entry-cats">
                                            in <?php the_category(' & ');?>
                                        </div>
                                        <?php
                                            // Aqui tiene que mostrar los custom fields el shortcode
                                            do_shortcode('[mpm_show_main_fields id="'.$post->ID.'"]');
                                        ?>
                                        <div class="entry-content">
                                            <p><?php the_excerpt();?></p>
                                            <div class="link-button mt-4">
                                                <a href="<?php the_permalink();?>">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                    <!-- Aquí termina el bucle-->
                    <?php
                            endwhile;
                            
                            wp_reset_postdata();
    
                            // Page Navigation
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Prev', 'your-theme' ),
                                'next_text'          => __( 'Next', 'your-theme' ),
                                'mid_size'           => 3,
                                'end_size'           => 2,
                            ) );
    
                            // Reset main query object
                            $wp_query = NULL;
                            $wp_query = $temp_query;
                        else:
                            echo 'No posts published yet...';
                        endif;
                        
                        wp_reset_query();
                    ?>
                </div>

                <!-- Sidebar -->
                <aside class="col-lg-3">
                    <?php
                        get_sidebar();
                    ?>
                </aside>
            </div>
        </div>
    </div>
</main>

<?php
    get_footer();
?>