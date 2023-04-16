<?php
	get_header();
	get_template_part('nav', 'blog');
	$search_words = get_search_query();
	if(empty($search_words)) {
	    $search_words = "All Posts";
	}
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
?>

<main class="main">

	<!-- Page Header -->
	<div class="page-header text-center" style="background-image: url('<?php echo bloginfo('template_directory');?>/assets/images/phototour/blog-bg.jpg')">
		<div class="container">
			<h1 class="page-title">Search for<span><?php echo $search_words?></span></h1>
		</div>
	</div>

	<!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-4">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/');?>">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Search</li>
                <li class="breadcrumb-item active"><?php echo $search_words?></li>
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
        						Showing: <span><?php echo $results?></span>
        					</div><
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
    								<th>Status</th>
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
                                                $PostImg = get_template_directory_uri().'/assets/images/phototour/default.jpg';
                                            }
    						    ?>
											<!-- Post Result -->
                							<tr>
                								<td class="product-col">
                									<div class="product">
                										<figure class="product-media">
                											<a href="#">
                												<img class="miniatura-search" src="<?php echo $PostImg;?>" alt="Image <?php the_title();?>">
                											</a>
                										</figure>
                										<h3 class="product-title">
                											<a href="<?php the_permalink();?>"><?php the_title();?></a>
                										</h3>
                									</div>
                								</td>
                								<td class="price-col"><?php the_time('j, M Y');?></td>
                								<td class="stock-col"><span class="in-stock"><?php the_author();?></span></td>
                								<td class="action-col">
                								    <?php
                								        if($post->post_type != 'page') {
                								    ?>
                        									<button class="btn btn-block btn-outline-primary-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                STATUS
                                                            </button>
                								    <?php
                								        } else {
                								    ?>
                        									<button class="btn btn-block btn-outline-primary-2 button-type-page" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <p class="post-type-page">PAGE</p><span class="dashicons dashicons-media-spreadsheet"></span>
                                                            </button>
                								    <?php
                								        }
                								    ?>
                								</td>
                								<td class="remove-col"></td>
                							</tr>
                							
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
        			<nav aria-label="Page navigation">
					    <ul class="pagination">
					        <li class="page-item disabled">
					            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
					                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
					            </a>
					        </li>
					        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
					        <li class="page-item"><a class="page-link" href="#">2</a></li>
					        <li class="page-item"><a class="page-link" href="#">3</a></li>
					        <li class="page-item-total">of 6</li>
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