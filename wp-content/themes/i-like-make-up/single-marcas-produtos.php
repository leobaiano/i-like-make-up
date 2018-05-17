<?php
$configs = get_theme_options();
get_header();

$post_thumbnail_id = get_post_thumbnail_id( 47 );
$imagem_do_topo = wp_get_attachment_image_src( $post_thumbnail_id, 'full', true );
?>
<div class="sombra-2"></div>
<div class="box-imagem">
	<a href="javascript:;" class="close-newsletter-2">X</a>
	<img src="" class="imagem-ampliada">
</div>

<!-- Page-->
<div class="page text-center">
	<?php include 'logo.php'; ?>
	<?php
		if ( have_posts() ) {
			while( have_posts() ) {
				the_post();
	?>
	<!-- Page Head-->
	<header class="page-head slider-menu-position">
		<?php include 'nav-bar.php'; ?>
		<div class="context-dark">
			<!-- Modern Breadcrumbs-->
			<section style="background: url('<?php echo $imagem_do_topo[0]; ?>') center no-repeat; background-size: cover; " class="breadcrumb-modern bg-gray-darkest">
				<div class="shell section-top-98 section-bottom-34 section-md-bottom-66 section-md-98 section-lg-top-110 section-lg-bottom-41">
					<h2 class="veil reveal-md-block offset-top-30"><span class="big"><?php _e( 'Marcas', 'ilmu'); ?></span></h2>
					<ul class="list-inline list-inline-dashed">
						<li><a href="<?php echo home_url(); ?>">Home</a></li>
						<li><?php _e( 'Marcas', 'ilmu'); ?></li>
					</ul>
				</div>
			</section>
		</div>
	</header>
	<!-- Page Contents-->
	<main class="page-content">
		<section class="section-98 section-sm-110">
			<section class="section-98 section-sm-110">
          		<div class="shell">
            		<h1><?php the_title(); ?></h1>
            		<hr class="divider bg-danger">
            		<div class="range range-xs-center offset-sm-top-50 offset-lg-top-66">
              			<div class="cell-sm-10 cell-lg-12">
                			<div class="range">
                				<?php
                					if( have_rows( 'produto' ) ) {
                						while ( have_rows('produto') ) { the_row();
                				?>
                  				<div class="cell-sm-6 cell-lg-3 offset-top-66 offset-xs-top-0">
                    				<!-- Box Member-->
                    				<div class="box-member">
                    					<div class="imagem_do_produto">
                    						<?php
                    							$id_imagem = get_sub_field( 'imagem_do_produto' );
                    							$imagem_do_produto = wp_get_attachment_image_src( $id_imagem, 'banner-quadrado', true );
                    							$imagem_do_produto_ampliada = wp_get_attachment_image_src( $id_imagem, 'full', true );
                    						?>
                    						<img src="<?php echo $imagem_do_produto[0]; ?>" alt="<?php the_sub_field( 'nome_do_produto' ); ?>">
                    					</div>
                      					<h5 class="text-bold offset-top-20">
                      						<a href="javascript:;"><?php the_sub_field( 'nome_do_produto' ); ?></a>
                      					</h5>
                      					<p><?php the_sub_field( 'descricao_do_produto' ); ?></p>
                      				</div><br /><br />
                    				<a href="javascript:;" title="Ampliar a imagem do produto" class="btn btn-danger ampliar-imagem" data-ampliada="<?php echo $imagem_do_produto_ampliada[0]; ?>"><?php _e( 'Ampliar imagem', 'ilmu' ); ?></a>
		                  		</div>
								<?php
										}
									}
								?>
              				</div>
            			</div>
          			</div>
          		</div>
        	</section>
		</section>
	</main>
	<?php
			}
			wp_reset_postdata();
		}
	?>
<?php get_footer(); ?>