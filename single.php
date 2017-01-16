 <?php get_header(); ?>
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div class="bg-internas container-fluid">
        </div>

      <div class="container-fluid interna-fluid-texto">
        <div class="container text-center">
              <?php wp_custom_breadcrumbs(); ?>
              <h1><span class="text-light"></span> <span class="text-bold">BLOG</span></h1>          
        </div>
      </div>



<div class="container-fluid">
  <div class="container">
    <div class="col-md-8">

   
        <div class="col-md-12 foto-blog">
          <?php the_post_thumbnail('full', array('class' => 'img-responsive')) ?>
        </div>
        <div class="single col-md-12">
         <?php $date_new = get_the_time("F Y"); ?>
          <p>Publicado em: <strong><?php echo $date_new; ?></strong></p> 
          <p>Categoria: <strong><?php echo '<span>'. get_the_category( $id )[0]->name .'</span>'; ?></strong> </p>
          <h1>DICAS PARA ACABAR COM A BAGUNÇA NA SUA CASA</h1> 
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis eius, neque. Accusantium rerum labore saepe in vero voluptatum, mollitia ipsum recusandae, officia eum earum aliquid omnis reiciendis numquam corrupti voluptatem voluptas incidunt. Fugit veritatis consectetur voluptate delectus eligendi dolorem numquam tempore provident eaque quam facere, atque perspiciatis necessitatibus, modi dignissimos asperiores at veniam. Doloremque enim facere nostrum expedita ea delectus eligendi explicabo velit est non ex id at doloribus neque quia quasi in, asperiores odio assumenda. Eos aspernatur deleniti dicta quaerat expedita delectus voluptate earum dolor provident nulla maxime repellat esse, architecto molestiae voluptas asperiores quos maiores fuga voluptatem qui!</p>
          <br>
          <a class="back" href="javascript:window.history.go(-1)">< voltar</a>
        </div>
                 
    </div>
    <div class="col-md-4 categoria-looping">
      <ul>
          <?php wp_list_categories( array(
              'orderby'    => 'name',
              'show_count' => true
              // 'exclude'    => array( 10 )
          ) ); ?> 
      </ul>
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