<?php
$configs = get_theme_options();
get_header();
?>
<!-- Page-->
<div class="page text-center">
	<?php include 'logo.php'; ?>
	<?php
		if ( have_posts() ) {
			while( have_posts() ) {
				the_post();
				$post_thumbnail_id = get_post_thumbnail_id();
				$imagem_do_topo = wp_get_attachment_image_src( $post_thumbnail_id, 'full', true );
	?>
	<!-- Page Head-->
	<header class="page-head slider-menu-position">
		<?php include 'nav-bar.php'; ?>
		<div class="context-dark">
			<!-- Modern Breadcrumbs-->
			<section style="background: url('<?php echo $imagem_do_topo[0]; ?>') center no-repeat; background-size: cover; " class="breadcrumb-modern bg-gray-darkest">
				<div class="shell section-top-98 section-bottom-34 section-md-bottom-66 section-md-98 section-lg-top-110 section-lg-bottom-41">
					<h2 class="veil reveal-md-block offset-top-30"><span class="big"><?php the_title(); ?></span></h2>
					<ul class="list-inline list-inline-dashed">
						<li><a href="<?php echo home_url(); ?>">Home</a></li>
						<li><?php the_title(); ?></li>
					</ul>
				</div>
			</section>
		</div>
	</header>
	<?php
			}
			wp_reset_postdata();
		}
	?>
	<!-- Page Contents-->
	<main class="page-content">
		<section class="section-98 section-sm-110">
			<section class="section-98 section-sm-110">
          		<div class="shell">
            		<h1><?php _e( 'Nossas marcas', 'ilmu' ); ?></h1>
            		<hr class="divider bg-danger">
            		<div class="range range-xs-center offset-sm-top-50 offset-lg-top-66">
              			<div class="cell-sm-10 cell-lg-12">
                			<div class="range">
                				<?php
                					$args = array(
                								'post_type'			=> 'marcas-produtos',
                								'posts_per_page'	=> '-1'
                							);
                					$marcas = new WP_Query( $args );
                					if ( $marcas->have_posts() ) {
                						while ( $marcas->have_posts() ) {
                							$marcas->the_post();
                				?>
                  				<div class="cell-sm-6 cell-lg-3 offset-top-66 offset-xs-top-0 box-marcas">
                    				<!-- Box Member-->
                    				<div class="box-member">
                    					<?php the_post_thumbnail( 'banner-quadrado' ); ?>
                      					<h5 class="text-bold offset-top-20">
                      						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      					</h5>
                      				</div><br /><br />
                    				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn-danger"><?php _e( 'Conheça os produtos', 'ilmu' ); ?></a>
		                  		</div>
								<?php
										}
										wp_reset_postdata();
									}
								?>
              				</div>
            			</div>
          			</div>
          		</div>
        	</section>
		</section>
	</main>
<?php get_footer(); ?>