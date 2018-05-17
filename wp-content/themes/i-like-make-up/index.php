<?php
$configs = get_theme_options();
get_header();
?>

<div class="sombra-2"></div>
<div class="box-imagem">
	<a href="javascript:;" class="close-newsletter-2">X</a>
	<img src="" class="imagem-ampliada">
</div>


<!-- Page-->
<div class="page text-center">
	<?php include 'logo.php'; ?>
	<!-- Page Head-->
	<header class="page-head slider-menu-position">
		<?php include 'nav-bar.php'; ?>
		<?php
			$args = array(
						'post_type'			=> 'banner-principal',
						'posts_per_page'	=> -1
					);
			$banner_principal = new WP_Query( $args );
			if ( $banner_principal->have_posts() ) {
		?>
		<!--Swiper-->
		<div class="rd-parallax rd-parallax-swiper">
		  	<div data-speed="0.3" data-sm-speed="1" data-type="html" class="rd-parallax-layer">
				<div data-loop="true" data-height="100vh" data-dragable="false" data-min-height="480px" class="swiper-container swiper-slider">
			  		<div class="swiper-wrapper text-center">
						<?php
							$i = 1;
							while( $banner_principal->have_posts() ) {
								$banner_principal->the_post();
						?>
						<div<?php if ( $i == 1 ) echo ' id="page-loader"'; ?> data-slide-bg="<?php the_field( 'imagem' ); ?>" data-preview-bg="<?php the_field( 'imagem' ); ?>" class="swiper-slide">
				  			<div data-speed="0.5" data-fade="true" class="swiper-caption swiper-parallax">
								<div class="swiper-slide-caption">
					  				<div class="shell">
										<div class="range range-lg-center">
						  					<div class="cell-lg-12">
												<div data-caption-animate="fadeInUp" data-caption-delay="300" class="text-extra-big text-bold text-uppercase"><?php the_title(); ?></div>
						  					</div>
						  					<div class="cell-lg-8 offset-top-10">
												<h5 data-caption-animate="fadeInUp" data-caption-delay="500" class="hidden reveal-xs-block text-light desc-slide"><?php the_field( 'subtitulo' ); ?></h5>
												<?php
													$link = get_field( 'link' );
													if ( $link ) {
												?>
												<div class="offset-top-20 offset-xs-top-50">
													<a href="<?php echo $link; ?>" class="btn btn-danger"><span class="btn-text"><?php
														$botao = get_field( 'texto_do_botao' );
														if ( ! empty( $botao ) ) {
															echo $botao;
														} else {
															_e( 'saiba mais', 'ilmu' );
														}
													?></span></a>
												</div>
												<?php } ?>
						  					</div>
										</div>
					  				</div>
								</div>
				  			</div>
						</div>
						<?php $i++; } ?>
			  		</div>
			  		<div class="swiper-button swiper-button-prev swiper-parallax mdi mdi-chevron-left"></div>
			  		<div class="swiper-button swiper-button-next swiper-parallax mdi mdi-chevron-right"></div>
			  		<div class="swiper-pagination"></div>
				</div>
		  	</div>
		</div>
		<?php
			}
			wp_reset_postdata();
		?>
	</header>
	

	


	<!-- Page Contents-->
	<main class="page-content">
		<!-- PRODUTOS EM PROMOÇÃO -->
		<?php
			$args = array(
							'post_type'			=> 'produtos-promocao',
							'posts_per_page'	=> -1
						);
			$produtos = new WP_Query( $args );
			if ( $produtos->have_posts() ) {
		?>
		<section id="produtos-promocao" class="section-60 section-sm-90" style="padding-top:110px;">
			<div class="shell">
				<h1><?php _e( 'Produtos em promoção', 'ilmu' ); ?></h1>
				<hr class="divider bg-red"/>
				<div data-items="1" data-xs-items="2" data-md-items="3" data-lg-items="4" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]" class="owl-carousel owl-carousel-default veil-md-owl-dots veil-owl-nav reveal-md-owl-nav produtos">
						<?php
							while( $produtos->have_posts() ) {
								$produtos->the_post();

								$featured_img_url = get_the_post_thumbnail_url( '', 'full' );

						?>
								<div class="cell-sm-8 cell-sm-preffix-2 cell-md-3 cell-md-preffix-0">
									<div class="produto">
										<a href="javascript:;" class="imagem ampliar-imagem" data-ampliada="<?php echo $featured_img_url; ?>">
											<?php the_post_thumbnail( 'banner-quadrado' ); ?>
										</a>
										<a href="javascript:;" class="conteudo ampliar-imagem" data-ampliada="<?php echo $featured_img_url; ?>">
											<p><?php the_title(); ?></p>
										</a>
									</div>
								</div>
					<?php
							}
					?>
				</div>
		  	</div>
		</section>
		<?php
				wp_reset_postdata();
			}
		?>
		<!-- PRODUTOS EM PROMOÇÃO -->

		<!-- PRODUTOS MAIS VENDIDOS -->
		<?php
			$args = array(
							'post_type'			=> 'mais-vendidos',
							'posts_per_page'	=> -1
						);
			$produtos = new WP_Query( $args );
			if ( $produtos->have_posts() ) {
		?>
		<section id="produtos-promocao" class="section-60 section-sm-90">
			<div class="shell">
				<h1><?php _e( 'Produtos mais vendidos', 'ilmu' ); ?></h1>
				<hr class="divider bg-red"/>
				<div data-items="1" data-xs-items="2" data-md-items="3" data-lg-items="4" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]" class="owl-carousel owl-carousel-default veil-md-owl-dots veil-owl-nav reveal-md-owl-nav produtos">
						<?php
							while( $produtos->have_posts() ) {
								$produtos->the_post();

								$featured_img_url = get_the_post_thumbnail_url( '', 'full' );
						?>
								<div class="cell-sm-8 cell-sm-preffix-2 cell-md-3 cell-md-preffix-0">
									<div class="produto">
										<a href="javascript:;" class="imagem ampliar-imagem" data-ampliada="<?php echo $featured_img_url; ?>">
											<?php the_post_thumbnail( 'banner-quadrado' ); ?>
										</a>
										<a href="javascript:;" class="conteudo ampliar-imagem" data-ampliada="<?php echo $featured_img_url; ?>">
											<p><?php the_title(); ?></p>
										</a>
									</div>
								</div>
					<?php
							}
					?>
				</div>
		  	</div>
		</section>
		<?php
				wp_reset_postdata();
			}
		?>
		<!-- PRODUTOS MAIS VENDIDOS -->

		<!-- PRODUTOS TENDÊNCIAS -->
		<?php
			$args = array(
							'post_type'			=> 'produtos-tendencias',
							'posts_per_page'	=> -1
						);
			$produtos = new WP_Query( $args );
			if ( $produtos->have_posts() ) {
		?>
		<section id="produtos-promocao" class="section-60 section-sm-90">
			<div class="shell">
				<h1><?php _e( 'Tendências', 'ilmu' ); ?></h1>
				<hr class="divider bg-red"/>
				<div data-items="1" data-xs-items="2" data-md-items="3" data-lg-items="4" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]" class="owl-carousel owl-carousel-default veil-md-owl-dots veil-owl-nav reveal-md-owl-nav produtos">
						<?php
							while( $produtos->have_posts() ) {
								$produtos->the_post();

								$featured_img_url = get_the_post_thumbnail_url( '', 'full' );
						?>
								<div class="cell-sm-8 cell-sm-preffix-2 cell-md-3 cell-md-preffix-0">
									<div class="produto">
										<a href="<?php the_field( 'link' ); ?>" class="imagem">
											<?php the_post_thumbnail( 'banner-quadrado' ); ?>
										</a>
										<a href="<?php the_field( 'link' ); ?>" class="conteudo">
											<p><?php the_title(); ?></p>
										</a>
									</div>
								</div>
					<?php
							}
					?>
				</div>
		  	</div>
		</section>
		<?php
				wp_reset_postdata();
			}
		?>
		<!-- PRODUTOS TENDÊNCIAS -->

		<?php
			$args = array(
						'post_type'			=> 'banner-secundario',
						'posts_per_page'	=> -1
					);
			$banner_secundario = new WP_Query( $args );
			if ( $banner_secundario->have_posts() ) {
		?>
		<!-- Offers-->
		<section>
		  	<div data-items="1" data-xs-items="2" data-md-items="3" data-lg-items="4" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]" class="owl-carousel owl-carousel-default veil-md-owl-dots veil-owl-nav reveal-md-owl-nav">
		  		<?php
					while( $banner_secundario->have_posts() ) {
						$banner_secundario->the_post();
						$link = get_field( 'link' );
				?>
				<div>
				  	<!-- Thumbnail Terry-->
				  	<figure class="thumbnail-terry">
				  	<a href="<?php if ( $link ) { echo $link; } else { echo '#'; } ?> ">
				  		<img width="480" height="480" src="<?php the_field( 'imagem' ); ?>" alt=""/>
				  	</a>
						<figcaption>
					  		<div>
								<h2 class="text-italic text-uppercase text-spacing-20 thumbnail-terry-title"><?php the_title(); ?></h2>
					  		</div>
					  		<?php if ( $link ) { ?>
					  			<p class="thumbnail-terry-desc offset-top-0"></p><a href="<?php echo $link; ?>" class="btn offset-top-10 offset-md-top-0 btn-danger"><?php the_field( 'subtitulo' ); ?></a>
					  		<?php } ?>
						</figcaption>
				  	</figure>
				</div>
				<?php } ?>
		  	</div>
		</section>
		<?php } ?>
		<!-- Coaches-->
		<section class="section-98 section-sm-110">
		  	<div class="shell">
				<h1><?php _e( 'Marcas', 'ilmu' ); ?></h1>
				<hr class="divider bg-danger"/>
				<div class="range range-xs-center offset-sm-top-66">
			  		<div class="cell-sm-10 cell-lg-12">
						<div class="range">
				  			<?php
            					$args = array(
            								'post_type'			=> 'marcas-produtos',
            								'posts_per_page'	=> 4
            							);
            					$marcas = new WP_Query( $args );
            					if ( $marcas->have_posts() ) {
            						while ( $marcas->have_posts() ) {
            							$marcas->the_post();
            				?>
					  			<div class="cell-sm-6 cell-lg-3 offset-top-66 offset-xs-top-0">
									<!-- Box Member-->
									<div class="box-member">
										<?php the_post_thumbnail( 'banner-quadrado', array('class' => 'img-responsive') ); ?>
						  				<h5 class="text-bold offset-top-20"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						  				<div class="box-member-wrap">
											<div class="box-member-caption">
							  					<div class="box-member-caption-inner"></div>
											</div>
						  				</div>
									</div>
					  			</div>
					  		<?php
									}
									wp_reset_postdata();
								}
							?>
						</div>
						<a href="<?php echo home_url( 'marcas' ); ?>" class="offset-top-50 btn btn-danger"><?php _e( 'Ver todas as marcas', 'ilmu' ); ?></a>
			  		</div>
				</div>
		  	</div>
		</section>
		<?php
			$args = array(
						'post_type'			=> 'post',
						'posts_per_page'	=> 4,
					);
			$blog = new WP_Query( $args );
			if ( $blog->have_posts() ) {
		?>
		<!-- Latest Blog Posts-->
		<section class="section-98 section-110 bg-lilac">
			<div class="shell">
				<h1><?php _e( 'Últimos posts do blog', 'ilmu' ); ?></h1>
				<hr class="divider bg-danger"/>
				<div class="range range-xs-center">
					<?php
						$i = 1;
						while( $blog->have_posts() ) {
							$blog->the_post();
							$from = get_the_time( 'U' );
							$to = current_time( 'timestamp' );
					?>
					<?php if ( $i == 1 ) { ?>
				  	<div class="cell-sm-10 cell-md-6">
				  	<?php } else { ?>
				  	<div class="cell-sm-10 cell-md-6 offset-top-66 offset-sm-top-30 offset-md-top-0">
				  	<?php } ?>
						<!-- Post Boxed-->
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="reveal-block">
					  		<div class="post post-boxed">
								<!-- Post media-->
								<header class="post-media">
									<?php the_post_thumbnail( 'posts-blog', array( 'class' => 'img-responsive' ) ); ?>
								</header>
								<!-- Post content-->
								<section class="post-content text-left">
						  			<div class="post-tags group-xs">
						  				<?php
						  					$categorias = get_the_category();
						  					if ( $categorias ) {
						  						foreach ( $categorias as $categoria ) {
						  				?>
						  							<span class="label-custom label-lg-custom label-neon-carrot text-regular text-italic text-capitalize"><?php echo $categoria->name; ?></span>
						  				<?php
						  						}
						  					}
						  				?>
						  			</div>
						 			 <div class="post-body">
										<!-- Post Title-->
										<div class="post-title">
							  				<h4><?php the_title(); ?></h4>
										</div>
										<div class="post-meta small">
							  				<ul class="list-inline list-inline-sm p">
												<li class="text-italic text-middle">
													<?php _e( 'por', 'ilmu' ); ?> <span class="text-primary"><?php the_author(); ?></span></li>
												<li>
													<span class="text-middle icon-xxs mdi mdi-clock"></span>
								  					<time datetime="2016-01-01" class="text-italic text-middle text-primary"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'ilmu' ), human_time_diff( $from, $to ) ); ?></time>
												</li>
							  				</ul>
										</div>
						  			</div>
								</section>
					  		</div>
					  	</a>
				  	</div>
					<?php if ( $i == 2 ) { ?>
				  		<div class="range-spacer veil reveal-md-block offset-top-30"></div>
				  	<?php } ?>
				  	<?php $i++; } ?>
					<a href="<?php echo home_url( 'blog' ); ?>" class="offset-top-66 btn btn-danger"><?php _e( 'Ver todos os posts', 'ilmu' ); ?></a>
				</div>
			</div>
		</section>
		<?php
				wp_reset_postdata();
			}
		?>

		<!-- Testimonials-->
		<!-- <section class="banner-rodape">
		  	<img src="<?php echo $configs['banner_rodape_da_home']; ?>">
		</section> -->
	</main>
<?php get_footer(); ?>