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
              <?php the_content(); ?>
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
                
                    <form class="form-horizontal">
                    <div class="inputs-box col-md-6">
                      <div class="form-group">
                
                     
                          <input type="text" class="form-control" id="nome" placeholder="Nome *">
                     
                      </div>                      
                    </div>
                    <div class="inputs-box col-md-6">
                      <div class="form-group">
                      
                      
                          <input type="email" class="form-control" id="email" placeholder="Email *">
                
                      </div>                      
                    </div>


                      <div class="form-group">
                    
                        <div class="textarea col-sm-12">
                          <textarea class="form-control" rows="3" placeholder="Mensagem *"></textarea>
                        </div> 
                      </div>
                   
                      <div class="form-group">
                           <div class="col-sm-12">
                          <button type="submit" class="btn btn-default pull-right"> <span class="text-light">Enviar</span> <span class="text-bold">Mensagem</span></button>
                        </div>
                      </div>
                      
                    </form>                 
               </div>
             </div>             
           </div>








  
<?php get_template_part( 'templates/link-com-banners', 'link-com-banners' ); ?>
           <?php endwhile; else : ?>
            <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
          <?php endif; ?>
           <?php get_footer(); ?>