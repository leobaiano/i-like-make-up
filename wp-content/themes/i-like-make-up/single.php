<?php
$configs = get_theme_options();
get_header();

$post_thumbnail_id = get_post_thumbnail_id( 39 );
$imagem_do_topo = wp_get_attachment_image_src( $post_thumbnail_id, 'full', true );
?>
<!-- Page-->
<div class="page text-center">
	<?php include 'logo.php'; ?>
	<!-- Page Head-->
	<header class="page-head slider-menu-position">
		<?php include 'nav-bar.php'; ?>
		<div class="context-dark">
			<!-- Modern Breadcrumbs-->
			<section style="background: url('<?php echo $imagem_do_topo[0]; ?>') center no-repeat; background-size: cover; " class="breadcrumb-modern bg-gray-darkest">
				<div class="shell section-top-98 section-bottom-34 section-md-bottom-66 section-md-98 section-lg-top-110 section-lg-bottom-41">
					<h2 class="veil reveal-md-block offset-top-30"><span class="big"><?php _e( 'Blog', 'ilmu' ); ?></span></h2>
					<ul class="list-inline list-inline-dashed">
						<li><a href="<?php echo home_url(); ?>">Home</a></li>
						<li><?php _e( 'Blog', 'ilmu' ); ?></li>
					</ul>
				</div>
			</section>
		</div>
	</header>
	<!-- Page Contents-->
	<main class="page-content section-98 section-sm-110 text-sm-left">
        <div class="shell">
            <div class="range">
                <div class="cell-md-8">
                <?php
                    if ( have_posts() ) {
                        while( have_posts() ) {
                            the_post();

                            $post_thumbnail_id = get_post_thumbnail_id();
                            $imagem_do_topo = wp_get_attachment_image_src( $post_thumbnail_id, 'full', true );
                ?>
                <!-- Post Wide-->
                <article class="post post-default text-left">
                    <!-- Post Header-->
                    <div class="header post-header">
                        <!-- Post Meta-->
                        <ul class="post-controls list-inline list-inline-sm p text-dark">
                            <li>
                                <span class="text-middle icon-xxs text-danger mdi mdi-clock"></span>
                                <time datetime="2016-01-01" class="text-middle"><?php echo get_the_date(); ?></time>
                            </li>
                            <li>
                                <span class="text-middle icon-xxs text-danger mdi mdi-account-outline">&nbsp;</span>
                                <span class="text-middle"><?php the_author(); ?> </span>
                            </li>
                            <li>
                                <span class="text-middle icon-xxs text-danger mdi mdi-folder-outline">&nbsp;</span>
                                <?php
                                    $categorias = get_the_category();
                                    if ( $categorias ) {
                                        $link = get_category_link( $categorias[0] );
                                ?>
                                <a href="<?php echo $link; ?>" class="text-middle"><?php echo $categorias[0]->name; ?></a>
                                <?php
                                    }
                                ?>
                            </li>
                        </ul>
                        <!-- Post Meta-->
                        <h3 class="text-regular text-darker post-title"><?php the_title(); ?></h3>
                        <!-- Post Media-->
                    </div>
                    <!-- PostContent-->
                    <section class="post-content offset-top-41"></section>
                </article>
                <a class="thumbnail-classic" data-photo-swipe-item="" data-size="1200x800" href="<?php echo $imagem_do_topo[0]; ?>">
                    <figure><img width="770" height="434" src="<?php echo $imagem_do_topo[0]; ?>" alt="<?php the_title(); ?>"/>
                    </figure>
                </a>
                <?php the_content(); ?>
                <div class="offset-top-50">
                    <div class="pull-sm-left">
                        <p class="big text-bold"><span class="big"><?php _e( 'Compartilhe o post:', 'ilmu' ); ?></span></p>
                    </div>
                    <ul class="list-inline list-inline-sm list-inline-danger offset-top-10 offset-sm-top-0 pull-sm-right">
                        <li><a href="http://facebook.com/share.php?u=<?php the_permalink() ?>&amp;t=<?php echo urlencode(the_title('','', false)) ?>" class="fa fa-facebook" target="_blank"></a></li>
                        <li><a href="https://plus.google.com/share?url=<?php the_permalink() ?>" class="fa fa-google-plus" target="_blank"></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <?php
                        }
                        wp_reset_postdata();
                    }
                ?>
                <hr class="offset-top-66"/>
    </div>
    <?php get_sidebar( 'blog' ); ?>
</main>
<?php get_footer(); ?>