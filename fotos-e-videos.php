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
            <?php the_content(); ?>
<!--             <div class="col-md-6">
              <img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive">
            </div>
            <div class="col-md-6 texto-boxes">
            <div class="row">
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>              
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>              
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>               
            </div>


                           
          </div> -->
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
          <?php echo do_shortcode("[huge_it_videogallery id='1']"); ?>
<!--             <div class="col-md-6">
              <img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive">
            </div>
            <div class="col-md-6 texto-boxes">
            <div class="row">
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>              
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>              
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>
              <div class="col-md-4"><img src="images/estoque_tudo_como_guardar_03.jpg"  alt="" class="img-responsive"></div>               
            </div>


                           
          </div> -->
        </div>
      </div>


    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  <br><br>

  <?php get_template_part( 'templates/link-com-banners', 'link-com-banners' ); ?>
  <?php get_footer(); ?>