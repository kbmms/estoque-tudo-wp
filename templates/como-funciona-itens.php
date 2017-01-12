 
          <div class="container-fluid">
            <div class="container">
                  <?php
        $args = array(
          'order' => 'ASC',
          'post_type' => 'como-funciona-tipo',
          'post_status' => 'publish',
          'post_per_page' => -1,
          'show_posts' => -1,
          'numberposts' => -1
        );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
 <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
 <div class="col-md-12 como-funciona-text">
    <h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php if (!is_home()) {the_field( 'numero_de_ordem', $page->ID ); ?>. <?php } ?> <?php the_title(); ?></a></h2>
  </div>


                  <div class="col-md-12 lado-foto">
                <div class="bg-hover"></div>
                <div class="block-opacity-info">
                <p><?php the_field( 'descricao', $page->ID ); ?></p>  
                </div>
                 <?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>
                  <span class="contador-blocks"><?php the_field( 'numero_de_ordem', $page->ID ); ?></span>
                </div>
 
</div>
 <?php endforeach; wp_reset_postdata();?>
    </div>
    </div>
