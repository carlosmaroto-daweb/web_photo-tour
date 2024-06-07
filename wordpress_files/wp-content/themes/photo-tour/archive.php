<?php
	get_header();
	get_template_part('nav', 'blog');
	if(have_posts()) {
	    $total = $wp_the_query->found_posts;
	    if($total==1) {
	        $results = '<span class="key">'.$total.'</span> post found';
	    } else {
	        $results = '<span class="key">'.$total.'</span> posts found';
	    }
	} else {
	    $results = "No posts found...";
	}
	// Determinar que elemento y de qué tipo estamos listando el posts
	if(have_posts()) {
	    if(is_category()) {
	        $words = '<span class="key">'.single_cat_title('', false).'</span> category';
	    } elseif(is_tag()) {
            $words = '<span class="key">'.single_tag_title('', false).'</span> tag';
        } elseif(is_day()) {
            $words = '<span class="key">'.get_the_date().'</span>';
        } elseif(is_month()) {
            $words = '<span class="key">'.get_the_date('F Y').'</span>';
        } elseif(is_year()) {
            $words = '<span class="key">'.get_the_date('Y').'</span>';
        } elseif(is_author()) {
            // Accedemos al primer post de la consulta para extraer el autor
            the_post();
            // Obtenemos el rol del usuario
            $rol = "author";
            $words = '<span class="key">'.get_the_author().'</span>'.$rol;
            // Restablecer el puntero del resultset a la posición inicial
            rewind_posts();
        }
	}
?>

<main class="main">

	<!-- Page Header -->
	<div class="page-header text-center" style="background-image: url('<?php echo bloginfo('template_directory');?>/assets/images/photo-tour/archive-bg.jpg')">
		<div class="container">
			<h1 class="page-title">Archives for<span><?php echo $words?></span></h1>
		</div>
	</div>

	<!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-4">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Archive</li>
                <li class="breadcrumb-item active"><?php echo $words?></li>
            </ol>
        </div>
    </nav>

	<!-- Search Result -->
    <div class="page-content">
        <div class="container">
        	<div class="row">
        		<div class="col-lg-9">
        			<div class="toolbox">
        				<div class="toolbox-left">
        					<div class="toolbox-info">
        						Showing: <span><?php echo $results;?></span>
        					</div>
        				</div>
        			</div>

					<!-- Table -->
                    <div class="products mb-3">
                        <table class="table table-wishlist table-mobile">

							<!-- Title Table -->
    						<thead>
    							<tr>
    								<th>Post</th>
    								<th>Published on</th>
    								<th>Author</th>
    								<th>Type</th>
    								<th></th>
    							</tr>
    						</thead>

							<!-- Body Table -->
    						<tbody>

    						    <!-- Aquí comienza el bucle -->
    						    <?php
    						        if(have_posts()):
    						            while(have_posts()):
    						                the_post();
    						                /* Si tengo una imagen representativa la visualizo y si no muestro una imagen por defecto */
                                            if(has_post_thumbnail()) { // Esta función devuelve true si hay una imagen representativa
                                                // Recupero la imagen representativa
                                                $PostImg = get_the_post_thumbnail_url();
                                            } else {
                                                $PostImg = get_template_directory_uri().'/assets/images/photo-tour/default.jpg';
                                            }
    						    ?>
											<!-- Post Result -->
                							<tr>
                								<td class="product-col">
                									<div class="product">
														<?php
															$formato = get_post_format();
															if(empty($formato)) {
														?>
																<figure class="product-media">
																	<a href="<?php the_permalink();?>">
																		<img class="miniatura-search" src="<?php echo $PostImg;?>" alt="<?php the_title();?>">
																	</a>
																</figure>
																<h3 class="product-title">
																	<a href="<?php the_permalink();?>"><?php the_title();?></a>
																</h3>
														<?php
															} else {
														?>
																<figure class="product-media">
																	<a href="#post-format-modal-<?php echo $post->ID?>" data-toggle="modal">
																		<img class="miniatura-search" src="<?php echo $PostImg;?>" alt="<?php the_title();?>">
																	</a>
																</figure>
																<h3 class="product-title">
																	<a href="#post-format-modal-<?php echo $post->ID?>" data-toggle="modal"><?php the_title();?></a>
																</h3>
														<?php
															}
														?>
                										
                									</div>
                								</td>
                								<td class="price-col"><?php the_time('j, M Y');?></td>
                								<td class="stock-col"><span class="in-stock"><?php the_author();?></span></td>
                								<td class="action-col">
                								    <?php
													if($post->post_type != 'page') {
														if(!empty($formato)) {
															?>
															<a href="#post-format-modal-<?php echo $post->ID?>" data-toggle="modal" class="btn btn-block btn-outline-primary-2 post-type-button">
																<p><?php echo $formato?></p><span class="dashicons <?php
																	if($formato == 'video') {
																		echo 'dashicons-video-alt3';
																	} else if ($formato == 'audio') {
																		echo 'dashicons-format-audio';
																	}
																?>"></span>
															</a>
															<?php
														}
														else {
															if($post->post_type == 'post'){
																?>
																<a href="<?php the_permalink();?>" class="btn btn-block btn-outline-primary-2 post-type-button">
																	<p>BLOG POST</p><span class="dashicons dashicons-media-document"></span>
																</a>
																<?php
															}
															else if ($post->post_type == 'mpm_reviews') {
																?>
																<a href="<?php the_permalink();?>" class="btn btn-block btn-outline-primary-2 post-type-button">
																	<p>REVIEW POST</p><span class="dashicons dashicons-welcome-write-blog"></span>
																</a>
																<?php
															}
														}
													} else {
														?>
														<a href="<?php the_permalink();?>" class="btn btn-block btn-outline-primary-2 post-type-button">
															<p>PAGE</p><span class="dashicons dashicons-media-default"></span>
														</a>
														<?php
													}
                								    ?>
                								</td>
                								<td class="remove-col"></td>
                							</tr>
											
											<!-- Modal -->
											<?php
												if(!empty($formato)) {
											?>
													<div class="modal fade" id="post-format-modal-<?php echo $post->ID?>" tabindex="-1" role="dialog" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-body">
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true"><i class="icon-close"></i></span>
																	</button>
																	<div class="form-box">
																		<?php the_content();?>
																	</div>
																</div>
															</div>
														</div>
													</div>
											<?php
												}
											?>
    						    <!-- Aquí termina el bucle-->
                                <?php
                                        endwhile;
                                    else:
                                        echo 'No posts found...';
                                    endif;
                                ?>
    						</tbody>
    					</table>
                    </div>

					<!-- Page Navigation -->
					<?php
						the_posts_pagination( array(
							'prev_text'          => __( 'Prev', 'your-theme' ),
							'next_text'          => __( 'Next', 'your-theme' ),
							'mid_size'           => 3,
							'end_size'           => 2,
						) );
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