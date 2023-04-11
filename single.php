<?php
	get_header();
	the_post();
	$post_id = $post->ID;
	/* Si tengo una imagen representativa la visualizo y si no muestro una imagen por defecto */
    if(has_post_thumbnail()) { // Esta función devuelve true si hay una imagen representativa
        // Recupero la imagen representativa
        $PostImg = get_the_post_thumbnail_url();
    } else {
        $PostImg = get_template_directory_uri().'/assets/images/phototour/default.jpg';
    }
	get_template_part('nav', 'blog');
?>

<main class="main">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo get_page_link(get_page_object('Home')->ID);?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo get_page_link(get_page_object('Blog')->ID);?>">Blog</a></li>
                <li class="breadcrumb-item active"><a href="#"><?php the_title();?></a></li>
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
                            </div>
                            <br/>
                            <h2 class="entry-title entry-title-big">
                                <?php the_title();?>
                            </h2>
                            <div class="entry-cats">
                                in <?php the_category();?>
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
                                <img src="<?php echo $avatar;?>" alt="Image User <?php echo get_the_author_meta('nickname')?>">
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

                    <!-- Author Last Entries -->
                    <div class="related-posts">
                        <h3 class="title"><?php echo get_the_author_meta('display_name');?> Last Entries</h3>
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
                                    'posts_per_page' => 5,     // Queremos 5 post por página
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
                                        <!-- Newsletter -->
                                        <article class="entry entry-grid">
                                            <figure class="entry-media">
                                                <a href="<?php the_permalink();?>">
                                                    <img src="<?php echo $PostImg;?>" alt="Image <?php the_title();?>">
                                                </a>
                                            </figure>
                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <a href="#"><?php the_time('j, M Y');?></a>
                                                    <span class="meta-separator">|</span>
                                                    <a href="<?php the_permalink();?>"><?php comments_number('No comments', 'One comment', '% comments');?></a>
                                                </div>
                                                <h2 class="entry-title">
                                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                                </h2>
                                                <div class="entry-cats">
                                                    <?php the_category(' & ');?>
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