         <?php /** Template Name: Blog */ ?>
       <?php get_header(); ?>
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
    <div class="row margin-blog">
  <?php

    // set up our archive arguments
    $archive_args = array(
      post_type => 'post',    // get only posts
      'posts_per_page'=> -1   // this will display all posts on one page
    );

    // new instance of WP_Quert
    $archive_query = new WP_Query( $archive_args );

  ?>


    <?php $date_old = ""; // assign $date_old to nothing to start ?>
 <?php $i = 0; ?>
    <?php while ( $archive_query->have_posts() ) : $archive_query->the_post(); // run the custom loop ?>
  <?php $i++; ?>
      <?php $date_new = get_the_time("F Y"); // get $date_new in "Month Year" format ?>

      <?php if ( $date_old != $date_new ) : // run the check on $date_old and $date_new, and output accordingly ?>
   
      <?php endif; ?>

      <div class="col-md-6 blog-box">
        <div class="col-md-12 foto-blog">
         <?php the_post_thumbnail('medium', array('class' => 'img-responsive')) ?>
        </div>
        <div class="col-md-12">
          <p>Publicado em: <strong><?php echo $date_new; ?></strong></p>
          <p>Categoria: <?php the_category(', '); ?></p>
          <h1><span class="text-light"></span> <span class="text-bold"><?php the_title(); ?></span></h1> 
          <p><?php echo excerpt('15'); ?></p>
          <a class="more" href="<?php the_permalink(); ?> ">Continue Lendo >></a>
        </div>
      </div>  
              <?php if ($i == 2) {
                  echo '</div><div class="row margin-blog">';
                  $i = 0;
              } ?>
        <?php endwhile; ?>
        </div>
      
     
      <?php wp_reset_query(); ?>
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
           <?php get_footer(); ?>