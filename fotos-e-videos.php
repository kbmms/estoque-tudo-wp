      <?php /** Template Name: Fotos e Vídeos */ ?>
      <?php get_header(); ?>
      <div class="bg-internas container-fluid">
      </div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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


        <div class="container-fluid">
          <div class="container calcule-espaco-title text-center">
            <h2>Vídeos</h2>
          </div>
        </div>
        <br><br>

        <div class="container-fluid">
          <div class="container">

            <div class="col-md-6">
              <a class="fancybox fancybox.iframe" data-type="iframe" href="https://www.youtube.com/embed/bwE8-xw06Dk">
                <img src="http://localhost/estoque-tudo-wp/wp-content/uploads/2017/01/estoque_tudo_blog_post-full_03.jpg"  alt="" class="img-responsive"></a>
              </div>
              <div class="col-md-6 texto-boxes">
                <div class="row">
                  <div class="col-md-4">
                    <a class="fancybox fancybox.iframe" data-type="iframe" href="https://www.youtube.com/embed/bwE8-xw06Dk">
                      <img src="http://localhost/estoque-tudo-wp/wp-content/uploads/2017/01/estoque_tudo_blog_post-full_03.jpg"  alt="" class="img-responsive"></a></div>
                      <div class="col-md-4"><img src="http://localhost/estoque-tudo-wp/wp-content/uploads/2017/01/estoque_tudo_blog_post-full_03.jpg"  alt="" class="img-responsive"></div>
                      <div class="col-md-4"><img src="http://localhost/estoque-tudo-wp/wp-content/uploads/2017/01/estoque_tudo_blog_post-full_03.jpg"  alt="" class="img-responsive"></div>              
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4"><img src="http://localhost/estoque-tudo-wp/wp-content/uploads/2017/01/estoque_tudo_blog_post-full_03.jpg"  alt="" class="img-responsive"></div>
                      <div class="col-md-4"><img src="http://localhost/estoque-tudo-wp/wp-content/uploads/2017/01/estoque_tudo_blog_post-full_03.jpg"  alt="" class="img-responsive"></div>
                      <div class="col-md-4"><img src="http://localhost/estoque-tudo-wp/wp-content/uploads/2017/01/estoque_tudo_blog_post-full_03.jpg"  alt="" class="img-responsive"></div>              
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4"><img src="http://localhost/estoque-tudo-wp/wp-content/uploads/2017/01/estoque_tudo_blog_post-full_03.jpg"  alt="" class="img-responsive"></div>
                      <div class="col-md-4"><img src="http://localhost/estoque-tudo-wp/wp-content/uploads/2017/01/estoque_tudo_blog_post-full_03.jpg"  alt="" class="img-responsive"></div>
                      <div class="col-md-4"><img src="http://localhost/estoque-tudo-wp/wp-content/uploads/2017/01/estoque_tudo_blog_post-full_03.jpg"  alt="" class="img-responsive"></div>               
                    </div>



                  </div>

                </div>
              </div>


            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
          <br><br>

          <?php get_template_part( 'templates/link-com-banners', 'link-com-banners' ); ?>
          <?php get_footer(); ?>