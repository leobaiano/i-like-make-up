<?php
	$page_object = $wp_query->get_queried_object();
	$slug = $page_object->post_name;
	$home = '';
	$quem_somos = '';
	$marcas = '';
	$seja_um_revendedor = '';
	$blog = '';
	$contato = '';

	switch ( $slug ) {
		case 'quem-somos':
			$quem_somos = 'active';
			break;
		case 'marcas':
			$marcas = 'active';
			break;
		case 'seja-um-revendedor':
			$seja_um_revendedor = 'active';
			break;
		case 'blog':
			$blog = 'active';
			break;
		case 'contato':
			$contato = 'active';
			break;
	}
	if ( is_category() ) {
		$blog = 'active';
	}
	if( is_singular( 'post' ) ) {
		$blog = 'active';
	}
	if ( is_tax( 'marcas-produtos' ) ) {
		$marcas = 'active';
	}
?>

<!-- RD Navbar Transparent-->
<div class="rd-navbar-wrap">
	<nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" class="rd-navbar container rd-navbar-floated rd-navbar-dark" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
		<div class="rd-navbar-inner">
	  		<!-- RD Navbar Top Panel-->
	  		<div class="rd-navbar-top-panel context-dark bg-danger">
				<div class="left-side">
		  			<address class="contact-info text-left"><a href="callto:<?php echo $configs['telefone']; ?>" class="social-topo">
		  				<span class="icon mdi mdi-cellphone-android"></span><span class="text-middle"><?php echo $configs['telefone']; ?></span></a>
		  			</address>
				</div>
				<div class="center">
					<address class="contact-info text-left"><a href="#" class="social-topo"><span class="icon mdi mdi-map-marker-radius"></span><span class="text-middle"><?php echo $configs['endereco']; ?></span></a></address>
				</div>
				<div class="right-side">
				  	<ul class="list-inline list-inline-sm">
						<li><a href="<?php echo $configs['facebook']; ?>" class="social-topo fa fa-facebook" target="_blank"></a></li>
						<li><a href="<?php echo $configs['google']; ?>" class="social-topo fa fa-google-plus" target="_blank"></a></li>
						<li><a href="<?php echo $configs['instagram']; ?>" class="social-topo fa fa-instagram" target="_blank"></a></li>
						<li><a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511945455468" class="social-topo fa fa-whatsapp" target="_blank"></a></li>
				  	</ul>
				</div>
			</div>
	  		<!-- RD Navbar Panel -->
	  		<div class="rd-navbar-panel">
				<!-- RD Navbar Toggle-->
				<button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
				<!-- RD Navbar Top Panel Toggle-->
				<button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel" class="rd-navbar-top-panel-toggle"><span></span></button>
				<!--Navbar Brand-->
				<div class="rd-navbar-brand"><a href="<?php echo home_url(); ?>"><img width='253' height='37' src='<?php echo $configs['logo']; ?>' alt=''/></a></div>
	  		</div>
	  		<div class="rd-navbar-menu-wrap">
				<div class="rd-navbar-nav-wrap">
		  			<div class="rd-navbar-mobile-scroll">
						<!--Navbar Brand Mobile-->
						<div class="rd-navbar-mobile-brand"><a href="<?php echo home_url(); ?>"><img width='253' height='37' src='<?php echo $configs['logo']; ?>' alt=''/></a></div>
						<div class="form-search-wrap">
			  				<!-- RD Search Form-->
			  				<form action="search-results.html" method="GET" class="form-search rd-search">
								<div class="form-group">
				  					<label for="rd-navbar-form-search-widget" class="form-label form-search-label form-label-sm">Search</label>
				  					<input id="rd-navbar-form-search-widget" type="text" name="s" autocomplete="off" class="form-search-input input-sm form-control form-control-gray-lightest input-sm"/>
								</div>
								<button type="submit" class="form-search-submit"><span class="mdi mdi-magnify"></span></button>
			  				</form>
						</div>
						<!-- RD Navbar Nav-->
						<ul class="rd-navbar-nav">
			  				<li class="<?php echo $home; ?>"><a href="<?php echo home_url(); ?>"><span>Home</span></a></li>
			  				<li class="<?php echo $quem_somos; ?>"><a href="<?php echo home_url( 'quem-somos'); ?>"><span>Quem somos</span></a></li>
			  				<li class="<?php echo $marcas; ?>"><a href="<?php echo home_url( 'marcas'); ?>"><span>Marcas</span></a></li>
			  				<li class="<?php echo $seja_um_revendedor; ?>"><a href="<?php echo home_url( 'seja-um-revendedor'); ?>"><span>Seja um revendedor</span></a></li>
			  				<li class="<?php echo $blog; ?>"><a href="<?php echo home_url( 'blog'); ?>"><span>Blog</span></a></li>
			  				<li class="<?php echo $contato; ?>"><a href="<?php echo home_url( 'contato'); ?>"><span>Contato</span></a></li>
						</ul>
		  			</div>
				</div>
				<!--RD Navbar Search-->
				<div class="rd-navbar-search rd-navbar-search-top-panel">
					<a data-rd-navbar-toggle=".rd-navbar-inner,.rd-navbar-search" href="#" class="rd-navbar-search-toggle mdi"><span></span></a>
		  			<form action="search-results.html" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
						<div class="form-group">
			  				<label for="rd-navbar-search-form-input" class="form-label"><?php _e( 'Faça sua busca', 'ilmu' ); ?></label>
			  				<input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
						</div>
						<div id="rd-search-results-live" class="rd-search-results-live">   </div>
		  			</form>
				</div>
	  		</div>
		</div>
  	</nav>
</div>