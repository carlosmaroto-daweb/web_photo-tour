<div class="sidebar">

    <!--  -->
    <div class="widget widget-search">
        <h3 class="widget-title">Search</h3>
        <form action="<?php echo home_url('/');?>">
            <label for="ws" class="sr-only">Search in blog</label>
            <input type="search" class="form-control" name="s" id="s" placeholder="Search in blog">
            <button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">Search</span></button>
        </form>
    </div>
    
    <!--  -->
    <div class="widget">
        <h3 class="widget-title">Browse Tags</h3>
        <div class="tagcloud">
            <!-- habilitamos una zona de widgets para la nube de tags  -->
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('TagCloud Widget')) : ?>
                <div class="warning">Sorry, no widgets instaled for this theme. Go to the admin area and drag your widgets into the sidebar.</div>
            <?php endif;?>
        </div>
    </div>
    
    <!--  -->
    <div class="widget">
        <h3 class="widget-title">Calendar</h3>
        <!-- habilitamos una zona de widgets para la nube de tags  -->
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Calendar Widget')) : ?>
            <div class="warning">Sorry, no widgets instaled for this theme. Go to the admin area and drag your widgets into the sidebar.</div>
        <?php endif;?>
    </div>

    <!--  -->
    <div class="widget widget-cats">
        <h3 class="widget-title">Categories</h3>
        <ul>
            <?php 
                $my_categories = wp_list_categories('title_li=&show_count=1&echo=0');
                $my_categories =  preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="badge badge-pasific pull-right">\\1</span></a>', $my_categories);
                echo $my_categories;
            ?>
        </ul>
    </div>

    <!--  -->
    <div class="widget">
        <h3 class="widget-title">Last Posts</h3>
        <ul class="posts-list">
            
            <!-- Aquí comienza el bucle-->
            <?php
                $args = array(
                    'posts_per_page' => 5,                         // Queremos 5 post por página
                    'post_type'      => array('post'),             // Solo queremos el estandar
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
                        <li>
                            <div class="miniatura" style="background-image: url(<?php echo $PostImg;?>)"></div>
                            <div>
                                <span><?php the_time('j, M Y');?></span>
                                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            </div>
                        </li>

            <!-- Aquí termina el bucle-->
            <?php
                    endwhile;
                else:
                    echo 'No posts published yet...';
                endif;
                
                wp_reset_query();
            ?>
            
        </ul>
    </div>

    <!--  -->
    <div class="widget widget-text">
        <h3 class="widget-title">About Blog</h3>
        <div class="widget-text-content">
            <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, pulvinar nunc sapien ornare nisl.</p>
        </div>
    </div>
</div>