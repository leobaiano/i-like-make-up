<?php
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

if ( ! function_exists( 'setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @return void
	 */
	function setup_features() {

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain( 'ilmu', get_template_directory() . '/languages' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Menu Principal', 'ilmu' )
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Add post_formats
		 */
		add_theme_support( 'post-formats', array( 'video', 'audio', 'gallery' ) );

		/**
		 * Add thumbnail  size
		 */
		add_image_size( 'banner-gigante', 1920, 850, true );
		add_image_size( 'banner-grande', 1920, 750, true );
		add_image_size( 'banner-quadrado', 480, 480, true );
		add_image_size( 'posts-blog', 770, 434, true );
		add_image_size( 'banner-pages', 1920, 400, true );

		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 1920,
			'height'        => 939,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => '',
			'uploads'       => true,
		);


		/**
		 * Support The Excerpt on pages.
		 */
		add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		// add_theme_support( 'title-tag' );
	}
}

add_action( 'after_setup_theme', 'setup_features' );

/**
 * Load site scripts.
 *
 * @return void
 */
function ilmu_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	wp_enqueue_style( 'ilmu-fonts', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,500,700,700italic', array(), null, 'all' );
	wp_enqueue_style( 'ilmu-principal', $template_url . '/css/style.css?ver=' . md5(date('i')), array(), null, 'all' );
	wp_enqueue_style( 'ilmu-generic', $template_url . '/css/generic.css?ver=' . md5(date('i')), array(), null, 'all' );

	// jQuery.
	wp_enqueue_script( 'jquery' );

	// General scripts.
	// Main.
	wp_enqueue_script( 'ilmu-main', $template_url . '/js/core.min.js?ver=' . md5(date('i')), array( 'jquery' ), null, true );
	wp_enqueue_script( 'ilmu-script', $template_url . '/js/script.js?ver=' . md5(date('i')), array( 'jquery' ), null, true );
	wp_enqueue_script( 'ilmu-generic', $template_url . '/js/generic.js?ver=' . md5(date('i')), array( 'jquery' ), null, true );
}

add_action( 'wp_enqueue_scripts', 'ilmu_enqueue_scripts', 1 );

// Ocultando a Admin Bar
add_filter( 'show_admin_bar', '__return_false' );

function get_theme_options() {
	$obj = new WP_Query( array( 'post_type' => 'gerenciadordotema', 'posts_per_page' => 1 ) );
	if ( $obj->have_posts() ) {
		while ( $obj->have_posts() ) {
			$obj->the_post();
			return array(
						'logo'				=> get_field( 'logo' ),
						'telefone'			=> get_field( 'telefone' ),
						'endereco'			=> get_field( 'endereco' ),
						'facebook'			=> get_field( 'facebook' ),
						'google'			=> get_field( 'google' ),
						'instagram'			=> get_field( 'instagram' ),
						'endereco'			=> get_field( 'endereco' ),
						'texto_bem_vindo'	=> get_field( 'texto_bem_vindo' ),
						'texto_funcionarios'	=> get_field( 'texto_funcionarios' ),
						'texto_loja_fisica'	=> get_field( 'texto_loja_fisica' ),
						'texto_atacado_e_varejo'	=> get_field( 'texto_atacado_e_varejo' ),
						'banner_rodape_da_home'	=> get_field( 'banner_rodape_da_home' ),
					);
		}
		wp_reset_postdata();
	} else {
		return false;
	}
}
function get_thumbnail_src( $thumb_id, $size ) {
	$thumb_url = wp_get_attachment_image_src( $thumb_id, $size, true);
	return $thumb_url[0];
}
function sa_get_bootstrap_paginate_links( $query ) {
	$view = '';
	$current = max( 1, absint( get_query_var( 'paged' ) ) );
	$pagination = paginate_links( array(
		'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
		'format' => '?paged=%#%',
		'current' => $current,
		'total' => $query->max_num_pages,
		'type' => 'array',
		'prev_text' => '&laquo;',
		'next_text' => '&raquo;',
	) );
	if ( ! empty( $pagination ) ) {
		$view .= '<ul class="pagination pagination-sm">';
			$view .= '<li><a href="#" aria-label="Previous"><span aria-hidden="true" class="mdi mdi-chevron-double-left"></span></a></li>';
			foreach ( $pagination as $key => $page_link ) {
					if ( strpos( $page_link, 'current' ) !== false ) {
						$class = ' active';
					} else {
						$class = '';
					}
					$view .= '<li class="' . $class . '>' . $page_link . '</li>';
			}
			$view .= '<li><a href="#" aria-label="Next"><span aria-hidden="true" class="mdi mdi-chevron-double-right"></span></a></li>';
		$view .= '</ul>';
	}
	return $view;
}