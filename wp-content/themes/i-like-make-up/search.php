<?php
$configs = get_theme_options();
get_header();
?>
<!-- Page-->
<div class="page text-center">
  <?php include 'logo.php'; ?>
  <!-- Page Head-->
  <header class="page-head slider-menu-position">
    <?php include 'nav-bar.php'; ?>
    <div class="context-dark">
      <!-- Modern Breadcrumbs-->
      <section style="background: url('<?php echo get_template_directory_uri(); ?>/images/background-04-1920x750.jpg') center no-repeat; background-size: cover; " class="breadcrumb-modern bg-gray-darkest">
        <div class="shell section-top-98 section-bottom-34 section-md-bottom-66 section-md-98 section-lg-top-110 section-lg-bottom-41">
          <h2 class="veil reveal-md-block offset-top-30"><span class="big"><?php _e( 'Busca', 'ilmu' ); ?></span></h2>
          <ul class="list-inline list-inline-dashed">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><?php _e( 'Busca', 'ilmu' ); ?></li>
          </ul>
        </div>
      </section>
    </div>
  </header>
  <!-- Page Contents-->
  <main class="page-content section-98 section-sm-110">
        <div class="shell">
            <div class="range range-md-center range-lg-right">
              <div class="cell-md-8 inset-md-right-30">
                  <!-- Blog Classic-->
                  <section>
                    <?php
                      if ( have_posts() ) {
                        while ( have_posts() ) {
                          the_post();
                    ?>
                    <!-- Post Classic-->
                    <article class="post post-classic">
                        <?php if ( has_post_thumbnail() ) { ?>
                        <!-- Post media-->
                        <header class="post-media">
                          <div data-photo-swipe="gallery">
                            <a class="thumbnail-classic" href="<?php the_permalink(); ?>" target="_self" title="<?php the_title(); ?>">
                                <?php the_post_thumbnail( 'posts-blog' ); ?>
                              </a>
                          </div>
                        </header>
                        <?php } ?>
                        <!-- Post content-->
                        <section class="post-content text-left offset-top-41">
                          <div class="unit unit-sm unit-sm-horizontal unit-sm-inverse">
                              <div class="unit-body">
                                <!-- Post Meta-->
                                <div class="post-meta text-dark">
                                  <span class="text-middle icon-xxs text-danger mdi mdi-arrow-right"></span>
                                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="text-middle small"><?php echo get_the_date('d/m/Y'); ?></time>
                                </div>
                                <!-- Post Title-->
                                <h3 class="text-regular text-darker offset-top-10"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <!-- Post Body-->
                                <div class="post-body">
                                    <?php the_excerpt(); ?>
                                </div>
                              </div>
                          </div>
                        </section>
                    </article>
                    <hr class="hr bg-lighter offset-top-41 offset-sm-top-66"/>
                    <div class="offset-top-41 offset-sm-top-66"></div>
                    <?php
                        }
                        $args = array(
                          'big_number' => 999999999,
                      'base'       => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
                      'format'     => '?paged=%#%',
                      'current'    => max( 1, get_query_var( 'paged' ) ),
                      'total'      => $blog->max_num_pages,
                      'prev_next'  => false,
                      'end_size'   => 1,
                      'mid_size'   => 4,
                      'type'       => 'list',
                );
            ?>
            <div class="offset-top-66">
              <nav>
                <?php echo sa_get_bootstrap_paginate_links( $blog ); ?>
              </nav>
            </div>
            <?php
                        wp_reset_postdata();
                      }
                    ?>
                  </section>
              </div>

              <?php get_sidebar( 'blog' ); ?>
        </div>
  </main>
<?php get_footer(); ?>