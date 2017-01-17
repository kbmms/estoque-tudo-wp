
<?php get_header(); ?>
<div class="slide container-fluid">
  <ul class="bxslider">
   <?php $query = new WP_Query( 'post_type=slide&order=ASC&showposts=-1' ); ?>
   <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>            
    <li class='item-slide'>
      <div class="texto-slide">
        <?php the_content(); ?>
      </div>              
      <div>
        <?php the_post_thumbnail(); ?>
      </div>
    </li>
  <?php endwhile;
  wp_reset_postdata();
  else : ?>
  <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
<?php endif; ?>
</ul>          
</div>

<div class="container-fluid como-funciona-fluid">
  <div class="container">
    <div class="col-md-4 col-md-offset-4 text-center">
      <h1><span class="text-light">COMO</span> <span class="text-bold">FUNCIONA</span></h1>
    </div>

  </div>
  <?php get_template_part( 'templates/como-funciona-itens', 'como-funciona-itens' ); ?>
</div>



<div class="container-fluid solucoes-fluid">
  <div class="container">
    <div class="block-solucoes col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0">
      <div class="row solucoes-text text-center">
        <span class="text-light">PARA</span> <span class="text-bold">VOCÊ</span>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 solucoes-topics">
          <?php
          $args = array(
            'post_parent' => 15,
            'post_type' => 'page',
            'post_status' => 'publish',
            'post_per_page' => -1,
            'show_posts' => -1,
            'numberposts' => -1
            );
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>                  
          <div class="row">
           <img src="<?php the_field('icone-home') ?>" height="59" width="57" alt="">
           <span><?php the_title(); ?></span>
         </div>
       <?php endforeach; wp_reset_postdata();?>            
       
       <div class="row btn-solucoes text-center">
        <a href="<?php echo get_site_url(); ?>/solucoes/solucoes-para-voce/"><span class="text-light">Soluções para</span> <span class="text-bold">Pessoa Física</span></a>
      </div>                                                                                                  
    </div>
  </div>
</div>
<br class="visible-xs">
<div class="block-solucoes col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0">
  <div class="row solucoes-text text-center">
    <span class="text-light">PARA SUA</span> <span class="text-bold">EMPRESA</span>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2 solucoes-topics">
      <?php
      $args = array(
        'post_parent' => 13,
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_per_page' => -1,
        'show_posts' => -1,
        'numberposts' => -1
        );
      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post ); ?>                   
      <div class="row">
        <img src="<?php the_field('icone-home') ?>" height="59" width="57" alt="">
        <span><?php the_title(); ?></span>
      </div>
    <?php endforeach; wp_reset_postdata();?>          
    <div class="row btn-solucoes text-center">
      <a href="<?php echo get_site_url(); ?>/solucoes/solucoes-para-sua-empresa/"><span class="text-light">Soluções para</span> <span class="text-bold">Pessoa Jurídica</span></a>
    </div>                                                                                                  
  </div>
</div>
</div>
</div>
</div>

<div class="container-fluid diferenciais-fluid">
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
    </div>                  
  </div>

<?php endwhile;
wp_reset_postdata();
else : ?>
<p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
<?php endif; ?>


</div>
</div>

<?php get_template_part( 'templates/link-com-banners', 'link-com-banners' ); ?>


<div class="map container-fluid">
  <div id="mapa" style="height: 500px; width: 100%">
  </div>            
</div>



<div class="container-fluid blog-fluid">
  <div class="container text-center blog-title-main">
    <h1><span class="text-light">ÚLTIMAS DO</span> <span class="text-bold">BLOG</span></h1>
    
  </div>
  <div class="container">
    <?php

    // set up our archive arguments
    $archive_args = array(
      post_type => 'post',    // get only posts
      'showposts' => 4,
      'post__not_in' => array(276,280), 
      );

    // new instance of WP_Quert
    $archive_query = new WP_Query( $archive_args );

    ?>


    <?php $date_old = ""; // assign $date_old to nothing to start ?>

    <?php while ( $archive_query->have_posts() ) : $archive_query->the_post(); // run the custom loop ?>

      <?php $date_new = get_the_time("F Y"); // get $date_new in "Month Year" format ?>

      <?php if ( $date_old != $date_new ) : // run the check on $date_old and $date_new, and output accordingly ?>
       
      <?php endif; ?>             
      <div class="col-md-3 blog-text-p">
       <?php the_post_thumbnail( array(300, 160), array( 'class' => ' width-100' )); ?>
       <div class="blog-text">
        <span><?php the_title(); ?></span>
      </div>
      <a href="<?php the_permalink() ?> "><p><?php echo excerpt('30'); ?></p></a> 
    </div>
    <?php $date_old = $date_new; // update $date_old ?>

  <?php endwhile; // end the custom loop ?>

  <?php wp_reset_postdata(); // always reset post data after a custom query ?>


</div>
</div>



<div class="container-fluid mensagem-fluid">
 <div class="container text-center">
   <h1><span class="text-light">MANDE SUA</span> <span class="text-bold">MENSAGEM</span></h1>
 </div>
</div>
<div class="container-fluid form-fluid">
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
<?php get_footer(); ?>