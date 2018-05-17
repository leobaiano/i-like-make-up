<div class="cell-md-4 offset-top-66 offset-md-top-0">
  		<!-- Section Blog Modern-->
  		<aside class="text-left inset-md-left-20">
    		<!-- Search Form-->
    		<p class="big text-medium text-uppercase text-spacing-60"><?php _e( 'Busca', 'ilmu' ); ?></p>
    		<div class="text-subline"></div>
    		<div class="offset-top-34">
	<!-- RD Search Form-->
                 <form action="<?php echo home_url(); ?>" method="GET"">
                	<div class="form-group">
                    	<label for="blog-sidebar-2-form-search-widget" class="form-label form-search-label form-label-sm"><?php _e( 'Busca', 'ilmu' ); ?></label>
                        	<input id="blog-sidebar-2-form-search-widget" type="text" name="s" autocomplete="off" class="form-search-input input-sm form-control input-sm"/>
                    </div>
                    <button type="submit" class="form-search-submit"><span class="mdi mdi-magnify"></span></button>
            	</form>
    		</div>
    		<div class="range offset-top-41">
      			<div class="cell-xs-6 cell-md-12">
          		<!-- Category-->
          		<p class="big text-medium text-uppercase text-spacing-60"><?php _e( 'Categorias', 'ilmu' ); ?></p>
          		<div class="text-subline"></div>
        			<ul class="list list-marked offset-top-30">
                        <?php
                            $categorias = get_categories( array(
                                'orderby' => 'name',
                                'order'   => 'ASC'
                            ) );
                            if ( $categorias ) {
                                foreach( $categorias as $categoria ) {
                                    $link = esc_url( get_category_link( $categoria->term_id ) );
                        ?>
          				          <li><a href="<?php echo $link; ?>"><?php echo $categoria->name; ?> <span class="text-dark">(<?php echo $categoria->count; ?>)</span></a></li>
                        <?php
                                }
                            }
                        ?>
        			</ul>
      			</div>
      		</div>
  		</aside>
	</div>
</div>