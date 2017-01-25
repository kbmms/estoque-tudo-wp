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
    <div class="container">
 

    <div class="col-md-8">
    <div class="row btn-mais-menos">
      <ul class="">
        <li class="menos"  id="menos"><img src="<?php bloginfo('template_url'); ?>/images/Amenos.gif" alt=""></li>
        <li class="normal" id="normal"><img src="<?php bloginfo('template_url'); ?>/images/Apadrao.gif" alt=""></li>
        <li class="mais" id="mais"><img src="<?php bloginfo('template_url'); ?>/images/Amais.gif" alt=""></li>
      </ul>
    </div>

    <?php if( is_single( array( 'seguranca', 'rapidez', 'preco-justo', 'localizacao' ) ) ){ ?>
        <div class="col-md-12 foto-blog hidden">
          <?php the_post_thumbnail('full', array('class' => 'img-responsive')) ?>
        </div>
     <?php } else { ?>
        <div class="col-md-12 foto-blog">
          <?php the_post_thumbnail('full', array('class' => 'img-responsive')) ?>
        </div>      
    <?php  } ?>

        <div class="single col-md-12 content">
         <?php $date_new = get_the_time("F Y"); ?>
         <p>Publicado em: <strong><?php echo $date_new; ?></strong></p> 
         <p>Categoria: <strong><?php echo '<span>'. get_the_category( $id )[0]->name .'</span>'; ?></strong> </p>
         <h1><?php the_title() ?></h1> 
         <br>
         <?php the_content() ?>
         <div class="fb-comments" data-href="http://www.estoquetudo.com.br" data-width="100%" data-numposts="5"></div>
          <br>
         <a class="back" href="javascript:window.history.go(-1)">< voltar</a>
       </div>

     </div>
<div class="col-md-4 sidebar-single">

       <?php if( is_single( array( 'seguranca', 'rapidez', 'preco-justo', 'localizacao' ) ) ){ ?>
<h1><span class="text-light">NOSSOS</span> <span class="text-bold">DIFERENCIAIS</span></h1>
   <?php $query = new WP_Query( 'post_type=diferenciais&order=ASC&showposts=-1' ); ?>
   <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="row">
    <div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-0 col-md-offset-0 col-xs-8 col-xs-offset-2">
      <a href="<?php the_permalink(); ?> ">
      <div class="col-md-12 lado-foto-2 dif-fotos text-center">
        <div class="bg-hover"></div>
        <div class="block-opacity-info">
         <p><?php echo excerpt('20'); ?></p>
       </div>


       <p> <?php the_post_thumbnail(); ?></p>  
       
     </div>
     </a>
     <br>
     <div class="col-md-12 diferenciais-single text-center">
      <span><a href="<?php the_permalink() ?> "><?php the_title(); ?></a> </span>
    </div>                  
  </div>
  </div>
  <br><br>
        <?php endwhile;
        wp_reset_postdata();
        else : ?>
        <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
        <?php endif; ?>
       <?php } else { ?>

     <div class="col-md-12 categoria-looping">
      <ul>
        <?php wp_list_categories( array(
          'orderby'    => 'name',
          'exclude' => '1',
          'show_count' => true
              // 'exclude'    => array( 10 )
          ) ); ?> 
        </ul>
      </div>        
            <?php  } ?>  
            </div>    
    </div>
  </div>

  <?php get_template_part( 'templates/link-com-banners', 'link-com-banners' ); ?>

<!--            <div class="container-fluid chamadas-fluid">
                 <div class="container">
                    <div class="col-md-6 col-md-offset-0 col-xs-6 col-xs-offset-3">
                      <img src="images/imagem-interna_um_03.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-6 col-md-offset-0 col-xs-6 col-xs-offset-3">
                      <img src="images/imagem-interna_dois_03.jpg" class="img-responsive" alt="">
                    </div>
                 </div>
               </div> -->
             <?php endwhile; else : ?>
             <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
           <?php endif; ?>           
           <?php get_footer(); ?>