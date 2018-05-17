<?php $configs = get_theme_options(); ?>
<!-- Page Footer-->
<footer class="section-relative section-top-66 section-bottom-34 page-footer bg-gray-base context-dark">
	<div class="shell">
		<div class="range range-sm-center text-lg-left">
			<div class="cell-sm-12">
		  		<div class="range range-xs-center">
					<div class="cell-xs-10 cell-sm-3 offset-top-66 cell-sm-push-2 offset-sm-top-0 cell-sm-6 cell-lg-4 cell-lg-push-4">
			  			<div class="inset-lg-left-20">
							<p class="text-uppercase text-spacing-60 text-bold"><?php _e( 'Newsletter', 'ilmu' ); ?></p>
							<p class="offset-top-20 text-left">
								<?php _e( 'Periodicamente nós enviamos e-mails com diversas dicas e promoções para as pessoas interessadas, preencha o campo abaixo com seu e-mail para fazer parte da nossa lista e ficar por dentro sobre as novidades.', 'ilmu' ); ?>
							</p>
							<div class="offset-top-30">
								<form method="post" action="">
						  			<div class="form-group">
										<div class="input-group input-group-sm">
											<span class="input-group-addon"><span class="input-group-icon mdi mdi-email"></span></span>
							  				<input placeholder="<?php _e( 'Seu e-mail', 'ilmu' ); ?>" type="email" name="email" data-constraints="@Required @Email" class="form-control"/><span class="input-group-btn">
											<input type="submit" class="btn btn-sm btn-danger" value="<?php _e( 'Assine', 'ilmu' ); ?>"></span>
										</div>
						  			</div>
						  			<div id="form-subscribe-footer" class="form-output"></div>
								</form>
							</div>
			  			</div>
					</div>
					<div class="cell-xs-10 cell-sm-3 offset-top-66 cell-sm-push-1 offset-sm-top-0 cell-sm-6 cell-lg-3 cell-lg-push-1">
			  			<!-- Footer brand-->
			  			<div class="footer-brand"><a href="index.html">
			  				<img width='253' height='37' src='<?php echo $configs['logo']; ?>' alt='I like Make Up'/></a>
			  			</div>
			  			<div class="offset-top-50 text-xs-center text-lg-left">
					  		<ul class="list-inline">
								<li><a href="<?php echo $configs['facebook']; ?>" class="social-rodape fa fa-facebook icon-xxs icon-circle icon-darkest-filled" target="_blank"></a></li>
								<li><a href="<?php echo $configs['google']; ?>" class="social-rodape fa fa-google-plus icon-xxs icon-circle icon-darkest-filled" target="_blank"></a></li>
								<li><a href="<?php echo $configs['instagram']; ?>" class="social-rodape fa fa-instagram icon-xxs icon-circle icon-darkest-filled" target="_blank"></a></li>
								<li><a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511945455468" class="social-rodape fa fa-whatsapp icon-xxs icon-circle icon-darkest-filled" target="_blank"></a></li>
					  		</ul>
			  			</div>
			  			<p class="text-darker-2 offset-top-20"> I Like Make Up &copy; <span id="copyright-year"></span</p>
					</div>
		  		</div>
			</div>
	  	</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>