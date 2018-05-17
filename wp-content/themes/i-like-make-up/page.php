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
	<!-- Page Contents-->
	<main class="page-content">
		<section class="section-66 section-sm-top-50 section-lg-bottom-50 sect-quem-somos">
			<div class="shell">
				<div class="range range-xs-center">
					<div class="content-post">
						<?php
							$imagem_conteudo = get_field( 'imagem_do_conteudo' );
							if ( $imagem_conteudo ) {
						?>
								<div class="imagem-conteudo">
									<img src="<?php echo $imagem_conteudo; ?>">
								</div>
						<?php
							}
						?>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php
			}
		}
	?>
<?php get_footer(); ?>