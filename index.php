<?php
	get_header();
	get_template_part('nav', 'blog');
?>

<main class="main">

    <!-- Page Header -->
    <div class="page-header text-center" style="background-image: url('<?php echo bloginfo('template_directory');?>/assets/images/phototour/blog-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Surf my Blog<span>Latest Posts</span></h1>
        </div>
    </div>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo get_page_link(get_page_by_title('Home')->ID);?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="#">Blog</a></li>
            </ol>
        </div>
    </nav>

    <!-------------------------------------------- inicio post destacado ---------------->
    <!-- Aquí comienza el bucle-->
    <?php
        $args = array(
            'posts_per_page' => 1,
            'post_type'      => array('post'),
        );
        $post_destacado = new WP_Query($args);
        $post_destacado_ID = 0;
        
        if($post_destacado->have_posts()):
            while($post_destacado->have_posts()):
                $post_destacado->the_post();
                // Almacenamos el post_id del post destacado
                $post_destacado_ID = $post->ID;
                /* Si tengo una imagen representativa la visualizo y si no muestro una imagen por defecto */
                if(has_post_thumbnail()) { // Esta función devuelve true si hay una imagen representativa
                    // Recupero la imagen representativa
                    $PostImg = get_the_post_thumbnail_url();
                } else {
                    $PostImg = get_template_directory_uri().'/assets/images/phototour/default.jpg';
                }
    ?>
                <!-- Newsletter -->
                <div class="newsletter">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 banner-overlay-div img-resp"  style="background-image: url('<?php echo $PostImg;?>')">
                                <div class="banner-content banner-content-center">
                                    <h4 class="banner-subtitle text-white"><?php echo my_tags_comma($post_destacado_ID);?></h4>
                                    <h3 class="banner-title text-white">
                                        <ul class="cta-destacado">
                                            <?php the_category();?>
                                        </ul>
                                    </h3>
                                    <a href="<?php the_permalink();?>" class="btn btn-outline-white banner-link underline">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-stretch subscribe-div no-padding-lr">
                                <div class="cta cta-box">
                                    <div class="cta-content">
                                        <h3 class="cta-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        <p>By <span class="primary-color"><?php the_author_posts_link();?></span><?php the_excerpt();?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
    <!-- Aquí termina el bucle-->
    <?php
            endwhile;
        else:
            echo 'No posts published yet...';
        endif;
        
        wp_reset_query();
    ?>
    <!-------------------------------------------- fin post destacado ---------------->

    <!-- Last entries -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h3>Last entries...</h3>
                    
                    <!-- Aquí comienza el bucle-->
                    <?php
                        $args = array(
                            'posts_per_page' => 5,                         // Queremos 5 post por página
                            'post_type'      => array('post'),             // Solo queremos el estandar
                            'post__not_in'   => array($post_destacado_ID)  // Excluimos el post destacado
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
                                            <img src="<?php echo $PostImg;?>" alt="Image <?php the_title();?>">
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
                                        </div>
                                        <br/>
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                        </h2>
                                        <div class="entry-cats">
                                            in <?php the_category();?>
                                        </div>
                                        <div class="entry-content">
                                            <p><?php the_excerpt();?></p>
                                            <a href="<?php the_permalink();?>" class="read-more">Continue Reading</a>
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

                    <!-- Page Navigation -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
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