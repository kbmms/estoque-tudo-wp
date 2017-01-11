           <div class="container-fluid rodape-fluid">
             <div class="container">
               <div class="rodape-box col-md-10 col-md-offset-1">
<?php get_template_part( 'templates/footer/menu-map-links', 'menu-map-links' ); ?>

                 <hr class="visible-xs visible-sm">
                 <div class="footer-2 col-md-5">
                  <p> <span class="text-light">Sobre</span>  <span class="text-bold">Nós</span></p>
                  <?php if ( ! dynamic_sidebar('footer1')) : ?>
                <h2>This is Footer 1</h2>
                <?php endif; ?>
                    
                <!--    <p class="texto-footer-p">A Estoque Tudo é um local seguro, monitorado 24h por dia e com acesso restrito. A armazenagem dos seus itens é feita em boxes individuais, a chave e a senha de acesso ficam apenas com você. Possuímos espaços com tamanhos variados Leia Mais </p> -->
                 </div>
                  <hr class="visible-xs visible-sm">
                 <div class="footer-3 col-md-4">
                   <p> <span class="text-light">Entre em</span>  <span class="text-bold">Contato</span></p>
                <?php if ( ! dynamic_sidebar('footer2')) : ?>
                    <h2>This is Footer 1</h2>
                    <?php endif; ?> 

                 </div>
               </div>
             </div>
           </div>


           <div class="container-fluid copy-fluid">
             <div class="container text-rodape">
               <span class="pull-left">Desenvolvido por Abrasivo Digital Studio. Todos os direitos reservados.</span>
               <span class="pull-right"><img src="<?php bloginfo('template_url')?>/images/abrasivo_03.png" height="18" width="62" alt=""></span>
             </div>
           </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/bxslider/jquery.bxslider.min.js"></script>


    <!-- Maps API Javascript -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Caixa de informação -->
    <script src="<?php bloginfo('template_url')?>/js-map/infobox.js"></script>

        <!-- Agrupamento dos marcadores -->
    <script src="<?php bloginfo('template_url')?>/js-map/markerclusterer.js"></script>

        <!-- Arquivo de inicialização do mapa -->
    <script src="<?php bloginfo('template_url')?>/js-map/mapa.js"></script>
       
    <script>
        $(document).ready(function(){
          $('.bxslider').bxSlider({
            mode:"fade",
            adaptiveHeight: true,
            pager: false,
            auto:true

          });
        });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>