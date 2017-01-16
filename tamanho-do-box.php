       <?php /** Template Name: Tamanho do Box */ ?>
       <?php get_header(); ?>
       <div class="bg-internas container-fluid">
       </div>

       <div class="container-fluid interna-fluid-texto">
        <div class="container text-center">
          <?php wp_custom_breadcrumbs(); ?>
          <h1><span class="text-light"></span> <span class="text-bold">TAMANHO DO BOX</span></h1>          
        </div>
      </div>

      <div class="container-fluid">
        <div class="container calcule-espaco-title text-center">
          <h2>A Estoque Tudo tem o espaço perfeito para suas necessidades</h2>
        </div>
      </div>
      <br><br>

      <div class="container-fluid">
        <div class="container">

         <?php
         
         $args = array(
          'post_type' => 'tamanho_do_box',
          'showposts' => -1,
          'order' => 'ASC'
          );
         
      // Custom query.
         $query = new WP_Query( $args );
         
      // Check that we have query results.
         if ( $query->have_posts() ) {
          $i = 0;
      // Start looping over the query results.
          while ( $query->have_posts() ) {
            $i++;
            $query->the_post(); ?>
            
            <?php if ($i <= 1) { ?>
            <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3">
              <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )) ?>
              <div class="tabela-box-pequeno">
                <ul class="list-unstyled text-center">

                  <?php

                  // PUXANDO O CAMPO DO ACF E FAZENDO O EXPLODE DA VÍRGULA,
                  // FAZENDO UM FOREACH PARA DAR LOOP NAS MESMAS.
                  $char = get_field('tamanho_do_box');

                  $char_split = explode(",", $char);

                  foreach ($char_split as $caracteristica):

                    ?>

                  <li>
                    <div class="icone background-g hidden-xs">
                      <i class="fa fa-check" aria-hidden="true"></i>
                    </div>
                    <div class="texto fonte-medium">
                      <p><?php echo $caracteristica; ?></p>
                    </div>
                  </li>

                <?php endforeach; ?>

              </ul>              
            </div>
            <div class="texto-boxes">
              <?php the_content() ?>
            </div>
          </div>
          <?php
        }else if ($i <= 2) { ?>

        <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3">
         <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )) ?>
         <div class="tabela-box-medio">
           <ul class="list-unstyled text-center">

            <?php

                  // PUXANDO O CAMPO DO ACF E FAZENDO O EXPLODE DA VÍRGULA,
                  // FAZENDO UM FOREACH PARA DAR LOOP NAS MESMAS.
            $char = get_field('tamanho_do_box');

            $char_split = explode(",", $char);

            foreach ($char_split as $caracteristica):

              ?>

            <li>
              <div class="icone background-g hidden-xs">
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
              <div class="texto fonte-medium">
                <p><?php echo $caracteristica; ?></p>
              </div>
            </li>

          <?php endforeach; ?>

        </ul>                 
      </div>            
      <div class="texto-boxes">
       <?php the_content() ?>
     </div>            
   </div>
   <?php
 }else { ?>



 <div class="col-md-5 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3">
   <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )) ?>
   <div class="tabela-box-medio">
     <ul class="list-unstyled text-center">

      <?php

                  // PUXANDO O CAMPO DO ACF E FAZENDO O EXPLODE DA VÍRGULA,
                  // FAZENDO UM FOREACH PARA DAR LOOP NAS MESMAS.
      $char = get_field('tamanho_do_box');

      $char_split = explode(",", $char);

      foreach ($char_split as $caracteristica):

        ?>

      <li>
        <div class="icone background-g hidden-xs">
          <i class="fa fa-check" aria-hidden="true"></i>
        </div>
        <div class="texto fonte-medium">
          <p><?php echo $caracteristica; ?></p>
        </div>
      </li>

    <?php endforeach; ?>

  </ul>                 
</div>            
<div class="texto-boxes">
 <?php the_content() ?>
</div>            
</div>




<?php  }     ?>

<?php  
} ?>


<?php }

      // Restore original post data.
wp_reset_postdata();

?>

<!-- 
          <div class="col-md-3">
            <img src="images/box-pequeno_03.jpg" class="img-responsive" alt="">
            <div class="tabela-box-pequeno">
       <ul class="list-unstyled text-center">
          <li>2121</li>
           <li>2121</li>
           <li>212111</li> 

       </ul>               
            </div>
            <div class="texto-boxes">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam alias harum saepe, quibusdam ipsum, consequatur commodi, reiciendis esse rerum aliquam fugiat enim.</p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="images/box-medioo_03.jpg" class="img-responsive" alt="">
            <div class="tabela-box-medio">
       <ul class="list-unstyled text-center">
          <li>2121</li>
           <li>2121</li>
           <li>212111</li> 

       </ul>               
            </div>            
            <div class="texto-boxes">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam alias harum saepe, quibusdam ipsum, consequatur commodi, reiciendis esse rerum aliquam fugiat enim.</p>
            </div>            
          </div>
          <div class="col-md-5">
            <img src="images/box-grande_03.jpg" class="img-responsive" alt="">
            <div class="tabela-box-grande">
       <ul class="list-unstyled text-center">
          <li>2121</li>
           <li>2121</li>
           <li>212111</li> 

       </ul>               
            </div>            
            <div class="texto-boxes">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam alias harum saepe, quibusdam ipsum, consequatur commodi, reiciendis esse rerum aliquam fugiat enim.</p>
            </div>            
          </div> -->
        </div>
      </div>
      <?php get_template_part( 'templates/como-funciona-itens', 'como-funciona-itens' ); ?>

<!--         <div class="container-fluid">
            <div class="container">
              <div class="col-md-3 col-md-offset-0 col-xs-8 col-xs-offset-2">
                <div class="col-md-12 como-funciona-text">
                  <span>1. O que é</span>
                </div>
                <div class="col-md-12 lado-foto">
                <div class="bg-hover"></div>
                <div class="block-opacity-info">
                  <p>Você acessa a área dos boxes com o seu próprio veículo ou então utiliza os carrinhos de mão disponibilizados pela Estoque Tudo para transportar seus...</p>
                </div>
                  <img src="images/1-comofunciona_03.jpg" class="img-responsive" alt="">
                  <span class="contador-blocks">1</span>
                </div>
              </div>
              <div class="col-md-3 col-md-offset-0 col-xs-8 col-xs-offset-2">
                <div class="col-md-12 como-funciona-text">
                  <span>2. Como Guardar</span>
                </div>
                <div class="col-md-12 lado-foto">
                <div class="bg-hover"></div>
                <div class="block-opacity-info">
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>                
                  <img src="images/2-comofunciona_03.jpg"  class="img-responsive" alt="">
                  <span class="contador-blocks">2</span>
                </div>
              </div>
              <div class="col-md-3 col-md-offset-0 col-xs-8 col-xs-offset-2">
                <div class="col-md-12 como-funciona-text">
                  <span>3. Tamanho do Box</span>
                </div>
                <div class="col-md-12 lado-foto">
                <div class="bg-hover"></div>
                <div class="block-opacity-info">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur.</p>
                </div>                
                  <img src="images/3-comofunciona_03.jpg" class="img-responsive" alt="">
                  <span class="contador-blocks">3</span>
                </div>
              </div>
              <div class="col-md-3 col-md-offset-0 col-xs-8 col-xs-offset-2">
                <div class="col-md-12 como-funciona-text">
                  <span>4. Orçamento</span>
                </div>
                <div class="col-md-12 lado-foto">
                <div class="bg-hover"></div>
                <div class="block-opacity-info">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, dolores, velit.</p>
                </div>                
                  <img src="images/4-comofunciona_03.jpg" class="img-responsive" alt="">
                  <span class="contador-blocks">4</span>
                </div>
              </div>            
            </div>
          </div>  -->


          <br><br>

          <?php get_template_part( 'templates/link-com-banners', 'link-com-banners' ); ?>
          <?php get_footer(); ?>