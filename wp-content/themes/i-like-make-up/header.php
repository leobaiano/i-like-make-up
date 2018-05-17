<?php // echo basename( get_page_template() ); ?>
<!DOCTYPE html  >
<html class="wide wow-animation smoothscroll scrollTo" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="format-detection" content="telephone=no"/>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon"/>
		<!--[if lt IE 10]>
			<div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="<?php echo get_template_directory_uri(); ?>/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/></a></div>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
		<![endif]-->
		<?php if ( is_home() || is_front_page() ) { ?>
			<title><?php wp_title( '' ); ?></title>
		<?php } else { ?>
			<title><?php single_post_title(); ?></title>
		<?php } ?>
		<?php wp_head(); ?>
  	</head>
  	<body>
<?php if ( is_home() && ! isset( $_GET['cadastro'] ) && empty( $_GET['cadastro'] ) ) { ?>
	<div class="sombra"></div>
	<div class="pupup-newsletter">
		<a href="javascript:;" class="close-newsletter">X</a>
		<h2><?php _e( 'Assine nossa newsletter para receber novidades', 'ilmu' ); ?></h2>
		<p><?php _e( 'Periodicamente nós enviamos e-mails com diversas dicas e promoções para as pessoas interessadas, preencha o campo abaixo com seu e-mail para fazer parte da nossa lista e ficar por dentro sobre as novidades.'); ?></p>
		<form class="popup-newsletter" method="post" action="<?php echo home_url(); ?>/?cadastro=sucesso">
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
<?php } ?>