      <?php /** Template Name: Fotos e Vídeos */ ?>
      <?php get_header(); ?>
      <div class="bg-internas container-fluid">
      </div>
     
        <div class="container-fluid interna-fluid-texto">
          <div class="container text-center">
            <?php wp_custom_breadcrumbs(); ?>
            <h1><span class="text-light"></span> <span class="text-bold">FOTOS E VÍDEOS</span></h1>          
          </div>
        </div>

        <div class="container-fluid">
          <div class="container calcule-espaco-title text-center">
            <h2>Fotos</h2>
          </div>
        </div>
        <br><br>

        <div class="container-fluid">
          <div class="container">
    <?php $query = new WP_Query( array('post_type' => 'post', 'p' => 276 )); ?>

                 <?php if ( $query->have_posts() ) : ?>

                  <?php $i = 0; ?>

                 <?php while ( $query->have_posts() ) : $query->the_post(); ?>

             



              <?php  if ( get_post_gallery() ) :



                    $gallery = get_post_gallery(get_the_ID(), false);

                    $ids = explode( ",", $gallery['ids'] ); ?>



                          <?php foreach( $ids as $id )

                          {

                            $full = wp_get_attachment_url( $id );

                            $mini = wp_get_attachment_image( $id, 'large' );

                            $title = get_the_title( $id );

                              ?>

                              <?php $i++; ?>

                            <a href="<?php echo $full; ?>" class="fancybox-thumb" rel="galeria-plantas">
                            <?php if($i == 1){ ?>
                             <div class="galerias-box col-md-6 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <?php }else{ ?>
                            <div class="galerias-box col-md-2 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <?php } ?>
                                <?php echo $mini; ?>

                             </div>

                            </a>  



                          <?php } ?>



                <?php endif; endwhile; endif; wp_reset_postdata(); ?>   
          </div>
        </div>

        <br>
        <div class="container-fluid">
          <div class="container calcule-espaco-title text-center">
            <h2>Vídeos</h2>
          </div>
        </div>
        <br><br>

        <div class="container-fluid">
          <div class="container">
               <?php $query = new WP_Query( 'post_type=videos&order=ASC&showposts=-1' ); ?>
               <?php  $i = 0; ?>
               <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php  $i++; ?>

            <?php if($i == 1){ ?>
            <div class="galerias-box col-md-6 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
             <?php }else{ ?>
             <div class="galerias-box col-md-2 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
              <?php } ?>
              <a class="fancybox fancybox.iframe" data-type="iframe" href="<?php the_field('url_do_video') ?>">

                <?php if (get_field('capa_do_video')) { ?>
                <img src="<?php the_field('capa_do_video') ?> "  alt="" class="width-100">
                <?php }else{ ?>
                <img src="http://localhost/estoque-tudo-wp/wp-content/uploads/2017/01/image8.png"  alt="" class="width-100">
                <?php } ?>
                </a>
            </div>



               <?php endwhile;
               wp_reset_postdata();
               else : ?>
               <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
               <?php endif; ?>


                </div>
              </div>


          <br><br>

          <?php get_template_part( 'templates/link-com-banners', 'link-com-banners' ); ?>
          <?php get_footer(); ?>