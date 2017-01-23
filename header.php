<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/bxslider/jquery.bxslider.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <title>Estoque Tudo</title>

  <!-- Bootstrap -->
  <link href="<?php bloginfo('template_url')?>/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head(); ?>
    </head>
    <body>
      <!-- Small modal -->



      <!-- Modal Aparece quando clica em pesquisa-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="busca modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Faça sua Busca</h4>
            </div>
            <div class="input-group">
              <form role="search" class="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                <input type="text" class="form-control" placeholder="Busca..." name="s">
                <span class="input-group-btn">
                  <button class="btn-search btn btn-default"  type="submit"> <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
                </span>           
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid topo-fluid visible-md visible-lg visible-sm">
        <div class="container">
          <div class="topo tel">
            <span class="pull-right"><span class="text-light">+55 (71) <strong class="text-bold">     <?php 
     global $data;
echo $data['test_text'];
      ?> </strong></span> <a href="<?php echo get_site_url(); ?>/blog" class="text-light">Blog</a><span  data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-search" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" aria-hidden="true"></span></span>
          </div>
        </div>
      </div>
      <div class="container-fluid topo-menu-fluid visible-md visible-lg visible-sm">
        <div class="container">
          <div class="topo tel">
            <div class="logo pull-left">
            <a href="<?php bloginfo('url')?>">

            <img src="<?php echo $data['media_upload_356']; ?>" height="183" width="165" alt="">
      <?php 
global $data;

       ?> 

            </a>
            </div>

            <?php
            wp_nav_menu(
              $args = array(
                'menu' => 'principal',
                'container' => 'ul',
                'container_class' => 'nav navbar-nav ',
                'container_id' => '',
                'menu_class' => 'nav navbar-nav menu-direita-one pull-right',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 0,
                'walker' => new WPDocs_Walker_Nav_Menu(),
                'theme_location' => 'principal'
                )
              );
              ?>               



            </div>
          </div>
        </div>    

        <nav class="navbar navbar-default default-mobile-menu visible-xs">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Estoque Tudo</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse mobile-menu" id="bs-example-navbar-collapse-1">

              <?php
              wp_nav_menu(
                $args = array(
                  'menu' => 'principal',
                  'container' => 'ul',
                  'container_class' => 'nav navbar-nav ',
                  'container_id' => '',
                  'menu_class' => 'nav navbar-nav menu-mobile',
                  'menu_id' => '',
                  'echo' => true,
                  'fallback_cb' => 'wp_page_menu',
                  'before' => '',
                  'after' => '',
                  'link_before' => '',
                  'link_after' => '',
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'depth' => 0,
                  'walker' => new WPDocs_Walker_Nav_Menu(),
                  'theme_location' => 'principal'
                  )
                );
                ?>  
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>