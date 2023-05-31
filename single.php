<?php
	get_header();
	the_post();
	$post_id = $post->ID;
	$cats = wp_get_post_categories($post_id); // Devuelve un array con las categorias del post
	/* Si tengo una imagen representativa la visualizo y si no muestro una imagen por defecto */
    if(has_post_thumbnail()) { // Esta función devuelve true si hay una imagen representativa
        // Recupero la imagen representativa
        $PostImg = get_the_post_thumbnail_url();
    } else {
        $PostImg = get_template_directory_uri().'/assets/images/phototour/default.jpg';
    }
    add_num_visits($post_id);
	get_template_part('nav', 'blog');
?>

<main class="main">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo get_page_link(get_page_object('Blog')->ID);?>">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
            </ol>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="page-content">
        <div class="entry-media single-thumb" style="background-image:url(<?php echo $PostImg;?>)"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">

                    <!-- Article -->
                    <article class="entry single-entry">
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
                                <?php echo get_num_visits($post_id);?>
                            </div>
                            <br/>
                            <h2 class="entry-title entry-title-big">
                                <?php the_title();?>
                            </h2>
                            <div class="entry-cats">
                                in <?php the_category(' & ');?>
                            </div>
                            <div class="entry-content editor-content">
                                <p><?php the_content();?></p>
                            </div>
                            <div class="entry-footer row no-gutters flex-column flex-md-row">
                                <div class="col-md">
                                    <div class="entry-tags">
                                        <span>Tags:</span> <?php echo my_tags($post_id);?>
                                    </div>
                                </div>
                                <div class="col-md-auto mt-2 mt-md-0">
                                </div>
                            </div>
                        </div>
                        <?php
                            // Halla la URl del avatar asociado a la cuenta de email
                            $avatar = get_avatar_url(get_the_author_meta('email'), array('size' => 50));
                        ?>
                        <div class="entry-author-details">
                            <figure class="author-media">
                                <img src="<?php echo $avatar;?>" alt="<?php echo get_the_author()?>">
                            </figure>
                            <div class="author-body">
                                <div class="author-header row no-gutters flex-column flex-md-row">
                                    <div class="col">
                                        <h4><?php the_author_posts_link();?></h4>
                                    </div>
                                </div>
                                <div class="author-content">
                                    <p><?php echo get_the_author_meta('description');?></p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Related Posts -->
                    <div class="related-posts">
                        <h3 class="title">Related Posts</h3>
                        <div class="owl-carousel owl-simple" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":1
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    }
                                }
                            }'>
                            
                            <!-- Aquí comienza el bucle-->
                            <?php
                                $args = array(
                                    'posts_per_page' => 5,                // Queremos 5 post por página
                                    'category__in'   => $cats,            // Incluimos los posts que compartan categoria con el post que estamos viendo
                                    'post__not_in'   => array($post_id),  // Excluimos el post que estamos viendo
                                    // Excluimos los post format (audio y video) del bucle
                                    // Para ello hay que acceder a la taxonomía de WP
                                    // Y crear una consulta con tax_query
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'post_format',  // Especificamos el concepto de búsqueda
                                            'field'    => 'slug',         // El campo del filtro será el slug
                                            'terms'    => array(
                                                'post-format-video',
                                                'post-format-audio',
                                            ),
                                            'operator' => 'NOT IN',
                                        ),
                                    ),
                                );
                                $latest_posts = new WP_Query($args);
                                
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
                                            <div class="entry-body text-center">
                                                <div class="entry-meta">
                                                    <?php the_time('j, M Y');?>
                                                    <span class="meta-separator">|</span>
                                                    <?php comments_number('No comments', 'One comment', '% comments');?>
                                                </div>
                                                <h2 class="entry-title">
                                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                                </h2>
                                                <div class="entry-cats mb-2">
                                                    <?php the_category(' & ');?>
                                                </div>
                                                <div class="link-button mb-2">
                                                    <a href="<?php the_permalink();?>">read more</a>
                                                </div>
                                            </div>
                                        </article>

                            <!-- Aquí termina el bucle-->
                            <?php
                                    endwhile;
                                else:
                                    echo 'No posts published yet...';
                                endif;
                                
                                wp_reset_query();
                            ?>
                        </div>
                    </div>

                    <!-- Comments -->
                    <div class="comments">
                        <h3 class="title"><?php comments_number('No comments', 'One comment', '% comments');?></h3>
                        <?php comments_template();?>
                    </div>
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