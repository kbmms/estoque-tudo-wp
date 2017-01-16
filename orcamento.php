       <?php /** Template Name: Orçamento */ ?>
       <?php get_header(); ?>
       <div class="bg-internas container-fluid">
       </div>

       <div class="container-fluid interna-fluid-texto">
        <div class="container text-center">
          <?php wp_custom_breadcrumbs(); ?>
          <h1><span class="text-light"></span> <span class="text-bold">ORÇAMENTO</span></h1>          
        </div>
      </div>

      <div class="container-fluid">
        <div class="container calcule-espaco-title text-center">
          <h2>Solicite o seu orçamento conosco</h2>
        </div>
      </div>
      <br><br>

      <div class="container-fluid">
       <div class="container">
         <div class="form-box col-md-10 col-md-offset-1">
          
          <form class="form-horizontal">
            <div class="inputs-box col-md-6">
              <div class="form-group">
                
               
                <input type="text" class="form-control" id="nome" placeholder="Nome Completo*">
                
              </div>                      
            </div>
            <div class="inputs-box col-md-6">
              <div class="form-group">
                
                
                <input type="email" class="form-control" id="email" placeholder="E-mail *">
                
              </div>                      
            </div>


            <div class="inputs-box col-md-6">
              <div class="form-group">
                
               
                <input type="text" class="form-control" id="telefone" placeholder="Telefone">
                
              </div>                      
            </div>
            <div class="inputs-box col-md-6">
              <div class="form-group">
                
                
                <input type="email" class="form-control" id="assunto" placeholder="Tamanho do Box *">
                
              </div>                      
            </div>


            <div class="inputs-box col-md-6">
              <div class="form-group">
                
               
                <input type="text" class="form-control" id="telefone" placeholder="Tempo que Pretende Alugar o Box">
                
              </div>                      
            </div>
            <div class="inputs-box col-md-6">
              <div class="form-group">
                
                
                <input type="email" class="form-control" id="assunto" placeholder="Como Descobriu a Estoque Tudo">
                
              </div>                      
            </div>


            <div class="form-group">
              
              <div class="textarea col-sm-12">
                <textarea class="form-control" rows="3" placeholder="Observações"></textarea>
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
  


  <?php get_template_part( 'templates/como-funciona-itens', 'como-funciona-itens' ); ?>



  <br><br>

  <?php get_template_part( 'templates/link-com-banners', 'link-com-banners' ); ?>

  <?php get_footer(); ?>