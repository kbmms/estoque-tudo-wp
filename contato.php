        <?php /** Template Name: Contato */ ?>
       <?php get_header(); ?>
<div class="bg-internas container-fluid">
        </div>

      <div class="container-fluid interna-fluid-texto">
        <div class="container text-center">
              <?php wp_custom_breadcrumbs(); ?>
              <h1><span class="text-light"></span> <span class="text-bold">CONTATO</span></h1>          
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


                    <div class="inputs-box col-md-6">
                      <div class="form-group">
                
                     
                          <input type="text" class="form-control" id="telefone" placeholder="Telefone">
                     
                      </div>                      
                    </div>
                    <div class="inputs-box col-md-6">
                      <div class="form-group">
                      
                      
                          <input type="email" class="form-control" id="assunto" placeholder="Assunto">
                
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
           <div class="container-fluid mensagem-fluid">
             <div class="container text-center">
               <h1><span class="text-light">COMO</span> <span class="text-bold">CHEGAR</span></h1>
             </div>
           </div>


           <div class="map container-fluid">
            <div id="mapa" style="height: 500px; width: 100%">
            </div>            
           </div>
           <?php get_footer(); ?>