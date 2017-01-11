       <?php /** Template Name: Como Guardar */ ?>
       <?php get_header(); ?>
<div class="bg-internas container-fluid">
        </div>

      <div class="container-fluid interna-fluid-texto">
        <div class="container text-center">
              <?php wp_custom_breadcrumbs(); ?>
              <h1><span class="text-light"></span> <span class="text-bold">COMO GUARDAR</span></h1>          
        </div>
      </div>

      <div class="container-fluid">
        <div class="container calcule-espaco-title text-center">
          <h2>Saiba como guardar seus objetos no estoque</h2>
        </div>
      </div>
  <br><br>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="container-fluid">
        <div class="container">
            <div class="col-md-6">
              <?php the_post_thumbnail('full', array('class'=> 'img-responsive')) ?>
            </div>
            <div class="col-md-6 texto-boxes">
               <?php the_content() ?> 
            </div>
        </div>
      </div>

 <?php endwhile; else : ?>
  <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
<?php endif; ?>
                     


<?php get_template_part( 'templates/como-funciona-itens', 'como-funciona-itens' ); ?>



<br><br>
<?php get_template_part( 'templates/link-com-banners', 'link-com-banners' ); ?>

 <?php get_footer(); ?>