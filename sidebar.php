<div class="sidebar">

    <!-- Search Form -->
    <div class="widget widget-search">
        <h3 class="widget-title">Search</h3>
        <form action="<?php echo home_url('/');?>">
            <label for="ws" class="sr-only">Search in blog</label>
            <input type="search" class="form-control" name="s" id="s" placeholder="Search in blog">
            <button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">Search</span></button>
        </form>
    </div>
    
    <!-- Browse Tags Widget -->
    <div class="widget">
        <h3 class="widget-title">Browse Tags</h3>
        <div class="tagcloud">
            <!-- habilitamos una zona de widgets para la nube de tags  -->
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('TagCloud Widget')) : ?>
                <div class="warning">Sorry, no widgets instaled for this theme. Go to the admin area and drag your widgets into the sidebar.</div>
            <?php endif;?>
        </div>
    </div>
    
    <!-- Calendar Widget -->
    <div class="widget">
        <h3 class="widget-title">Calendar</h3>
        <!-- habilitamos una zona de widgets para la nube de tags  -->
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Calendar Widget')) : ?>
            <div class="warning">Sorry, no widgets instaled for this theme. Go to the admin area and drag your widgets into the sidebar.</div>
        <?php endif;?>
    </div>

    <!-- List Categories -->
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

    <!-- Last Posts -->
    <div class="widget">
        <h3 class="widget-title">Last Posts</h3>
        <ul class="posts-list">
            
            <!-- Aquí comienza el bucle-->
            <?php
                $args = array(
                    'posts_per_page' => 5,              // Queremos 5 post por página
                    'post_type'      => array('post'),  // Solo queremos el estandar
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

    <!-- List Authors -->
    <div class="widget widget-cats">
        <h3 class="widget-title">Authors</h3>
        <ul>
            <?php
                $args = array(
                    'echo'        => false,         // No visualiza el listado de los autores, sino que nos lo devuelve para ser almacenado en una variable
                    'hide_empty'  => false,         // Visualiza también los autores sin posts publicados
                    'optioncount' => true,          // Visualiza el número de posts publicados por el autor
                    'orderby'     => 'post_count',  // Ordena según el número de post publicados
                    'order'       => 'DESC',        // Ordena de mayor a menor
                );
                $my_authors = wp_list_authors($args);
                $my_authors =  preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="badge badge-pasific pull-right">\\1</span></a>', $my_authors);
                echo $my_authors;
            ?>
        </ul>
    </div>

    <!-- List Pages -->
    <div class="widget widget-cats">
        <h3 class="widget-title">Pages</h3>
        <ul>
            <?php
                // Obtengo el ID de la página que quiero excluir (para ello uso la función de usuario get_page_object() que devuelve el objeto de la pagina)
                $id = get_page_object('Política de Privacidad')->ID;
                $args = array(
                    'title_li' => '',  // Impedimos que visualize la etiqueta PAGES
                    'exclude'  => $id  // Excluimos el post
                );
                wp_list_pages($args);
            ?>
        </ul>
    </div>
</div>