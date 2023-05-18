<?php
    get_header();
    get_template_part('nav', 'blog');
    // Quién es el usuario actual
    $curauth = (isset($_GET['author_name'])) ? get_current_user_by('slug', $author_name) : get_userdata(intval($author));
    // Obtenemos el nombre del usuario
    $nombre = $curauth->display_name;
    // Obtener el rol del usuario
    $rol = get_author_role($curauth->ID);
?>

<main class="main">
    
    <!-- Page Header -->
	<div class="page-header text-center" style="background-image: url('<?php echo bloginfo('template_directory');?>/assets/images/phototour/authors-bg.jpg')">
		<div class="container">
			<h1 class="page-title"><?php echo $nombre?><span><?php echo $rol?></span></h1>
		</div>
	</div>
	
	<!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Author</li>
                <li class="breadcrumb-item active"><?php echo $nombre?></li>
            </ol>
        </div>
    </nav>

    <!-- Page Content  -->
    <div class="page-content">
        <div class="container mb-2">
            
            <!-- Author Information -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="about-text text-center mt-3">
                        <h2 class="title text-center mb-4">I am <span class="main-color"><?php echo $curauth->nickname?></span></php></h2>
                        <p><?php echo $curauth->description?></p>
                        <p class="signature"><?php echo $nombre?></p>
                        <img src="
                            <?php
                                $user_profile_pic = get_user_meta($curauth->ID, 'user_pic', true);
                                if(str_contains($user_profile_pic, "<") || empty($user_profile_pic)) {
                                    $user_profile_pic = bloginfo('template_directory').'/assets/images/phototour/user.jpg';
                                }
                                echo $user_profile_pic;
                            ?>
                            " alt="<?php echo $nombre?>" class="mx-auto mb-6">
                    </div>
                </div>
            </div>
            
            <!-- Social Network -->
            <div class="row justify-content-center social-network">
                <div class="col-sm-4">
                    <div class="icon-box icon-box-sm text-center">
                        <a href="<?php echo get_user_meta($curauth->ID, 'facebook', true)?>" class="icon-box-link">
                            <span class="icon-box-icon">
                                <i class="icon-facebook"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Facebook</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="icon-box icon-box-sm text-center">
                        <a href="<?php echo get_user_meta($curauth->ID, 'instagram', true)?>" class="icon-box-link">
                            <span class="icon-box-icon">
                                <i class="icon-instagram"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Instagram</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="icon-box icon-box-sm text-center">
                        <a href="<?php echo get_user_meta($curauth->ID, 'linknd', true)?>" class="icon-box-link">
                            <span class="icon-box-icon">
                                <i class="icon-linkedin"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">LinkedIn</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills -->
        <div class="bg-image pt-7 pb-5 pt-md-12 pb-md-9" style="background-image: url(<?php echo bloginfo('template_directory');?>/assets/images/phototour/skills.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-3">
                        <div class="count-container text-center">
                            <div class="count-wrapper text-white">
                                <span class="count" data-from="0" data-to="<?php echo get_user_meta($curauth->ID, 'skill1V', true)?>" data-speed="3000" data-refresh-interval="50">0</span>%
                            </div>
                            <h3 class="count-title text-white"><?php echo get_user_meta($curauth->ID, 'skill1', true)?></h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="count-container text-center">
                            <div class="count-wrapper text-white">
                                <span class="count" data-from="0" data-to="<?php echo get_user_meta($curauth->ID, 'skill2V', true)?>" data-speed="3000" data-refresh-interval="50">0</span>%
                            </div>
                            <h3 class="count-title text-white"><?php echo get_user_meta($curauth->ID, 'skill2', true)?></h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="count-container text-center">
                            <div class="count-wrapper text-white">
                                <span class="count" data-from="0" data-to="<?php echo get_user_meta($curauth->ID, 'skill3V', true)?>" data-speed="3000" data-refresh-interval="50">0</span>%
                            </div>
                            <h3 class="count-title text-white"><?php echo get_user_meta($curauth->ID, 'skill3', true)?></h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="count-container text-center">
                            <div class="count-wrapper text-white">
                                <span class="count" data-from="0" data-to="<?php echo get_user_meta($curauth->ID, 'skill4V', true)?>" data-speed="3000" data-refresh-interval="50">0</span>%
                            </div>
                            <h3 class="count-title text-white"><?php echo get_user_meta($curauth->ID, 'skill4', true)?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Last entries -->
        <div class="bg-light-2 pt-6">
            <div class="container">
                <h2 class="title text-center mb-4">My last entries</h2>
                <div class="row">
                    
                    <!-- Aquí comienza el bucle-->
                    <?php
                        $args = array(
                            'posts_per_page' => 3,
                            'author'         => $curauth->ID,
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
                                <div class="col-sm-6 col-lg-4 mb-4">
                                    <div class="member member-2 text-center">
                                        <figure class="member-media">
                                            <a href="<?php the_permalink();?>">
                                                <img src="<?php echo $PostImg;?>" alt="<?php the_title();?>">
                                            </a>
                                        </figure>
                                        <div class="member-content">
                                            <h3 class="member-title mb-1">
                                                <a href="<?php the_permalink();?>" class="black-text"><?php the_title();?></a>
                                            </h3>
                                            <h3 class="member-title">
                                                In <?php the_category(' & ');?>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="link-button">
                                            <a href="<?php the_permalink();?>">Read More</a>
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
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    get_footer();
?>