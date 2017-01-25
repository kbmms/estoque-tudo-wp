      <?php /** Template Name: Sobre Nós */ ?>
      <?php get_header(); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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

        <div class="container-fluid">
          <div class="container">
            <div class="col-md-6">
              <?php the_post_thumbnail('full',array('class'=> 'img-responsive')); ?>
            </div>
            <div class="col-md-6 texto-boxes">
            <div class="row btn-mais-menos internas">
              <ul class="">
                <li class="menos"  id="menos"><img src="<?php bloginfo('template_url'); ?>/images/Amenos.gif" alt=""></li>
                <li class="normal" id="normal"><img src="<?php bloginfo('template_url'); ?>/images/Apadrao.gif" alt=""></li>
                <li class="mais" id="mais"><img src="<?php bloginfo('template_url'); ?>/images/Amais.gif" alt=""></li>
              </ul>
            </div> 
            <div class="content">
              <?php the_content(); ?>
            </div>           
              
            </div>
          </div>
        </div>

        



        <div class="container-fluid diferenciais-sobrenos">
         <div class="container text-center diferenciais-text">
           <h1><span class="text-light">NOSSOS</span> <span class="text-bold">DIFERENCIAIS</span></h1>
         </div>
         <div class="container">
           <?php $query = new WP_Query( 'post_type=diferenciais&order=ASC&showposts=-1' ); ?>
           <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


            <div class="col-md-3 col-sm-6 col-sm-offset-0 col-md-offset-0 col-xs-8 col-xs-offset-2">

              <div class="col-md-12 lado-foto-2 dif-fotos text-center">
                <div class="bg-hover"></div>
                <div class="block-opacity-info">
                  <p><?php echo excerpt('20'); ?></p>
                </div>
                <p><?php the_post_thumbnail(); ?></p>  
                
              </div>
              <div class="col-md-12 diferenciais-area-text text-center">
                <span><?php the_title(); ?></span>
                <div class="col-md-12 text-center parag">
                  <?php the_content() ?>
                </div>                     
              </div> 
              
            </div>

          <?php endwhile;
          wp_reset_postdata();
          else : ?>
          <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
        <?php endif; ?>

        
      </div>
    </div>





    <div class="container-fluid mensagem-fluid">
     <div class="container text-center">
       <h1><span class="text-light">MANDE SUA</span> <span class="text-bold">MENSAGEM</span></h1>
     </div>
   </div>
   <div class="container-fluid">
     <div class="container">
       <div class="form-box col-md-10 col-md-offset-1">
        
       <?php echo do_shortcode('[contact-form-7 id="291" title="Formlário Home"]'); ?>
    </div>
  </div>             
</div>









<?php get_template_part( 'templates/link-com-banners', 'link-com-banners' ); ?>
<?php endwhile; else : ?>
  <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>