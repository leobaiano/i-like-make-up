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
        <section class="section-top-98 section-md-top-110 text-lg-left">
            <div class="shell">
                <div class="range range-xs-center range-xs-center">
                    <div class="cell-lg-4">
                        <div class="inset-lg-right-80">
                            <h3 class="text-bold"><?php _e( 'Como nos encontrar', 'ilmu' ); ?></h3>
                            <hr class="divider hr-lg-left-0 bg-red"/>
                            <p class="offset-top-41 offset-lg-top-50"><?php the_field( 'sobre_a_loja' ); ?></p>
                            <address class="contact-info offset-top-30 offset-lg-top-50">
                                <div class="h6 text-uppercase text-bold text-danger letter-space-none offset-top-none"><?php the_field( 'nome_da_loja' ); ?></div>
                                <p><?php the_field( 'endereco_da_loja' ); ?></p>
                                <dl class="offset-top-0">
                                    <dt>Telefone</dt>
                                    <dd><a href="callto:<?php the_field( 'telefone_da_loja' ); ?>"><?php the_field( 'telefone_da_loja' ); ?></a></dd>
                                </dl>
                                <dl>
                                    <dt>E-mail:</dt>
                                    <dd><a href="mailto:<?php the_field( 'email_da_loja' ); ?>"><?php the_field( 'email_da_loja' ); ?></a></dd>
                                </dl>
                            </address>
                        </div>
                    </div>
                    <div class="cell-sm-8 offset-top-66 offset-lg-top-0">
                        <h3 class="text-bold"><?php _e( 'Entre em contato' ); ?></h3>
                        <hr class="divider hr-lg-left-0 bg-red"/>
                        <!-- RD Mailform-->
                        <form data-form-output="form-output-global" data-form-type="contact" method="post" action="" class="text-left offset-top-50">
                            <div class="range">
                                <div class="cell-lg-6">
                                    <div class="form-group">
                                        <label for="contact-us-name" class="form-label form-label-outside"><?php _e( 'Nome' ); ?>:</label>
                                        <input id="contact-us-name" type="text" name="nome_contato" data-constraints="@Required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                                    <div class="form-group">
                                        <label for="contact-us-email" class="form-label form-label-outside"><?php _e( 'E-mail' ); ?>:</label>
                                        <input id="contact-us-email" type="email" name="email_contato" data-constraints="@Required @Email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="cell-lg-12 offset-top-20">
                                    <div class="form-group">
                                        <label for="contact-us-message" class="form-label form-label-outside"><?php _e( 'Mensagem' ); ?>:</label>
                                        <textarea id="contact-us-message" name="mensagem_contato" data-constraints="@Required" class="form-control"></textarea>
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
            <div class="offset-top-98 offset-lg-top-124 mapa-rodape">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7938364575975!2d-46.63453628566264!3d-23.53991638469348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5857d472248d%3A0x430d72e39c5fca10!2sRua+25+de+Mar%C3%A7o%2C+1097+-+Centro%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1sen!2sbr!4v1519924309782" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </section>
    </main>
    <?php
            }
            wp_reset_postdata();
        }
    ?>
<?php get_footer(); ?>