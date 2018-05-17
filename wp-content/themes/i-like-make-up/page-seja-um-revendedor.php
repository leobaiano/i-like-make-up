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
        <section class="section-top-98 section-md-top-110 text-lg-left section-bottom-98">
            <div class="shell">
                <div class="range range-xs-center range-xs-center">
                    <div class="cell-sm-12 offset-top-66 offset-lg-top-50">
                        <h3 class="text-bold"><?php _e( 'Preencha os dados abaixo' ); ?></h3>
                        <hr class="divider hr-lg-left-0 bg-red"/>
                        <!-- RD Mailform-->
                        <form data-form-output="form-output-global" data-form-type="contact" method="post" action="" class="text-left offset-top-50">
                            <div class="range">
                                <div class="cell-lg-12">
                                    <div class="form-group">
                                        <label for="contact-us-cnpj" class="form-label form-label-outside"><?php _e( 'CNPJ' ); ?>:</label>
                                        <input id="contact-us-cnpj" type="text" name="cnpj_contato" data-constraints="@Required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="cell-lg-6 offset-top-20">
                                    <div class="form-group">
                                        <label for="contact-us-name" class="form-label form-label-outside"><?php _e( 'Nome' ); ?>:</label>
                                        <input id="contact-us-name" type="text" name="nome_contato" data-constraints="@Required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="cell-lg-6 offset-top-20">
                                    <div class="form-group">
                                        <label for="contact-us-email" class="form-label form-label-outside"><?php _e( 'E-mail' ); ?>:</label>
                                        <input id="contact-us-email" type="email" name="email_contato" data-constraints="@Required @Email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="cell-lg-6">
                                    <div class="form-group">
                                        <label for="contact-us-telefone" class="form-label form-label-outside"><?php _e( 'Telefone' ); ?>:</label>
                                        <input id="contact-us-telefone" type="text" name="telefone_contato" data-constraints="@Required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="cell-lg-6">
                                    <div class="form-group">
                                        <label for="contact-us-estado" class="form-label form-label-outside"><?php _e( 'Estado' ); ?>:</label>
                                        <input id="contact-us-estado" type="text" name="estado_contato" data-constraints="@Required" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="group-sm text-center text-lg-left offset-top-30">
                                <button type="submit" class="btn btn-danger"><?php _e( 'Enviar' ); ?></button>
                                <button type="reset" class="btn btn-default"><?php _e( 'Limpar' ); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php
            $banner_revendedor = get_field( 'banner_revendedor' );
            if ( $banner_revendedor ) {
        ?>
                <div class="banner-revendedor">
                    <img src="<?php echo $banner_revendedor; ?>">
                </div>
        <?php } ?>
    </main>
    <?php
            }
            wp_reset_postdata();
        }
    ?>
<?php get_footer(); ?>