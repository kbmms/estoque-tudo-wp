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


<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url')?>/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url')?>/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url')?>/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url')?>/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url')?>/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url')?>/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url')?>/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url')?>/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url')?>/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url')?>/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url')?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url')?>/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url')?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_url')?>/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
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
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=334550010235208";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>  
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-90780215-1', 'auto');
    ga('send', 'pageview');

  </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K24J5F5');</script>

<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K24J5F5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
              <a class="navbar-brand" href="<?php bloginfo('url')?>">Estoque Tudo</a>
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
                <span  data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-search search-mobile" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" aria-hidden="true"></span>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>