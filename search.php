<?php get_header() ?>
<section id="primary" class="content-area">
  <div id="content" class="site-content" role="main">

    <?php if ( have_posts() ) : ?>

    <header class="page-header text-center">
      <h1 class="page-title"><?php printf( __( 'Resultados por: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </header><!-- .page-header -->

    <div class="container">
      <div class="col-md-10 col-md-offset-1">
      <div class="row">
      <?php $i = 0; ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <?php $i++; ?>
        <div class="col-md-8 col-md-offset-2">

          <div class="text-center">
            
            <h4><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p><?php the_content() ?></p>
          </div>
        </div>
              <?php if ($i == 2) {
                  echo '</div><div class="row">';
                  $i = 0;
              } ?>

        <?php endwhile; ?>
</div>


        <?php else : ?>
        <div class="nada-encontrado text-center">
        <br>
        <p> <img src="<?php bloginfo('template_url')?>/images/logo-estoque_02.png" height="183" width="165" alt=""></p>
        <h1>Desculpe, não econtrados nada com o termo inserido.</h1>
        <br><br><br><br><br>
        <p><a href="http://estoquetudo.com.br">Voltar para home</a></p>
        <br>
        </div>


        <?php endif; ?>
      </div>

    </div>
    <?php get_footer(); ?>