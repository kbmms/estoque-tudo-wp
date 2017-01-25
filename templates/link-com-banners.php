            <?php if (is_home()){ ?>

           <div class="container-fluid chamadas-fluid">
             <div class="container">
             <a href="<?php echo get_site_url(); ?>/solucoes-estoque-tudo/solucoes-para-voce/">
                <div class="col-md-4 col-md-offset-0 col-xs-12 col-xs-offset-0">
                  <img src="<?php bloginfo('template_url')?>/images/chamada01_03.jpg" class="img-responsive" alt="">
                </div>
              </a>
                <a href="<?php echo get_site_url(); ?>/como-funciona-estoque-tudo/tamanho-do-box/">
                <div class="col-md-4 col-md-offset-0 col-xs-12 col-xs-offset-0">
                  <img src="<?php bloginfo('template_url')?>/images/chamada02_03.jpg" class="img-responsive" alt="">
                </div>
                </a>
                <a href="<?php echo get_site_url(); ?>/como-funciona-estoque-tudo/orcamento/">
                <div class="col-md-4 col-md-offset-0 col-xs-12 col-xs-offset-0">
                  <img src="<?php bloginfo('template_url')?>/images/chamada03_03.jpg" class="img-responsive" alt="">
                </div>
                </a>
             </div>
           </div>

        <?php  }elseif (is_page('solucoes-estoque-tudo/solucoes-para-sua-empresa-negocios')) { ?>
           <div class="container-fluid chamadas-fluid">
             <div class="container">
               <a href="<?php echo get_site_url(); ?>/como-funciona-estoque-tudo/orcamento/">
                <div class="col-md-6 col-md-offset-0 col-xs-12 col-xs-offset-0">
                  <img src="<?php bloginfo('template_url')?>/images/estoque_tudo_solucoes_para_sua_empresa_03.jpg" class="img-responsive" alt="">
                </div>
              </a>
              <a href="<?php echo get_site_url(); ?>/como-funciona-estoque-tudo/tamanho-do-box/">
                <div class="col-md-6 col-md-offset-0 col-xs-12 col-xs-offset-0">
                  <img src="<?php bloginfo('template_url')?>/images/imagem-interna_dois_03.jpg" Class="img-responsive" alt="">
                </div>
               </a> 
             </div>
           </div>

        <?php  }elseif (is_page('solucoes-estoque-tudo/solucoes-para-voce')) { ?>
           <div class="container-fluid chamadas-fluid">
             <div class="container">
             <a href="<?php echo get_site_url(); ?>/como-funciona-estoque-tudo/orcamento/">
                <div class="col-md-6 col-md-offset-0 col-xs-12 col-xs-offset-0">
                  <img src="<?php bloginfo('template_url')?>/images/estoque_tudo_solucoes_para_sua_empresa_03.jpg" class="img-responsive" alt="">
                </div>
                </a>
                <a href="<?php echo get_site_url(); ?>/como-funciona-estoque-tudo/tamanho-do-box/">
                <div class="col-md-6 col-md-offset-0 col-xs-12 col-xs-offset-0">
                  <img src="<?php bloginfo('template_url')?>/images/imagem-interna_dois_03.jpg" Class="img-responsive" alt="">
                </div>
                </a>
             </div>
           </div>

         <?php }else{ ?>
            <div class="container-fluid chamadas-fluid">
             <div class="container">
             <a href="<?php echo get_site_url(); ?>/solucoes-estoque-tudo/solucoes-para-voce/">
                <div class="col-md-6 col-md-offset-0 col-xs-12 col-xs-offset-0">
                  <img src="<?php bloginfo('template_url')?>/images/imagem-interna_um_03.jpg" class="img-responsive" alt="">
                </div>
                </a>
                <a href="<?php echo get_site_url(); ?>/como-funciona-estoque-tudo/tamanho-do-box/">
                <div class="col-md-6 col-md-offset-0 col-xs-12 col-xs-offset-0">
                  <img src="<?php bloginfo('template_url')?>/images/imagem-interna_dois_03.jpg" Class="img-responsive" alt="">
                </div>
                </a>
             </div>
           </div>
       <?php   } ?>