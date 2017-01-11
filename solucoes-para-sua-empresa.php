        <?php /** Template Name: Soluções para você */ ?>
       <?php get_header(); ?>
 <div class="bg-internas container-fluid">
        </div>

      <div class="container-fluid interna-fluid-texto">
        <div class="container text-center">
              <?php wp_custom_breadcrumbs(); ?>
              <h1><span class="text-light"></span> <span class="text-bold"><?php the_title(); ?></span></h1>          
        </div>
      </div>

      <div class="container-fluid">
        <div class="container calcule-espaco-title text-center">
          <h2><?php the_field( 'subtitulos', $page->ID ); ?></h2>
        </div>
      </div>
  <br><br>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          
<div class="container-fluid para-sua-empresa-fluid">
  <div class="container text-center para-sua-empresa-texto-um">
  <?php the_content() ?>
  </div>
</div>

<div class="container-fluid solucoes-fluid-itens">
  <div class="container text-center container-itens">

    <div class="row linha-um">
                  <?php
        $args = array(
          'order' => 'ASC',
          'post_type' => 'page',
          'post_parent' => $post->ID,
          'post_status' => 'publish',
          'post_per_page' => -1,
          'show_posts' => -1,
          'numberposts' => -1
        );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>


    <div class="col-md-4 text-center itens-solucoes">
      <p> <?php the_post_thumbnail(); ?></p>
      <p><?php the_title(); ?></p>
    </div>
  <?php endforeach; wp_reset_postdata();?>


    </div>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<!--     <div class="row linha-dois">
    <div class="col-md-4 text-center itens-solucoes">
      <p><img src="images/solucoes/voce/item_quatro_03.png" height="171" width="171" alt=""></p>
      <p>Guarda Móveis</p>
    </div> 
    <div class="col-md-4 text-center itens-solucoes">
      <p><img src="images/solucoes/voce/item_cinco_03_03.png" height="171" width="171" alt=""></p>
      <p>Coleções</p>
    </div>
    <div class="col-md-4 text-center itens-solucoes">
      <p><img src="images/solucoes/voce/item_seis_03.png" height="171" width="171" alt=""></p>
      <p>Objetos de Lazer</p>
    </div>            
    </div> --> 
          <a href="<?php echo get_site_url(); ?>/solucoes/solucoes-para-voce/">Conheça soluções para Pessoa Físicas</a> 
  </div>
</div>
  
<?php get_template_part( 'templates/link-com-banners', 'link-com-banners' ); ?>
<?php get_footer(); ?>